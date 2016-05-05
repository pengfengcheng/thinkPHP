<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="/Admin/View/Public/styles/bootstrap.min.css">
<title>广告管理</title>
</head>

<body>
<body>
<a href="/index.php/Admin/Ad/index" class="btn btn-default">返回广告列表</a>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-4">
      <form action="/index.php/Admin/Ad/update/id/<?php echo ($id); ?>" method="post" enctype="multipart/form-data"  class="form-group">
        图片地址：
        <input type="file" name="adfile" ><br/>
        <img src="/<?php echo ($adfile); ?>" width="600"/>
        <br/>
          图片描述：
        <input type="text" name="adname" class="form-control" value="<?php echo ($adname); ?>">
        <br/>
        图片链接：
        <input type="text" name="adurl" class="form-control" value="<?php echo ($adurl); ?>">
        <br/>
        <input type="submit" value="修改图片" class="btn btn-info">
      </form>
    </div>
  </div>
</div>



</body>
</body>
</html>