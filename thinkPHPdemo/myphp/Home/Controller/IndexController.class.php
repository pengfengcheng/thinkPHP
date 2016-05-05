<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $ad=M("ad");
		$count=$ad->count();		 
		$addata=$ad->limit(4)->select();
		
        $article=M("article");
		$count      = $article->count();
		$Page       = new \Think\Page($count,6);
		$data=$article->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
		$show       = $Page->show();
		$this->assign("data",$data);
		$this->assign("addata",$addata);
		$this->assign("count",$count);
		$this->assign('page',$show);	
		$this->assign('data',$data);	
		$this->assign('count',$count);	
		$this->display();		
    }
	
	 public function clist($cname){
		 //下面这段有些地方要加上这个编码才可以
		//$cname=mb_convert_encoding($cname, "UTF-8", "GBK");	
		//上面这段有些地方要加上这个编码可
	
		///---------------------------------
		$article=M("article");
		$count      = $article->where("classname='$cname'")->count();
		$classdata=M("class")->where("classname='$cname'")->find();
		$Page       = new \Think\Page($count,6);		
		$show       = $Page->show();
		$data=$article->where("classname='$cname'")->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('classtitle',$classdata["classtitle"]);
		$this->assign('classkey',$classdata["classkey"]);
		$this->assign('classbody',$classdata["classbody"]);
		$this->assign("data",$data);	
		$this->assign('page',$show);
		//--------------------------------------
		$class=M("class");
		$classdata=$class->field("classname")->select();
		$this->assign("classdata",$classdata);
		$this->assign("catedata",$catedata);
		//----------------------------------//
		$article=M("article");
		$count      = $article->where("classname='$cname'")->count();
		$Page       = new \Think\Page($count,6);
		$data=$article->where("classname='$cname'")->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();	
		$topdata=$article->where('istop=1')->limit(6)->select();
		$indexdata=$article->where('isindex=1')->limit(6)->select();	
		$show       = $Page->show();
		$this->assign("data",$data);	
		$this->assign('page',$show);
		$this->assign('topdata',$topdata);
		$this->assign('indexdata',$indexdata);
		//------------------
		$linkdata=M("link")->order('id desc')->select();
		$this->assign("linkdata",$linkdata);
		$this->display();
		
    }
	public function body($id){
		$article=M("article");
		$data=$article->find($id);
		$this->assign('title',$data['title']);
		$this->assign('body',$data['body']);
		$this->assign('ardesc',$data['ardesc']);
		$this->assign('arkey',$data['arkey']);
		$this->assign('write',$data['write']);
		$this->assign('stitlepic',$data['stitlepic']);
		$this->assign('subtime',$data['subtime']);
		$this->assign('classname',$data['classname']);
		$this->display();
		 }
		  
	public function page($id){
		$article=M("page");
		$data=$article->find($id);
		$topdata=$article->limit(6)->select();
		$this->assign('topdata',$topdata);
		$this->assign('title',$data['title']);
		$this->assign('body',$data['body']);
		$this->assign('ardesc',$data['ardesc']);
		$this->assign('arkey',$data['arkey']);
		$this->assign('write',$data['write']);
		$this->assign('subtime',$data['subtime']);
		$this->display();
		  }
    
}