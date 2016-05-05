<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="/Admin/View/Public/styles/bootstrap.min.css">
<script src="/Admin/View/Public/js/jquery.min.js"></script>

<style>
.table {
	width: 100%;
	marign-top:10px;
}
.form-control{width:80%;}
.con{width:90%; height:450px;}
#pic{width:300px;}
#title{ width:400px;}
</style>
<title>内容管理</title>
</head>
<body>
<ul class="nav nav-tabs">
  <li role="presentation" ><a href="/index.php/Admin/Article/index">文章列表</a></li>
  <li role="presentation" class="active"><a href="#">添加文章</a></li>
   <li role="presentation" class="active"><a href="/index.php/Admin/Article/img">上传图片</a></li>
</ul>

<form class="form-group" method="post" action="/index.php/Admin/Article/post" enctype="multipart/form-data">
<table border="0" class="table table-hover">
  <tbody>
    <tr>
      <td width="15%" align="right">标题：</td>
      <td width="85%">
        <div class="form-inline">
        
        <input type="text" name="title" class="form-control" id="title">
        
        <input type="checkbox" name="isindex" value="1" >
推荐
<input type="checkbox" name="istop" value="1">
置顶
</div> </td>
      </tr>
    <tr>
      <td align="right">所属分类：</td>
      <td>
      <div class="form-inline">
      <select class="form-control" name="classname">
      <option>请选择文章分类</option>
      <?php if(is_array($classdata)): $i = 0; $__LIST__ = $classdata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cvo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($cvo["classname"]); ?>"><?php echo ($cvo["classname"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
      </select>
      </div>
      </td>
    </tr>   
    <tr>
      <td align="right">关键字：</td>
      <td><input type="text" name="arkey" class="form-control"></td>
    </tr>

        <tr>
      <td align="right">描述：</td>
      <td>
      <textarea class="form-control" name="ardesc"></textarea>
      </td>
    </tr>
     <tr>
      <td height="44" align="right">时间：</td>
      <td><input  type="text"  name="subtime" class="form-control" value="<?php echo (date('Y-m-d g:i a',time())); ?>" style="width:200px;"></td>
    </tr>
        <tr>
      <td align="right">作者：</td>
      <td><input type="text" name="write" class="form-control" style="width:200px;"></td>
    </tr>
     <tr>
      <td align="right">标题图片：</td>
      <td>
      <div class="form-inline">
       
        <input type="file" name="titlepic" class="form-control pic" id="pic" >       
         
       </div>
 

         </td>     
      </tr>

      <tr>
       <td colspan="2" align="center">
       <script id="container" name="body" type="text/plain"></script>
    <!-- 配置文件 -->
    <script type="text/javascript" src="/Admin/View/Public/bdeditor/ueditor.config.js"></script>
    <!-- 编辑器源码文件 -->
    <script type="text/javascript" src="/Admin/View/Public/bdeditor/ueditor.all.js"></script>
    <!-- 实例化编辑器 -->
    <script type="text/javascript">
		window.UEDITOR_CONFIG.initialFrameHeight=600;
		window.UEDITOR_CONFIG.imagePathFormat="/index.php/Admin/Article/bdupload/{yyyy}{mm}{dd}/{time}{rand:6}";
        var ue = UE.getEditor('container');
		
    </script> 
       </td>
      </tr>
    
       
            <tr>
      <td colspan="2" align="center">
      <input type="submit" value="提交" class="btn btn-primary">
      </td>
    </tr>
  </tbody>
</table>
</form>
</body>
</html>