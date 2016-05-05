<?php
namespace Home\Widget;
use Think\Controller;
class CateWidget extends Controller {
   public function head(){
		$field='id,webtitle,webkey,webdesc';
		$webdata=M("webconfig")->field($field)->order('id desc')->limit(1)->select();
		$catedata=M("cate")->order("cateindex desc")->select();	
		$this->assign('webtitle',$webdata[0]['webtitle']);
		$this->assign('webkey',$webdata[0]['webkey']);
		$this->assign('webdesc',$webdata[0]['webdesc']);
		$this->assign('webfoot',$webdata[0]['webfoot']);
		$this->assign("catedata",$catedata);
		//dump($catedata);
		$this->display('Widget:head');
    }
   public function footer(){
		$field='id,webbeian,webfoot';
		$webdata=M("webconfig")->field($field)->order('id desc')->limit(1)->select();
		$this->assign('webbeian',$webdata[0]['webbeian']);
		$this->assign('webfoot',$webdata[0]['webfoot']);
		$this->display('Widget:footer');
	
    }
   public function right(){
	    $linkdata=M("link")->order('id desc')->select();
		$topdata=M("article")->where('istop=1')->limit(6)->select();
		$indexdata=M("article")->where('isindex=1')->limit(6)->select();
		$field='id,webpeople,webphone,webqq';
		$webdata=M("webconfig")->field()->order('id desc')->limit(1)->select();	
		$classdata=M("class")->field("classname")->select();	
		$this->assign('webpeople',$webdata[0]['webpeople']);
		$this->assign('webphone',$webdata[0]['webphone']);
		$this->assign('webqq',$webdata[0]['webqq']);
		$this->assign('topdata',$topdata);	
		$this->assign("classdata",$classdata);
		$this->assign("topdata",$topdata);
		$this->assign("indexdata",$indexdata);
		$this->assign("linkdata",$linkdata);
		$this->display('Widget:right');
    }
}
?>