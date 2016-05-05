<?php
namespace Admin\Controller;
use Think\Controller;
class CateController extends CommonController {
    public function index(){
		$cate=M("cate");
		$data=$cate->order('cateindex desc')->select();
		$this->assign("data",$data);
	    $this->display();
    }
	
	public function post(){
		if(i('post.catename')!=null){
			$cate = M("cate"); 
			$data['catename'] = I('post.catename');
			$data['cateurl'] = I('post.cateurl');
			$data['cateindex'] = I('post.cateindex');
			$cate->add($data);
			$this->success("操作成功啦！",index);	
		}
    }
	
	public function edit($id){
		$cate=M("cate");
		$data=$cate->find($id);
		$data['catename'] = I('post.catename');
		$data['cateurl'] = I('post.cateurl');
		$data['cateindex'] = I('post.cateindex');
		$cate->where("id=$id")->save($data);
		$this->success("操作成功啦！",U('index'));	
		}	
		

		
	public function del($id){
		$cate=M("cate");
		$cate->where("id=$id")->delete();
		$this->success("操作成功啦！",U('index'));	
		}
		
}
?>