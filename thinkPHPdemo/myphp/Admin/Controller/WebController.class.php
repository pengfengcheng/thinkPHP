<?php
namespace Admin\Controller;
use Think\Controller;
class WebController extends CommonController {
	public function index(){
		$web=M("webconfig");
		$webdata=$web->order('id desc')->limit(1)->select();
		$this->assign("webdata",$webdata);	
		$this->display();
		}
	public function edit($id){
		$web=M("webconfig");
		$data=$web->find($id);
		//$webdata=$web->order('id desc')->limit(1)->select();
		$webdata['webtitle'] =$_POST['webtitle'];
		$webdata['webkey'] =$_POST['webkey'];
		$webdata['webdesc'] =$_POST['webdesc'];
		$webdata['webfoot'] =$_POST['webfoot'];
		$webdata['webbeian'] =$_POST['webbeian'];
		$webdata['webpeople'] =$_POST['webpeople'];
		$webdata['webphone'] =$_POST['webphone'];
		$webdata['webqq'] =$_POST['webqq'];
		$web->where("id=$id")->save($webdata);
		$this->success("信息保存成功！",U('index'));
		}
	
}
?>