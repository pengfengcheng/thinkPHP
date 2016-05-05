<?php
namespace Admin\Controller;
use Think\Controller;
class CommonController extends Controller {
	public function _initialize(){
		if(session("username")!=""){			
			//$this->display();	
			}
		else{
			$this->display("index/login");
			exit;
			}
	}
	
}
?>