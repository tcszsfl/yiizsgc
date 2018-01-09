<?php  
use yii\helpers\Html;  
use yii\widgets\LinkPager; 
use app\models\News;
use yii\helpers\Url;
// $this->title = '';  
// $this->params[''][] = $this->title;  
?>  
<div class="w1024 mb20">
	<div class="w675 fl"> 
    	<div class="w675 banner mb20">
		<div class="swiper-container">
			<div class="swiper-wrapper">
				  					 
				<div class="swiper-slide">
          <?php foreach($lunbo as $v):?>
					<a href="<?= Url::to(['news/content','id'=>$v['id']])?>" target="_blank"><img src="<?= $v['thumb'] ?>" alt="<?= $v['title'] ?>" /></a>
					<div class="tyt">
								<h2><a href="<?= Url::to(['news/content','id'=>$v['id']]) ?>" target="_blank"><?= $v['title'] ?></a></h2> 
						</div>
          <?php endforeach; ?>
        </div> 
							 
			
				
											 				</div>  
			<div class="swiper-button-next"></div>
       		 <div class="swiper-button-prev"></div>
		</div>
	</div> 
        <!--焦点图-->   
        <div class="w675">
        	<div class="mod-con-list w400 fr">
<?php foreach($newslist as $v):?>
            	<div class="mod-con">
                    <h3 class="text1 f18 mb10"><a href="<?= Url::to(['news/content','id'=>$v['id']]);?>" target="_blank"><?=$v['title'];?></a></h3>
										                <ul class="ulist">
								                    <li><a href="<?= Url::to(['news/content','id'=>$v['id']]);?>" target="_blank"><?=$v['keywords'];?></a></li>
                                     <li><a href="<?= Url::to(['news/content','id'=>$v['id']]);?>" target="_blank"><?=$v['title'];?></a></li>
                                     <li><a href="<?= Url::to(['news/content','id'=>$v['id']]);?>" target="_blank"><?=$v['keywords'];?></a></li>
                                     <li><a href="<?= Url::to(['news/content','id'=>$v['id']]);?>" target="_blank"><?=$v['title'];?></a></li>
                 				                 </ul>
                </div>
<?php endforeach;?>
               
              
            </div>
            <!--mod-con-list-->
            <div class="section fl w240">
            	<ul class="clearfix w240">
								                    <li>
                        <div class="photo"><a href="http://www.lynow.cn/linyi/2017/0314/506890.html" target="_blank"><img src="images/thumb_240_130_20170314035606163.jpg" width="240"  height="130"/></a></div>			 
                        <div class="text"><a href="http://www.lynow.cn/linyi/2017/0314/506890.html" target="_blank"><h3>山东沂蒙山景区旅游攻略大全</h3></a></div>
                    </li>
                                     <li>
                        <div class="photo"><a href="http://www.lynow.cn/linyi/2017/0313/066812.html" target="_blank"><img src="images/thumb_240_130_20170313090841370.jpg" width="240"  height="130"/></a></div>			 
                        <div class="text"><a href="http://www.lynow.cn/linyi/2017/0313/066812.html" target="_blank"><h3>临沂人民广场垃圾乱扔成常态</h3></a></div>
                    </li>
                                     <li>
                        <div class="photo"><a href="http://www.lynow.cn/linyi/2017/0301/136177.html" target="_blank"><img src="images/thumb_240_130_20170226031909251.jpg" width="240"  height="130"/></a></div>			 
                        <div class="text"><a href="http://www.lynow.cn/linyi/2017/0301/136177.html" target="_blank"><h3>兰陵农业园成赏油菜花最佳去处</h3></a></div>
                    </li>
                 				                 </ul>
            </div>
            <!---->
        </div>
        <!--探索栏目左侧列表--->
<script type="text/javascript">
$(document).ready(function(){  
	$(".section	 ul li").hover(function(){ 
		$(this).find(".text").stop().animate({left:'0'}, {duration: 500})
	},function(){ 
		$(this).find(".text").stop().animate({left:'240'}, {duration: "fast"})
		$(this).find(".text").animate({left:'-240'}, {duration: 0})
	}); 
});
</script>
    </div>
    <!--探索栏目第一栏左侧-->
    <div class="w300 fr"> 
       <div class="w300 bb5 pb20 mb40">
       		<div class="right_title clearfix pb20">
                 <div class="right_title_border fl"></div>
                 <div class="right_title_border fr"></div>
                 <div class="right_title_main">临沂<span>独家</span></div>
           </div>
           <div class="section_right_top_tent">
		   		                   	<a href="http://www.lynow.cn/linyi/2017/0929/1916655.html" target="_blank"><img src="images/thumb_300_180_20170802113148196.jpg"></a>
                    <h2><a href="http://www.lynow.cn/linyi/2017/0929/1916655.html" target="_blank">临沂的称号都有哪些? 咱们大美获得荣誉真不少</a></h2>
                    <p>作为一名临沂人，如果你不知道几个咱们大美临沂的荣誉，那你...</p>
						           </div> 
       </div>
       <!--右侧独家--> 
       <div class="w300 bb5">
       		<div class="right_title clearfix pb20">
                 <div class="right_title_border fl"></div>
                 <div class="right_title_border fr"></div>
                 <div class="right_title_main">时光<span>临沂</span></div>
           </div>
           <ul class="block_img w300">
            <?php foreach($newslist as $v):?>
		   		              		<li><a href="<?= Url::to(['news/content','id'=>$v['id']]) ?>" target="_blank"><h2><?= $v['title'] ?></h2><img src="<?= $v['thumb'] ?>"></a></li>
            <?php endforeach; ?>
           		              </ul>
       </div>
       <!--右侧原创--> 	 
    </div>
    <!--探索栏目第一栏右侧-->
</div>
<!--探索栏目第一栏--> 
<div class="w1024">
	<div class="block-title w1024 mb20"><i></i><a href="http://www.lynow.cn/linyi/news/" target="_blank" title="城事">城事</a></div>
    <div class="w1024">
    	<div class="w675 fl"> 
		  
		        	
                 
                 	<?php foreach($newslist as $v):?>
                 	<div class="amuse_list w675">
                 <dl>
                     <dt class="w240 fl"><a href="<?= Url::to(['news/content','id'=>$v['id']]);?>" target="_blank" title="<?=$v['title'];?>"><img src="<?=$v['thumb'];?>" alt="<?=$v['title'];?>"></a></dt>
                    <dd class="w400 fr">
                      <h2><a href="<?= Url::to(['news/content','id'=>$v['id']]);?>" target="_blank" title="<?=$v['title'];?>"><?=$v['title'];?></a></h2> 
                       <p><?=$v['description'];?></p>
                   </dd>
                </dl> 
             </div>
         		    <?php endforeach; ?>   
        </div>
        <!--历史栏目左侧--> 
        <div class="w300 fr">
        	<div class="w300 bb5">
                <div class="right_title clearfix pb20">
                     <div class="right_title_border fl"></div>
                     <div class="right_title_border fr"></div>
                     <div class="right_title_main"><span>城事聚焦</span></div>
               </div>
			   			 <dl class="w300 dl-list mb20">
                    <?php foreach($ones as $v):?>
                  <dt><a href="<?= Url::to(['news/content','id'=>$v['id']]); ?>" target="_blank"><img src="<?= $v['thumb'] ?>"></a></dt>
                    <dd><span>城市头条</span><h2><a href="<?= Url::to(['news/content','id'=>$v['id']]);  ?>" target="_blank"><?= $v['title'] ?></a></h2></dd>
                      <?php endforeach; ?> 
               </dl>
			   			                  <ul class="block_img w300"> 
                                 
                                  <?php foreach($newslist as $v):?>
                                   <li><a href="<?= Url::to(['news/content','id'=>$v['id']]);?>" target="_blank"><h2><?=$v['title'];?></h2><img src="<?= $v['thumb'] ?>"></a></li>
                                   <?php endforeach; ?> 
                               </ul>
           </div>
           <!--历史探索--> 
        </div>
        <!--历史栏目右侧-->
    </div>
    <div class="w1024 re-more">
    	<div class="re-more_border fl"></div>
        <div class="re-more_border fr"></div>
        <div class="re-more_main"><a target="_blank" href="http://www.lynow.cn/linyi/news/">浏览更多城事资讯</a></div>
    </div>
</div>
<!--历史模块- end-->  
<div class="w1024">
	<div class="block-title w1024 mb20"><i></i><a href="http://www.lynow.cn/linyi/pinwei/" target="_blank" title="品味">品味</a></div>
    <div class="w1024">
    	<div class="w675 fl">  
        	  
		        	
                  <?php foreach($newslist as $v):?>
                  <div class="amuse_list w675">
                 <dl>
                     <dt class="w240 fl"><a href="<?= Url::to(['news/content','id'=>$v['id']]);?>" target="_blank" title="<?=$v['title'];?>"><img src="<?=$v['thumb'];?>" alt="<?=$v['title'];?>"></a></dt>
                    <dd class="w400 fr">
                      <h2><a href="<?= Url::to(['news/content','id'=>$v['id']]);?>" target="_blank" title="<?=$v['title'];?>"><?=$v['title'];?></a></h2> 
                       <p><?=$v['description'];?></p>
                   </dd>
                </dl> 
             </div>
                <?php endforeach; ?>   
                 	
                 
                 
         		         
        </div>
        <!--奇闻栏目左侧--> 
        <div class="w300 fr">
        	<div class="w300 bb5">
                <div class="right_title clearfix pb20">
                     <div class="right_title_border fl"></div>
                     <div class="right_title_border fr"></div>
                     <div class="right_title_main"><span>品味精品</span></div>
               </div>
               			              <dl class="w300 dl-list mb20">
                    <?php foreach($ones as $v):?>
                  <dt><a href="<?= Url::to(['news/content','id'=>$v['id']]); ?>" target="_blank"><img src="<?= $v['thumb'] ?>"></a></dt>
                    <dd><span>城市头条</span><h2><a href="<?= Url::to(['news/content','id'=>$v['id']]);  ?>" target="_blank"><?= $v['title'] ?></a></h2></dd>
                      <?php endforeach; ?> 
               </dl>
                                <ul class="block_img w300"> 
                                 
                                  <?php foreach($newslist as $v):?>
                                   <li><a href="<?= Url::to(['news/content','id'=>$v['id']]);?>" target="_blank"><h2><?=$v['title'];?></h2><img src="<?= $v['thumb'] ?>"></a></li>
                                   <?php endforeach; ?> 
                               </ul>
           </div>
           <!--奇闻轶事--> 
        </div>
        <!--奇闻栏目右侧-->
    </div>
    <div class="w1024 re-more">
    	<div class="re-more_border fl"></div>
        <div class="re-more_border fr"></div>
        <div class="re-more_main"><a target="_blank" href="http://www.lynow.cn/linyi/pinwei/">浏览更多品味资讯</a></div>
    </div>
</div>
<!--奇闻模块- end-->
  
<div class="w1024">
	<div class="block-title w1024 mb20"><i></i><a href="http://www.lynow.cn/linyi/koubei/" target="_blank" title="口碑">口碑</a></div>
    <div class="w1024">
    	<div class="w675 fl">  
          
		          <?php foreach($newslist as $v):?>
                  <div class="amuse_list w675">
                 <dl>
                     <dt class="w240 fl"><a href="<?= Url::to(['news/content','id'=>$v['id']]);?>" target="_blank" title="<?=$v['title'];?>"><img src="<?=$v['thumb'];?>" alt="<?=$v['title'];?>"></a></dt>
                    <dd class="w400 fr">
                      <h2><a href="<?= Url::to(['news/content','id'=>$v['id']]);?>" target="_blank" title="<?=$v['title'];?>"><?=$v['title'];?></a></h2> 
                       <p><?=$v['description'];?></p>
                   </dd>
                </dl> 
             </div>
                <?php endforeach; ?>   
		         
		         
		 		         </div>
        <!--文化栏目左侧--> 
        <div class="w300 fr">
        	<div class="w300 bb5">
                <div class="right_title clearfix pb20">
                     <div class="right_title_border fl"></div>
                     <div class="right_title_border fr"></div>
                     <div class="right_title_main"><span>口碑排行</span></div>
               </div>
               	  <dl class="w300 dl-list mb20">
                    <?php foreach($ones as $v):?>
               		<dt><a href="<?= Url::to(['news/content','id'=>$v['id']]); ?>" target="_blank"><img src="<?= $v['thumb'] ?>"></a></dt>
                    <dd><span>口碑头条</span><h2><a href="<?= Url::to(['news/content','id'=>$v['id']]);  ?>" target="_blank"><?= $v['title'] ?></a></h2></dd>
                      <?php endforeach; ?> 
               </dl>
			   			                  <ul class="block_img w300"> 
			   			                   
                                  <?php foreach($newslist as $v):?>
                                   <li><a href="<?= Url::to(['news/content','id'=>$v['id']]);?>" target="_blank"><h2><?=$v['title'];?></h2><img src="<?= $v['thumb'] ?>"></a></li>
                                   <?php endforeach; ?> 
               			   			   </ul>
           </div>
           <!--文化揭秘--> 
        </div>
        <!--文化栏目右侧-->
    </div>
    <div class="w1024 re-more">
    	<div class="re-more_border fl"></div>
        <div class="re-more_border fr"></div>
        <div class="re-more_main"><a target="_blank" href="http://www.lynow.cn/linyi/koubei/">浏览更多口碑资讯</a></div>
    </div>
</div>
<!--文化模块- end-->   
<div class="f-link">
	<div class="w1024">
    	<h3>友情链接</h3>
        <p></p>
    </div>
</div>