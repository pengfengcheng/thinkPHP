<?php
namespace Admin\Controller;
use Think\Controller;
class PageController extends CommonController {
	public function pindex(){		
		$article=M("page");
		$count      = $article->count();// 查询满足要求的总记录数
		$Page       = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(25)
		$show       = $Page->show();// 分页显示输出
		$data=$article->field("id,title")->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign("data",$data);
		$this->assign('page',$show);
		$this->display();
		}
		

		
	public function del($id){
		$article=M("page");
		$article->where("id=$id")->delete();
		$this->success("删除单页成功！",U('pindex'));	
		}
		
public function update($id)
	{
		$article=M("page");
		$data=$article->find($id);
		$data['title'] = I('post.title');
		$data['arkey'] = I('post.arkey');
		$data['ardesc'] = I('post.ardesc');
		$data['body'] = $_POST['body'];
		$data['subtime'] = I('post.subtime');
		$data['write'] = I('post.write');
		$article->where("id=$id")->save($data);
		$this->success("修改单页成功！",U('pindex'));			
	}
	
	public function pedit($id){
		$article=M("page");
		$data=$article->find($id);
		$this->assign('id',$data['id']);
		$this->assign('title',$data['title']);
		$this->assign('arkey',$data['arkey']);
		$this->assign('ardesc',$data['ardesc']);
		$this->assign('body',$data['body']);
		$this->assign('subtime',$data['subtime']);
		$this->assign('write',$data['write']);
		$this->display();	
}	
		
		
			
		public function post(){				
			$article=M("page");			 
			$data['title'] = I('post.title');
			$data['arkey'] = I('post.arkey');
			$data['ardesc'] = I('post.ardesc');
			$data['body'] = $_POST['body'];
			$data['subtime'] = I('post.subtime');
			$data['write'] = I('post.write');			
			$article->add($data);
			$this->success("单页添加成功！",U('pindex'));	
	}
	
}
?>