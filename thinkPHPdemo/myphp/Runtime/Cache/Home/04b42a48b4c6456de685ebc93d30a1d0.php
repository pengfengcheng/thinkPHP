<?php if (!defined('THINK_PATH')) exit(); echo W('Cate/head');?>

<section class="content-wrap">
  <div class="container">
    <div class="row">
      <main class="col-md-8 main-content" >
        <article class="focus">
		<!--下面是图片轮播的div--->
          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel"> 
            <!-- Indicators -->
            <ol class="carousel-indicators">
             <?php if(is_array($addata)): $i = 0; $__LIST__ = $addata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$f): $mod = ($i % 2 );++$i;?><li data-target="#carousel-example-generic" data-slide-to="<?php echo ($i-1); ?>" id="myli"></li><?php endforeach; endif; else: echo "" ;endif; ?>
              <script>
              	$("#myli").eq(0).addClass("active");
              </script>
            </ol>
            
            <!-- Wrapper for slides -->
			<!--输出要轮播的图片，其中<?php echo ($f["adurl"]); ?>数据库得到地址，<?php echo ($f["adfile"]); ?>是从数据库得到的图片的地址-->
			<!--<?php echo ($f["adname"]); ?>是从数据库得到的字-->
            <div class="carousel-inner" role="listbox">
              <?php if(is_array($addata)): $i = 0; $__LIST__ = $addata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$f): $mod = ($i % 2 );++$i;?><div class="item" id="myfocus"> 
                <a href="<?php echo ($f["adurl"]); ?>">
                <img src="./<?php echo ($f["adfile"]); ?>" style="width:100%;"> 
				 
                </a>
                  <div class="carousel-caption"> 
                  <h3><a href="<?php echo ($f["adurl"]); ?>" target="_blank" style="color:#fff;"><?php echo ($f["adname"]); ?></a> </h3>
                  </div>
                </div><?php endforeach; endif; else: echo "" ;endif; ?>
      
            </div>
            
            <!-- Controls --> <!--图片控制箭头-->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
			
			<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
        </article>
        <script>
        $('.carousel').carousel({interval:2000});
		$("#myfocus").addClass("active");
        </script>
		<!--文章显示，<?php echo ($vo["title"]); ?>表示文章主题，<?php echo ($vo["write"]); ?>表示文章作者，<?php echo ($vo["subtime"]); ?>发布时间-->
		<!--a链接会传递一个id值<?php echo ($vo["id"]); ?>到一个叫body的方法里面-->
        <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><article class="post">
            <div class="post-head">
              <h1 class="post-title"> <a href="/index.php/Home/Index/body/id/<?php echo ($vo["id"]); ?>"><?php echo ($vo["title"]); ?></a> </h1>
              <div class="post-meta"> <span class="author"> <span class="glyphicon glyphicon-user" ></span> &nbsp;&nbsp;<?php echo ($vo["write"]); ?> </span>
                <time class="data"><span class="glyphicon glyphicon-list-alt" ></span>&nbsp;&nbsp;<?php echo ($vo["subtime"]); ?></time>
              </div>
            </div>
            <div class="post-content"> <img src="<?php echo ($vo["stitlepic"]); ?>" width="100%"/>
              <p><?php echo ($vo["ardesc"]); ?></p>
            </div>
            <div class="post-permalink"> <a href="/index.php/Home/Index/body/id/<?php echo ($vo["id"]); ?>" class="btn btn-default">阅读全文</a> </div>
            <div class="footer clearfix">
              <hr />
              <div class="tag-list"> <span class="glyphicon glyphicon-folder-open" ></span>&nbsp;&nbsp;&nbsp;<?php echo ($vo["classname"]); ?> </div>
            </div>
          </article><?php endforeach; endif; else: echo "" ;endif; ?>
        <nav class="page"> <?php echo ($page); ?> </nav>
      </main>
      <?php echo W('Cate/right');?> </div>
  </div>
</section>
<?php echo W('Cate/footer');?>
</body></html>