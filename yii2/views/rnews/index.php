<?php
use yii\helpers\Html;  
use yii\widgets\LinkPager; 
use app\models\News;
use yii\helpers\Url;
?>

<div class="w1024 block mb20">

  <div class="w360 fl"> 

      <div class="new fl w360">

          <div class="m-title"><h2 class="sty-red"><strong>最新</strong><i>·&nbsp;资讯</i></h2></div>

            <ul class="globalHot">
              <?php foreach($plist as  $v): ?>
                   <li class="dotLineBot">
                    <h2><a href="" title="<?= $v[3]; ?>" target="_blank"><?= $v[3]; ?></a></h2>

                    <p><?= $v[1]; ?></p>
                  </li>
              <?php endforeach; ?>             

            </ul>

        </div>

        <!--最新资讯/首页头条--> 

        <div class="w360 fl"> 

            <div class="mod-con">
            
                            <h3 class="text1 f18 mb10">
                  <?php foreach($olist as $v): ?>
                              <a href="http://www.lynow.cn/auto/2017/1118/3918523.html" target="_blank"><?= $v[3] ?></a>
                    <?php endforeach; ?>
                            </h3>
                 <?php foreach($plist as $v): ?>
                            <ul class="ulist">                  
                                    <li>                                     
                                         <a href="http://www.lynow.cn/linyi/2017/1112/3718323.html" target="_blank"><?= $v[3] ?></a>
                                
                                  </li>
                                         </ul>    
                   <?php endforeach; ?>
              
            </div>

            <div class="mod-con">
                      <?php foreach($olist as $v): ?>
                            <h3 class="text1 f18 mb10"><a href="http://www.lynow.cn/linyi/2017/1022/4717481.html" target="_blank"><?= $v[3] ?></a></h3>
                      <?php endforeach;?>
                            <ul class="ulist">
                                     <?php foreach($plist as $v): ?>
                                    <li><a href="http://www.lynow.cn/linyi/2017/1020/4417400.html" target="_blank"><?= $v[3] ?></a></li>
                                     <?php endforeach;?>
                                         </ul>

            </div>

            <div class="mod-con">

                                  <h3 class="text1 f18 mb10">
                                    <?php foreach($olist as $v): ?>
                                    <a href="http://www.lynow.cn/linyi/2017/1011/4717027.html" target="_blank"><?= $v[3] ?></a>
                                  <?php endforeach; ?>
                                  </h3>

                            <ul class="ulist">

                                   <?php foreach($plist as $v): ?>
                                     <li><a href="http://www.lynow.cn/linyi/2017/0929/5316658.html" target="_blank"><?= $v[3] ?></a></li>
                                  <?php endforeach;?>
                                     </div>

            <div class="more"><a href="http://www.lynow.cn/yule/" target="_blank"><img src="images/img-12.gif" width="383" height="18" border="0" alt="今日临沂更多精彩"></a></div>

        </div> 

        <!--首页小头条-->

        

    </div>

    <!--模块1左侧end-->    

    <div class="w630 fr">

      <!-- 模块1焦点图代码开始 -->

        <div id="fsD1" class="focus mb20">

            <div id="D1pic1" class="fPic">

              
 <?php foreach($olist as $v): ?>
                <div class="fcon" style="display: none;">
                  
                    <a target="_blank" href="http://www.lynow.cn/linyi/2017/1117/0018496.html"><img src="<?= $v[11] ?>" style="opacity: 1; "></a>

                    <span class="shadow"><a target="_blank" href="http://www.lynow.cn/linyi/2017/1117/0018496.html"><?= $v[3]; ?></a></span>
                   
                </div>                     
 <?php endforeach; ?>
            </div>

            <div class="fbg">  

            <div class="D1fBt" id="D1fBt">  

                <a href="javascript:void(0)" hidefocus="true" target="_self" class=""><i>1</i></a>  

                <a href="javascript:void(0)" hidefocus="true" target="_self" class=""><i>2</i></a>  

                <a href="javascript:void(0)" hidefocus="true" target="_self" class="current"><i>3</i></a>  

                <a href="javascript:void(0)" hidefocus="true" target="_self" class=""><i>4</i></a>  

            </div>  

            </div>  

            <span class="prev"></span>   

            <span class="next"></span>    

        </div>  

        <script type="text/javascript">

            Qfast.add('widgets', { path: "http://www.lynow.cn/statics/newly/terminator2.2.min.js", type: "js", requires: ['fx'] });  

            Qfast(false, 'widgets', function () {

                K.tabs({

                    id: 'fsD1',   //焦点图包裹id  

                    conId: "D1pic1",  //** 大图域包裹id  

                    tabId:"D1fBt",  

                    tabTn:"a",

                    conCn: '.fcon', //** 大图域配置class       

                    auto: 1,   //自动播放 1或0

                    effect: 'fade',   //效果配置

                    eType: 'click', //** 鼠标事件

                    pageBt:true,//是否有按钮切换页码

                    bns: ['.prev', '.next'],//** 前后按钮配置class                          

                    interval: 3000  //** 停顿时间  

                }) 

            })  

        </script>

        <!-- banner代码结束 -->

        

        <div class="630">

          <div class="focus-list fl w240">
             <?php foreach($alist as $v): ?>
                 <dl>
                  <dt><a href="http://www.lynow.cn/linyi/2017/1113/0118387.html" target="_blank"><img src="<?= $v[11] ?>" title="<?= $v[3] ?> "></a></dt>
                    <dd><a href="http://www.lynow.cn/linyi/2017/1113/0118387.html" target="_blank"><?= $v[3]; ?></a></dd>
                </dl>
              <?php endforeach; ?>
                        </div>

            <!--模块1小幻灯--> 

            <div class="w360 fr">

              <div class="m-title dujia-title"><h2 class="sty-red"><strong>临沂</strong><i></i></h2></div>

                <div class="w360">
                    <?php foreach($wlist as $v): ?>
                      <div class="news-title title">
                      <span><i class="dj">独家</i><a href="http://www.lynow.cn/auto/2017/1115/5218453.html" target="_blank"><?= $v[3] ?></a></span>

                        <div class="clearfloat"></div>

                        <div class="zy zy_fk_dj"><?= $v[1] ?></div>
                      </div>
                    <?php endforeach; ?>
                </div>

            </div>

            <!--临沂独家--> 

        </div>

        <!--模块1右侧下方--> 

    </div>

    <!--模块1右侧end-->

</div>

<!--模块1end-->

<div class="w1024 yule mb20">

  <div class="column-title-home mb20">

        <div class="column-title-border">

            <h2><a href="http://www.lynow.cn/linyi/" target="_blank">临沂</a><span class="cname">LINYI</span></h2>

            <div class="sub-class">

                                  <a href="http://www.lynow.cn/linyi/news/" target="_blank">城事</a>

                             <a href="http://www.lynow.cn/linyi/pinwei/" target="_blank">品味</a>

                             <a href="http://www.lynow.cn/linyi/koubei/" target="_blank">口碑</a>

                                     </div>

            <span class="more"><a href="http://www.lynow.cn/linyi/" target="_blank">更多</a></span>

        </div>

  </div>

    <!--标题-->

    <div class="w1024">

      <div class="w360 fl amuse-focus">

          <div class="m-title tansuo-title"><h2 class="sty-red"><strong>城</strong><i></i></h2></div>
              
                <dl class="mb20">
               <?php foreach($olist as $v):?>
                <dt><a href="http://www.lynow.cn/linyi/2017/0830/2615072.html" target="_blank"><img src="<?= $v[11] ?>" title="<?= $v[3] ?>"></a></dt> 

                <dd><a href="http://www.lynow.cn/linyi/2017/0830/2615072.html" target="_blank"><?= $v[1]?></a></dd>
            <?php endforeach; ?>
                </dl>

               
             <div class="news-title title">
 <?php foreach($plist as $v):?>
                 <span><a href="http://www.lynow.cn/linyi/2017/0731/5713261.html" target="_blank"><?= $v[3]?></a></span>

                 <div class="clearfloat"></div>

                 <div class="zy zy_fk_dj"><?= $v[7] ?></div>
                <?php endforeach; ?>
      </div> 

                  

                    </div>

        <!--城事儿--> 

        <div class="w630 fr">

          <div class="qiwen w630 mb20">

              <div class="yishi-title m-title"><h2 class="sty-red"><strong>品</strong><i></i></h2></div>

                <ul>
                  <?php foreach($olist as $v): ?>
                                  <li> 
                      <h2><a href="http://www.lynow.cn/linyi/2017/0612/5511223.html" target="_blank"><?= $v[3]?></a></h2>

                        <p><?= $v[1] ?></p> 
                    </li>
                  <?php endforeach; ?>

                </ul>

            </div>

            <!--品味儿--> 

            <div class="qiwen wenhua w630">

              <div class="jiemi-title m-title"><h2 class="sty-red"><strong>口</strong><i></i></h2></div>

                <ul>

                       <li> 
                          <?php foreach($olist as $v):?>
                      <h2><a href="http://www.lynow.cn/linyi/2017/0916/4616086.html" target="_blank"><?= $v[3] ?></a></h2>

                        <p><?= $v[1] ?></p> 
                      <?php endforeach ?>
                    </li>

                          
         </ul>

            </div>

            <!--口碑儿-->

        </div>

        <!--临沂内容右侧--> 

    </div>

    <!--临沂内容--> 

</div>

<!--临沂模块结束-->

<div class="w1024 yule mb20">

  <div class="column-title-home mb20">

        <div class="column-title-border">

            <h2><a href="http://www.lynow.cn/yule/" target="_blank">娱乐</a><span class="cname">AMUSE</span></h2>

            <div class="sub-class">

                                  <a href="http://www.lynow.cn/yule/mingxing/" target="_blank">明星</a>

                             <a href="http://www.lynow.cn/yule/tv/" target="_blank">电视剧</a>

                             <a href="http://www.lynow.cn/yule/zongyi/" target="_blank">综艺</a>

                             <a href="http://www.lynow.cn/yule/dy/" target="_blank" style="background: none; padding-right: 0; margin-right: 0;">电影</a>

                                     </div>

            <span class="more"><a href="http://www.lynow.cn/yule/" target="_blank">更多</a></span>

        </div>

  </div>

    <!--标题-->

    <div class="w1024">

      <div class="w360 fl amuse-focus">
           
                  <dl class="mb20">
                     <?php foreach($olist as $v):?>
                <dt><a href="http://www.lynow.cn/yule/2017/1119/3018568.html" target="_blank"><img src="<?= $v[11]; ?>" title="<?= $v[3] ?>"></a></dt>
                <dd><a href="http://www.lynow.cn/yule/2017/1119/3018568.html" target="_blank"><?= $v[1]?></a></dd>
                 <?php endforeach; ?>
                 </dl>

                  <div class="news-title title">
                  <?php foreach($alist as $v):?>
                 <span><a href="http://www.lynow.cn/yule/2017/1119/0318561.html" target="_blank"><?= $v[3]; ?></a></span>
                 <div class="clearfloat"></div>
                 <div class="zy zy_fk_dj"><?= $v[1]?></div>
                  <?php endforeach; ?>
                </div>

                                

        </div>

        <!--娱乐内容左侧--> 
   
        <div class="w630 fr">
   <?php foreach($plist as $v):?>
                  <div class="amuse_list w630">

                 <dl>
                     <dt class="w240 fl"><a href="http://www.lynow.cn/yule/2017/1119/3018568.html" target="_blank" title="<?= $v[3] ?>"><img src="<?= $v[11] ?>" alt="<?= $v[3] ?>"></a></dt>

                    <dd class="w360 fr">

                      <h2><a href="http://www.lynow.cn/yule/2017/1119/3018568.html" target="_blank" title="<?= $v[3]?>"> <?= $v[1] ?></a></h2> 
                      <ul>
                      </ul>
                   </dd>
                </dl> 

          </div>

              <?php endforeach; ?> 
        </div>

        <!--娱乐内容右侧--> 

    </div>

    <!--娱乐内容--> 

</div>

<!--娱乐模块结束--> 

<div class="w1024">

  <div class="w1024 tushang-title m-title mb20"><h2 class="sty-red"><strong>精彩</strong><i></i></h2></div>

  <div class="w1024 tuji mb20">

      <div class="section w1024"> 

             <ul class="clearfix w290 fl">
   <?php foreach($olist as $v):?>
                             <li>
                    <div class="photo"><a href="http://www.lynow.cn/linyi/2017/1010/5817011.html" target="_blank"><img src="<?= $v[11] ?>" width="290"  height="155"/></a></div>      

                    <div class="text"><a href="http://www.lynow.cn/linyi/2017/1010/5817011.html" target="_blank"><h3><?= $v[3] ?></h3></a></div>

                </li>
                  <?php endforeach; ?>
                     </ul>


            <ul class="clearfix w730 fr">
        
                <?php foreach($plist as $v): ?>
              
                     <li class="fr">

                    <div class="photo"><a href="http://www.lynow.cn/yule/2017/0302/166319.html" target="_blank"><img src="<?= $v[11] ?>" width="240"  height="315"/></a></div>      

                    <div class="text"><a href="http://www.lynow.cn/yule/2017/0302/166319.html" target="_blank"><h3><?= $v[3] ?></h3></a></div>

                  </li> 
                <?php endforeach; ?>
                
      </ul> 

        </div> 

        <div class="section w1024 mb20">  

            <ul class="clearfix w730 fl">

               
                <?php foreach($plist as $v): ?>
              
                     <li class="fr">

                    <div class="photo"><a href="http://www.lynow.cn/yule/2017/0302/166319.html" target="_blank"><img src="<?= $v[11] ?>" width="240"  height="315"/></a></div>      

                    <div class="text"><a href="http://www.lynow.cn/yule/2017/0302/166319.html" target="_blank"><h3><?= $v[3] ?></h3></a></div>

                  </li> 
                <?php endforeach; ?>
                               </ul> 

            <ul class="clearfix w290 fr">
                 <?php foreach($olist as $v):?>
                    <li>
                    <div class="photo"><a href="http://www.lynow.cn/linyi/2017/1010/5817011.html" target="_blank"><img src="<?= $v[11] ?>" width="290"  height="155"/></a></div>      

                    <div class="text"><a href="http://www.lynow.cn/linyi/2017/1010/5817011.html" target="_blank"><h3><?= $v[3] ?></h3></a></div>

                </li>
                  <?php endforeach; ?>
                   </ul>


        </div>

    </div>  

</div>

<!--图集模块--> 

<script type="text/javascript">

$(document).ready(function(){  

  $(".section  ul li").hover(function(){ 

    $(this).find(".text").stop().animate({left:'0'}, {duration: 500})

  },function(){ 

    $(this).find(".text").stop().animate({left:'290'}, {duration: "fast"})

    $(this).find(".text").animate({left:'-290'}, {duration: 0})

  });



});

</script>

<div class="f-link">

  <div class="w1024">

      <h3>友情链接</h3>

    

        <p><a href="http://www.xiumu.cn/" target="_blank">秀目网</a>|<a href="http://www.shangc.net/" target="_blank">尚之潮</a>|<a href="http://www.wenjutv.com/" target="_blank">问剧</a>|<a href="http://www.mum.cc/" target="_blank">暮暮网</a>|<a href="http://f.lynow.cn/" target="_blank">临沂范</a>|</p>

    </div>

</div>

<!--友情链接--> 
