<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="/Admin/View/Public/styles/bootstrap.min.css">
<script src="/Admin/View/Public/js/jquery.min.js"></script>
<style>
.table{ width:60%;}
</style>
<title>栏目管理</title>
</head>
<body>

 <a  class="btn btn-primary" href="<?php echo U('Nav/add');?>">添加栏目</a>
<table width="80%"  class="table table-hover">
  <tbody>
    <tr>
      <td>栏目名称</td>

      <td>操作</td>
    </tr>
    <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
      <td width="26%"><?php echo ($vo["classname"]); ?></td>
   
      <td width="27%">
      <a type="button" class="btn btn-primary" href="/index.php/Admin/Nav/edit/id/<?php echo ($vo["id"]); ?>"> 修改 </a>
      <a type="button" class="btn btn-danger"  href="/index.php/Admin/Nav/del/id/<?php echo ($vo["id"]); ?>"  onclick="return confirm('确定删除当前数据？')" >删除</a></td>
    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
  </tbody>
</table>
</body>
</html>