<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>添加分类</title>
<link rel="stylesheet" href="/Admin/View/Public/styles/bootstrap.min.css">
</head>

<body>
<a  class="btn btn-primary" href="<?php echo U('Nav/index');?>">返回栏目列表</a>
 <form class="form-horizontal" method="post" action="/index.php/Admin/Nav/post"> 
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">分类名:</label>
          <div class="col-sm-6">
            <input type="text" class="form-control" name="classname">
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">分类标题 :</label>
          <div class="col-sm-6">
            <input type="text" class="form-control" name="classtitle" >
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">分类关键字:</label>
          <div class="col-sm-6">
            <input type="text" class="form-control" name="classkey">
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">分类描述:</label>
          <div class="col-sm-6">
            <input type="text" class="form-control" name="classbody">
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary">保存</button>
          </div>
        </div>
      </form>
</body>
</html>