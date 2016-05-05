<?php
namespace Admin\Controller;
use Think\Controller;
class ArticleController extends CommonController {
	public function index(){		
		$article=M("article");
		$count      = $article->count();// 查询满足要求的总记录数
		$Page       = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(25)
		$show       = $Page->show();// 分页显示输出
		$data=$article->field("id,title,classname")->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign("data",$data);
		$this->assign('page',$show);
		
		$this->display();
		}
		
	public function add(){
		$class=M("class");
		$classdata=$class->field("classname")->select();
		$this->assign("classdata",$classdata);
		$this->display();
		}
		
	public function del($id){
		$article=M("article");
		$article->where("id=$id")->delete();
		$this->success("操作成功啦！",U('index'));	
		}
		
public function update($id)
	{
		$article=M("article");
		$data=$article->find($id);
		$article=M("article");			 
		$data['title'] = I('post.title');
		$data['classname'] = I('post.classname');
		$data['istop'] = I('post.istop');
		$data['isindex'] = I('post.isindex');
		$data['arkey'] = I('post.arkey');
		$data['ardesc'] = I('post.ardesc');
		$data['body'] = $_POST['body'];
		$data['subtime'] = I('post.subtime');
		$data['write'] = I('post.write');
		$upload=new \Think\Upload();
		$info=$upload->upload();
		$image=new \Think\Image();	
		$upload->maxSize=3145728;
		$upload->exts=array('jpg','png','gif','jpeg');
		$upload->rootPath='./Uploads/';
		
		if($info){
			foreach($info as $file){					
			$image->open('./uploads/'.$file['savepath'].$file['savename']);
			$image->thumb(650,200,\Think\image::IMAGE_THUMB_NORTHWEST)->save('./uploads/'.$file['savepath']."thumb".$file['savename']);
		}
			$data['titlepic'] = '/uploads/'.$file['savepath'].$file['savename'];
			$data['stitlepic'] = '/uploads/'.$file['savepath']."thumb".$file['savename'];
			$article->where("id=$id")->save($data);
			$this->success("操作成功啦！",U('index'));				
		}
		else{
			$article->where("id=$id")->save($data);
			$this->success("操作成功啦！",U('index'));		
			}
	}
	public function edit($id){
		$class=M("class");
		$classdata=$class->field("classname")->select();
		$this->assign("classdata",$classdata);
		$article=M("article");
		$data=$article->find($id);
		$this->assign('id',$data['id']);
		$this->assign('title',$data['title']);
		$this->assign('classname',$data['classname']);
		$this->assign('istop',$data['istop']);
		$this->assign('isindex',$data['isindex']);
		$this->assign('arkey',$data['arkey']);
		$this->assign('ardesc',$data['ardesc']);
		$this->assign('body',$data['body']);
		$this->assign('subtime',$data['subtime']);
		$this->assign('stitlepic',$data['stitlepic']);
		$this->assign('write',$data['write']);
		$this->display();		
}	
		
		
		
		public function post(){	
			
			$upload=new \Think\Upload();
			$image=new \Think\Image();	
			$upload->maxSize=3145728;
			$upload->exts=array('jpg','png','gif','jpeg');
			$upload->rootPath='./Uploads/';
			
			$article=M("article");			 
			$data['title'] = I('post.title');
			$data['classname'] = I('post.classname');
			$data['istop'] = I('post.istop');
			$data['isindex'] = I('post.isindex');
			$data['arkey'] = I('post.arkey');
			$data['ardesc'] = I('post.ardesc');
			$data['body'] = $_POST['body'];
			$data['subtime'] = I('post.subtime');
			$data['write'] = I('post.write');
			$info=$upload->upload();
			if(!$info){
				$this->error($upload->getError());	
				}
			else{
					foreach($info as $file)
					{
						$image->open('./uploads/'.$file['savepath'].$file['savename']);
						$image->thumb(650,200,\Think\image::IMAGE_THUMB_NORTHWEST)->save('./uploads/'.$file['savepath']."thumb".$file['savename']);									
					}
					$data['titlepic'] = '/uploads/'.$file['savepath'].$file['savename'];
					$data['stitlepic'] = '/uploads/'.$file['savepath']."thumb".$file['savename'];
				}
			$article->add($data);
			$this->success("文章添加成功！",index);	
	}
	
}
?>