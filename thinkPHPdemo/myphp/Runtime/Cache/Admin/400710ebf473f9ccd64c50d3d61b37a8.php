<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="/Admin/View/Public/styles/bootstrap.min.css">
<script src="/Admin/View/Public/js/jquery.min.js"></script>
<style>
.table{ width:70%;}
</style>
<title>文章列表</title>
<style>
.current{border:1px solid #9F9F9F; padding:10px; margin:3px;}
.num{border:1px solid #9F9F9F; padding:10px;background-color:#E4E4E4;margin:3px;}
</style>
</head>
<body>
<a  class="btn btn-primary" href="<?php echo U('Page/padd');?>">添加单页</a>
<table width="75%"  class="table table-hover" style="margin-top:20px;">
  <tbody>
    <tr>
      <td><strong>单页标题 </strong></td>
      <td>链接</td>
     
      <td align="center"><strong>操作</strong></td>
    </tr>
    <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
      <td width="33%"><a href="/home/index/page/id/<?php echo ($vo["id"]); ?>" target="_blank"><?php echo ($vo["title"]); ?></a></td>
      <td width="33%">home/index/page/id/<?php echo ($vo["id"]); ?></td> 
      <td width="18%" align="center">
        <a type="button" class="btn btn-primary" href="/index.php/Admin/Page/pedit/id/<?php echo ($vo["id"]); ?>"> 修改 </a>
        <a type="button" class="btn btn-danger"  href="/index.php/Admin/Page/del/id/<?php echo ($vo["id"]); ?>"  onclick="return confirm('确定删除当前数据？')" >删除</a></td>
    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
   <tr>
      <td colspan="4" align="center"><?php echo ($page); ?></td>
    </tr>
  </tbody>
</table>
</body>
</html>