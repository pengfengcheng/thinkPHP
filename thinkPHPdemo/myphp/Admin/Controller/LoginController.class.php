<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
	public function index(){
		$this->display("index/login");
		}
	public function post(){
		//if(!IS_POST) halt("页面不存在！");
		$user=M("user");
		$username=I('post.username');
		$password=I('post.password');
		$userdata=$user->where("username='$username' and password='$password'")->find();
		session("username",$userdata['username']);
		if(!$userdata){
			$this->error("帐号密码错误！");
			
			}
		else{
			$this->success("登录成功！",'../Index/');
			
			
		
			} 		
		}
		public function logout(){
			session_unset();
			session_destroy();
			$this->success("退出成功！");	
			}
	
}
?>