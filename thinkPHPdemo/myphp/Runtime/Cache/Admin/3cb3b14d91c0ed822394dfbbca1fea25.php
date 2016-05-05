<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
<link rel="stylesheet" href="/Admin/View/Public/styles/bootstrap.min.css">
</head>

<body>
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">网站基础配置</a></li>
  </ul>
  
 <div class="tab-content" style="margin-top:20px;">
    <div role="tabpanel" class="tab-pane active" id="home">
   <?php if(is_array($webdata)): $i = 0; $__LIST__ = $webdata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><form class="form-horizontal" method="post" action="/index.php/Admin/Web/edit/id/<?php echo ($vo["id"]); ?>">
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">网站名称:</label>
          <div class="col-sm-6">
            <input type="text" class="form-control" name="webtitle" value="<?php echo ($vo["webtitle"]); ?>">
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">网站关键字:</label>
          <div class="col-sm-6">
            <input type="text" class="form-control" name="webkey" value="<?php echo ($vo["webkey"]); ?>">
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">网站描述:</label>
          <div class="col-sm-6">
            <textarea class="form-control" name="webdesc"><?php echo ($vo["webdesc"]); ?></textarea>
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">网站底部信息（支持html）:</label>
          <div class="col-sm-6">
            <textarea class="form-control" name="webfoot"><?php echo ($vo["webfoot"]); ?></textarea>
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">网站备案号:</label>
          <div class="col-sm-6">
            <input type="text" class="form-control" name="webbeian" value="<?php echo ($vo["webbeian"]); ?>" >
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">联系人:</label>
          <div class="col-sm-6">
            <input type="text" class="form-control" name="webpeople" value="<?php echo ($vo["webpeople"]); ?>" >
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">联系电话:</label>
          <div class="col-sm-6">
            <input type="text" class="form-control" name="webphone"  value="<?php echo ($vo["webphone"]); ?>">
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">联系QQ:</label>
          <div class="col-sm-6">
            <input type="text" class="form-control" name="webqq" value="<?php echo ($vo["webqq"]); ?>">
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary">保存信息</button>
          </div>
        </div>
      </form><?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
   </div>
</body>
</html>