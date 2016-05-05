<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends CommonController {
    public function index(){
      // echo CONTROLLER_NAME."/".ACTION_NAME;
	$this->assign("username",session("username"));	
	$this->display();
    }
	
	public function qq(){

	$this->display();
    }
	public function tel(){

	$this->display();
    }
	public function admin(){
	$this->assign("username",session("username"));
	$user=M("user");
	$data=$user->where("username='".session("username")."'")->find();
	$this->assign("password",$data['password']);	
	$this->assign("admin",$data['admin']);	
	$this->assign("id",$data['id']);	
	$this->display();
    }
	public function post($id){
		$user=M("user");
		$data=$user->where("id=".$id)->find();
		$data['username'] = I('post.username');
		$data['password'] = I('post.password');
		$user->where("id=$id")->save($data);
		$this->success("修改帐号密码成功，你就马上退出重新登录！",U('login/logout'));
    }

}