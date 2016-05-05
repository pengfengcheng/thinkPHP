<?php
namespace Admin\Controller;
use Think\Controller;
class AdController extends CommonController {
	public function index(){
		$ad=M("ad");
		$data=$ad->select();
		$this->assign("data",$data);
		$this->display();
		}
		
	public function post(){
		if(!IS_POST) halt("页面不存在");
		$ad=M("ad");
		$upload=new \Think\Upload();
		$info=$upload->upload();
		$image=new \Think\Image();	
		$upload->maxSize=3145728;
		$upload->exts=array('jpg','png','gif','jpeg');
		$upload->rootPath='./Uploads/';	
		$data['adname'] = I('post.adname');
		$data['adurl'] = I('post.adurl');	
		if(!$info){
				$this->error($upload->getError());	
				}
			else{
					foreach($info as $file)
					{
						$image->open('./uploads/'.$file['savepath'].$file['savename']);
						$image->thumb(740,300,\Think\image::IMAGE_THUMB_NORTHWEST)->save('./uploads/'.$file['savepath']."thumb".$file['savename']);									
					}
					$data['adfile'] = '/uploads/'.$file['savepath']."thumb".$file['savename'];
				}
			$ad->add($data);
			$this->success("广告添加成功！",index);	
		}
	 public function del($id){
		$ad=M("ad");
		$addata=$ad->where("id=$id")->delete();
		$this->success("删除广告成功啦！",U('index'));	
		}
		
	public function edit($id){
		$ad=M("ad");
		$data=$ad->find($id);
		$this->assign('id',$data['id']);
		$this->assign('adname',$data['adname']);
		$this->assign('adurl',$data['adurl']);
		$this->assign('adfile',$data['adfile']);
		$this->display();		
}		
	public function update($id)
	{
		$ad=M("ad");
		$data=$ad->find($id); 
		$data['adname'] = I('post.adname');
		$data['adurl'] = I('post.adurl');
		$upload=new \Think\Upload();
		$info=$upload->upload();
		$image=new \Think\Image();	
		$upload->maxSize=3145728;
		$upload->exts=array('jpg','png','gif','jpeg');
		$upload->rootPath='./Uploads/';
		
		if($info){
			foreach($info as $file){					
			$image->open('./uploads/'.$file['savepath'].$file['savename']);
			$image->thumb(740,300,\Think\image::IMAGE_THUMB_NORTHWEST)->save('./uploads/'.$file['savepath']."thumb".$file['savename']);
		}
			$data['adfile'] = '/uploads/'.$file['savepath']."thumb".$file['savename'];
			$ad->where("id=$id")->save($data);
			$this->success("操作成功啦！",U('index'));				
		}
		else{
			$ad->where("id=$id")->save($data);
			$this->success("操作成功啦！",U('index'));		
			}
	}
	}
?>