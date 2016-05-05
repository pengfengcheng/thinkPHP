<?php if (!defined('THINK_PATH')) exit(); echo W('Cate/head');?>
<section class="content-wrap">
  <div class="container">
    <div class="row">
      <main class="col-md-8 main-content" >
        <article class="post">
          <div class="post-head">
            <h1 class="post-title"> <?php echo ($title); ?> </h1>
            <div class="post-meta"> <span class="author"> <span class="glyphicon glyphicon-user" ></span> &nbsp;&nbsp;<?php echo ($write); ?> </span>.
              <time class="data"><span class="glyphicon glyphicon-list-alt" ></span>&nbsp;&nbsp;<?php echo ($subtime); ?></time>
            </div>
          </div>
          <div class="post-content">
            <p><!--<img src="<?php echo ($stitlepic); ?>" /><br/>--><?php echo ($body); ?></p>
          </div>
          <div class="footer clearfix">
            <hr />
            <div class="tag-list"> <span class="glyphicon glyphicon-folder-open" ></span>&nbsp;&nbsp;&nbsp;<?php echo ($classname); ?> </div>
          </div>
        </article>
      </main>
      <?php echo W('Cate/right');?> </div>
  </div>
</section>
<?php echo W('Cate/footer');?>
</body></html>