<?php
namespace Admin\Controller;
use Think\Controller;
class LinkController extends CommonController {
	public function index(){
		$ad=M("link");
		$data=$ad->order("id desc")->select();
		$this->assign("data",$data);
		$this->display();
		}
		
	public function post(){
		$ad=M("link");		
		$data['linkname'] = I('post.linkname');
		$data['linkurl'] = I('post.linkurl');	
		$ad->add($data);
		$this->success("友情链接添加成功！",index);	
		}
	 public function del($id){
		$ad=M("link");
		$addata=$ad->where("id=$id")->delete();
		$this->success("删除友情链接成功！",U('index'));	
		}
		
	public function edit($id){
		$ad=M("link");
		$data=$ad->find($id);
		$this->assign('id',$data['id']);
		$this->assign('linkname',$data['linkname']);
		$this->assign('linkurl',$data['linkurl']);
		$this->display();		
}		
	public function update($id)
	{
		$ad=M("link");
		$data=$ad->find($id); 
		$data['linkname'] = I('post.linkname');
		$data['linkurl'] = I('post.linkurl');
		$ad->where("id=$id")->save($data);
		$this->success("操作成功啦！",U('index'));		
		
	}
}
?>