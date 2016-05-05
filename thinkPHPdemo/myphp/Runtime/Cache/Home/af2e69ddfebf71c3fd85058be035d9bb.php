<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo ($title); ?> <?php echo ($classtitle); echo ($webtitle); ?></title>
<meta name="keywords" content="<?php echo ($arkey); echo ($classkey); echo ($webkey); ?>"/>
<meta name="description" content="<?php echo ($ardesc); echo ($classbody); echo ($webdesc); ?>"/>
<link rel="stylesheet" href="/Home/View/Public/styles/bootstrap.css">
<link rel="stylesheet" href="/Home/View/Public/styles/app.css">
<script src="/Home/View/Public/js/jquery-1.11.2.min.js"></script>
<script src="/Home/View/Public/js/bootstrap.min.js" ></script>
</head>
<body class="home-template">
<header class="main-header">
  <div class="container">
    <div class="row">
      <div class="col-md-12"> <a href="#" class="branding" title="我的首页"> <img src="/Home/View/Public/images/logo.png" style="width:600px;height:200px">
        <h2 class="text-hide"><?php echo ($webdesc); ?></h2>
        </a> </div>
    </div>
  </div>
</header>
<nav class="main-navigation">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
       <!-- <div class="nav-header">  </div>-->
	    <!--导航栏-->
        <div class="navbar" id="main-menu">
          <ul class="menu">         
            <li  id="mymenu"> <a href="http://www.tpdemo.com/" >首页</a> </li>
            <?php if(is_array($catedata)): $i = 0; $__LIST__ = $catedata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cavo): $mod = ($i % 2 );++$i;?><li id="mymenu"> <a href='<?php echo ($cavo["cateurl"]); ?>' ><?php echo ($cavo["catename"]); ?></a> </li><?php endforeach; endif; else: echo "" ;endif; ?>
            <script>
            $("#mymenu").click(function(){
				//alert("你点到我了");
				//$(this).addClass("nav-curren").siblings().removeClass("nav-current");
				});
            </script>
          </ul>
        </div>
      </div>
    </div>
  </div>
</nav>