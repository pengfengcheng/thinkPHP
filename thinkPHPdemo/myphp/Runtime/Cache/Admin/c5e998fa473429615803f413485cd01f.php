<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="/Admin/View/Public/styles/bootstrap.min.css">
<title>广告管理</title>
</head>

<body>
<body>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-4">
      <form action="/index.php/Admin/Link/post" method="post" enctype="multipart/form-data"  class="form-group">        
        链接名称
        <input type="text" name="linkname" class="form-control"><br/>
       
        链接地址：
        <input type="text" name="linkurl" class="form-control">
        <br/>
        <input type="submit" value="添加链接" class="btn btn-info">
      </form>
    </div>
  </div>
</div>
<div class="divider"></div>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-5">
<table class="table table-hover" width="500">
  <tr>

    <td width="18%" align="center">标题</td>
    <td width="18%" align="center">链接</td>
    <td width="27%" align="center">操作</td>
  </tr>
  <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
       <td align="center" valign="middle"><?php echo ($v["linkname"]); ?></td>
       <td align="center" valign="middle"><?php echo ($v["linkurl"]); ?></td>
      <td align="center" valign="middle"><a href="/index.php/Admin/Link/edit/id/<?php echo ($v["id"]); ?>" class="btn btn-primary">修改</a> <a href="/index.php/Admin/Link/del/id/<?php echo ($v["id"]); ?>" class="btn btn-danger" onclick="return confirm('确定删除当前数据？')">删除</a></td>
    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
</table>
</div>
</div>
</body>
</body>
</html>