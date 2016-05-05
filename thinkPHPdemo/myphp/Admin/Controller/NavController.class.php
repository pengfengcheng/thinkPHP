<?php
namespace Admin\Controller;
use Think\Controller;
class NavController extends CommonController {
    public function index(){
		$class=M("class");	
		$data=$class->select();
		$this->assign("data",$data);
	    $this->display();
    }
	
	public function add(){
		$this->display();		
    }
	
	public function post(){
		if(i('post.classtitle')!=null){
			$class = M("class"); 
			$data['classname'] = I('post.classname');
			$data['classtitle'] = I('post.classtitle');
			$data['classkey'] = I('post.classkey');
			$data['classbody'] = I('post.classbody');
			$class->add($data);
			$this->success("操作成功啦！",index);	
		}
    }
	
	public function edit($id){
		$class=M("class");
		$data=$class->find($id);
		$this->assign('id',$data['id']);
		$this->assign('classname',$data['classname']);
		$this->assign('classtitle',$data['classtitle']);
		$this->assign('classkey',$data['classkey']);
		$this->assign('classbody',$data['classbody']);
		$this->display();
		}
		
		
	public function update($id){
		$class=M("class");
		$data=$class->find($id);
		$data['classname']=I('post.classname');
		$data['classtitle']=I('post.classtitle');
		$data['classkey']=I('post.classkey');
		$data['classbody']=I('post.classbody');
		$class->where("id=$id")->save($data);
		$this->success("操作成功啦！",U('index'));	
		}
		
	public function del($id){
		$class=M("class");
		$class->where("id=$id")->delete();
		$this->success("操作成功啦！",U('index'));	
		}
		
}
?>