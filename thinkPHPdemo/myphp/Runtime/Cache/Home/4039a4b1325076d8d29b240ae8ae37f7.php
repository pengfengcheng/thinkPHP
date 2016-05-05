<?php if (!defined('THINK_PATH')) exit();?>      <aside class="col-lg-4 sidbar">
              <div class="widget">
          <h4 class="title">联系我们</h4>
          <div class="content cloud"> 
         联系人：<?php echo ($webpeople); ?> <br/>
         联系电话：<?php echo ($webphone); ?> <br/>
         联系QQ：<!--<a href="tencent://message/?uin=228392101&amp;Site=易尚软件&amp;Menu=yes">--><a href="#"></a><img border="0" alt="" src="http://pub.idqqimg.com/qconn/wpa/button/button_11.gif" data-bd-imgshare-binded="1"></a><?php echo ($webqq); ?> <br/>
         QQ群：468852313<br/>
         <!--<a target="_blank" href="http://shang.qq.com/wpa/qunwpa?idkey=50602eb34cc1846cd494e9383676ada70758918e71b1bf4cebec8c0042961128">--><a href=""></a><img border="0" src="http://pub.idqqimg.com/wpa/images/group.png" alt="海贼王俱乐部" title="海贼王俱乐部"></a>
          </div>
        </div>
                <div class="widget">
          <h4 class="title">置顶文章</h4>
          <?php if(is_array($topdata)): $i = 0; $__LIST__ = $topdata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$top): $mod = ($i % 2 );++$i;?><a href="/index.php/Home/Index/body/id/<?php echo ($vo["id"]); ?>"><?php echo ($top["title"]); ?></a><br/><?php endforeach; endif; else: echo "" ;endif; ?>
         </div>
        <div class="widget">
          <h4 class="title">文章分类</h4>
          <div class="content community">
          <?php if(is_array($classdata)): $i = 0; $__LIST__ = $classdata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cid): $mod = ($i % 2 );++$i;?><p><a href="/index.php/Home/Index/clist/cname/<?php echo ($cid["classname"]); ?>"><?php echo ($cid["classname"]); ?></a></p><?php endforeach; endif; else: echo "" ;endif; ?>
          </div>
        </div>

         <div class="widget">
          <h4 class="title">推荐文章</h4>
          <?php if(is_array($indexdata)): $i = 0; $__LIST__ = $indexdata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$index): $mod = ($i % 2 );++$i;?><a href="/index.php/Home/Index/body/id/<?php echo ($index["id"]); ?>"><?php echo ($index["title"]); ?></a><br/><?php endforeach; endif; else: echo "" ;endif; ?>
         </div>
         <div class="widget">
          <h4 class="title">友情链接</h4>
          <?php if(is_array($linkdata)): $i = 0; $__LIST__ = $linkdata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$l): $mod = ($i % 2 );++$i;?><a href="<?php echo ($l["linkurl"]); ?>" class="cloud"><?php echo ($l["linkname"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
         </div>

      </aside>