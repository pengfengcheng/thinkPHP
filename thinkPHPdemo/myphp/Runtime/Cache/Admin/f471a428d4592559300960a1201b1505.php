<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="/Admin/View/Public/styles/bootstrap.min.css">
<style>
.table{ width:60%;}
</style>
<title>栏目管理</title>
</head>
<body>
<table width="80%"  class="table table-hover">
  <tbody>


    <tr>
      <td>导航名称</td>
      <td>导航链接</td>
      <td>排序</td>
      <td>操作</td>
    </tr>
   <form action="/index.php/Admin/Cate/post" method="post" name="cate">
    <tr>
      <td width="26%"><span class="col-sm-12">
        <input type="text" class="form-control" name="catename">
      </span></td>
      <td width="24%"><span class="col-sm-12">
        <input type="text" class="form-control" name="cateurl">
      </span></td>
      <td width="23%"><span class="col-sm-12">
        <input type="text" class="form-control" name="cateindex">
      </span></td>
      <td width="27%">
        <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#myModal"> 添加导航 </button></td>
    </tr>
    </form>
    <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><form action="edit/id/<?php echo ($vo["id"]); ?>" name="form1" method="post">
    <tr>
      <td width="26%"><span class="col-sm-12">
        <input type="text" class="form-control" name="catename" value="<?php echo ($vo["catename"]); ?>">
      </span></td>
      <td width="24%"><span class="col-sm-12">
        <input type="text" class="form-control" name="cateurl" value="<?php echo ($vo["cateurl"]); ?>">
      </span></td>
      <td width="23%"><span class="col-sm-12">
        <input type="text" class="form-control" name="cateindex" value="<?php echo ($vo["cateindex"]); ?>">
      </span></td>
      <td width="27%">
        <button class="btn btn-default" href="/index.php/Admin/Cate/edit/id/<?php echo ($vo["id"]); ?>" type="submit"> 修改 </button>
        <a class="btn btn-danger" href="/index.php/Admin/Cate/del/id/<?php echo ($vo["id"]); ?>"  onclick="return confirm('确定删除当前数据？')" > 删除 </a>      
    </tr>
    </form><?php endforeach; endif; else: echo "" ;endif; ?>
  </tbody>
</table>
</body>
</html>