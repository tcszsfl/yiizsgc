<?php  
use yii\helpers\Html;  
use yii\widgets\LinkPager; 
use app\models\News;
use yii\helpers\Url;
// $this->title = '';  
// $this->params[''][] = $this->title;  
?>  
<!--top end-->
<div class="w1024 mb20">
	<div class="w675 fl"> 
   	 <div class="w675 banner mb20">
		<div class="swiper-container">
			<div class="swiper-wrapper">
				  					 
				<div class="swiper-slide">
         <?php foreach($lunbo as $v):?>
					<a href="<?= Url::to(['news/content','id'=>$v['id']]) ?>" target="_blank"><img src="<?= $v['thumb'] ?>" alt="<?= $v['title'] ?>" /></a>
					<div class="tyt">
								<h2><a href="<?= Url::to(['news/content','id'=>$v['id']]) ?>" target="_blank"><? $v['title'] ?></a></h2> 
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
        	<div class="mod-con-list w400 fl">
             <?php foreach($ones as $v):?>
            	<div class="mod-con">
                 
                   <h3 class="text1 f18 mb10"><a href="<?= Url::to(['news/content','id'=>$v['id']]) ?>" target="_blank"><? $v['title'] ?></a></h3>
                 
										                <ul class="ulist">
                                      
								                    <li><a href="<?= Url::to(['news/content','id'=>$v['id']]) ?>" target="_blank"><? $v['title'] ?></a></li>
                                   
                 				 				 </ul>                                
                </div>
                 <?php endforeach; ?>
                <div class="mod-con">
                    					                <h3 class="text1 f18 mb10"><a href="http://www.lynow.cn/yule/a/201611/323135.html" target="_blank">蓝色大海的传说几点更新第三集什么时候播 剧情讲的什么</a></h3>
										                <ul class="ulist">
								                    <li><a href="http://www.lynow.cn/yule/a/201611/243115.html" target="_blank">胡可结过几次婚当然就一次 揭胡可沙溢是如何相识相恋的</a></li>
                                     <li><a href="http://www.lynow.cn/yule/a/201611/053101.html" target="_blank">徐帆和冯小刚有孩子吗 冯小刚的两个孩子是徐帆亲生的吗</a></li>
                                     <li><a href="http://www.lynow.cn/yule/a/201611/533100.html" target="_blank">电影院我不是潘金莲是圆的吗 我不是潘金莲圆形构图分析</a></li>
                                     <li><a href="http://www.lynow.cn/yule/a/201611/473091.html" target="_blank">范冰冰人品怎么样 扒一扒娱乐圈对范冰冰的评价</a></li>
                 				                 </ul>
                </div>
                <div class="mod-con">
                    					                <h3 class="text1 f18 mb10"><a href="http://www.lynow.cn/yule/a/201611/253089.html" target="_blank">范冰冰宣传新片被赶走原因曝光 称校方担心出现安保问题</a></h3>
										                <ul class="ulist">
								                    <li><a href="http://www.lynow.cn/yule/a/201611/363080.html" target="_blank">范冰冰是怎么红起来的 扒金锁如何摇身变成范爷</a></li>
                                     <li><a href="http://www.lynow.cn/yule/a/201611/182785.html" target="_blank">爸爸去哪4沙溢儿子叫什么名字 揭秘沙溢胡可相识经过</a></li>
                                     <li><a href="http://www.lynow.cn/yule/a/201611/492780.html" target="_blank">成毅一年级毕业季化身暖男狂撩妹 成毅孟子义cp感十足</a></li>
                                     <li><a href="http://www.lynow.cn/yule/a/201611/542764.html" target="_blank">武林风一龙播求二番战落幕 播求战后痛哭</a></li>
                 				                 </ul>
                </div>
            </div>
            <!--mod-con-list-->
            <div class="section fr w240">
            	<ul class="clearfix w240">
								                    <li>
                        <div class="photo"><a href="http://www.lynow.cn/yule/2017/0823/3514621.html" target="_blank"><img src="images/thumb_240_130_20170823023635342.jpg" width="240"  height="130"/></a></div>			 
                        <div class="text"><a href="http://www.lynow.cn/yule/2017/0823/3514621.html" target="_blank"><h3>银魂真人版电影定档9月1日，还不赶快准备看起来！</h3></a></div>
                    </li>
                                     <li>
                        <div class="photo"><a href="http://www.lynow.cn/yule/2017/0408/127867.html" target="_blank"><img src="images/thumb_240_130_20170408061737447.jpg" width="240"  height="130"/></a></div>			 
                        <div class="text"><a href="http://www.lynow.cn/yule/2017/0408/127867.html" target="_blank"><h3>人民的名义大boss是赵立春的儿子</h3></a></div>
                    </li>
                                     <li>
                        <div class="photo"><a href="http://www.lynow.cn/yule/2017/0317/247006.html" target="_blank"><img src="images/thumb_240_130_20170317012812998.jpg" width="240"  height="130"/></a></div>			 
                        <div class="text"><a href="http://www.lynow.cn/yule/2017/0317/247006.html" target="_blank"><h3>美女与野兽:与动画版有什么区别</h3></a></div>
                    </li>
                 				                 </ul>
            </div>
            <!---->
        </div>
        <!--娱乐栏目左侧列表--->
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
    <!--娱乐栏目第一栏左侧-->
    <div class="w300 fr"> 
       <div class="w300 bb5 pb20 mb40">
       		<div class="right_title clearfix pb20">
                 <div class="right_title_border fl"></div>
                 <div class="right_title_border fr"></div>
                 <div class="right_title_main">娱乐<span>看点</span></div>
           </div>
           <div class="section_right_top_tent">
           		                   	<a href="http://www.lynow.cn/yule/2017/0228/196293.html" target="_blank"><img src="images/thumb_300_180_20170228082917691.jpg"></a>
                    <h2><a href="http://www.lynow.cn/yule/2017/0228/196293.html" target="_blank">歌手2017谁的实力最强最可能夺冠 李健加入战局更难预料</a></h2>
                    <p>《歌手2017》至今已经录制了七期，随着光良、袁娅维、赵雷、...</p>
						           </div> 
       </div>
       <!--右侧独家--> 
       <div class="w300 bb5">
       		<div class="right_title clearfix pb20">
                 <div class="right_title_border fl"></div>
                 <div class="right_title_border fr"></div>
                 <div class="right_title_main">娱乐<span>专刊</span></div>
           </div>
           <ul class="block_img w300">
		   		              		<li><a href="http://www.lynow.cn/yule/2017/0228/596268.html" target="_blank"><h2>演员转行当导演有人获赞有人被喷</h2><img src="images/thumb_300_180_20170228031202664.jpg"></a></li>
                      		<li><a href="http://www.lynow.cn/yule/2017/0227/376216.html" target="_blank"><h2>邓超的人气高是因为他能让你快乐</h2><img src="images/thumb_300_180_20170227014712763.jpg"></a></li>
                      		<li><a href="http://www.lynow.cn/yule/2017/0226/566156.html" target="_blank"><h2>张一山和杨紫将来谁能走的更远</h2><img src="images/thumb_300_180_20170226111232789.jpg"></a></li>
                      		<li><a href="http://www.lynow.cn/yule/2017/0225/526099.html" target="_blank"><h2>青云志盗墓笔记收视暴跌谁来背锅</h2><img src="images/thumb_300_180_20170225110431991.jpg"></a></li>
                      		<li><a href="http://www.lynow.cn/yule/2017/0224/116052.html" target="_blank"><h2>从张一山走红看一个演员的态度</h2><img src="images/thumb_300_180_20170224113210815.jpg"></a></li>
           		              </ul>
       </div>
       <!--右侧原创--> 	 
    </div>
    <!--娱乐栏目第一栏右侧-->
</div>
<!--娱乐栏目第一栏-->
<div class="w1024">
	<div class="block-title w1024 mb20"><i></i><a href="http://www.lynow.cn/yule/mingxing/" target="_blank" title="明星">明星</a></div>
    <div class="w1024">
    	<div class="w675 fl">
        	<div class="w675 banner mb20">
		<div class="swiper-container">
			<div class="swiper-wrapper">
				  					 
				<div class="swiper-slide">
					<a href="http://www.lynow.cn/yule/2017/0503/228804.html" target="_blank"><img src="images/20170503093959648.jpg" alt="赵薇黄晓明和陈坤关系好吗闹掰真相 北影三剑客关系揭秘" /></a>
					<div class="tyt">
								<h2><a href="http://www.lynow.cn/yule/2017/0503/228804.html" target="_blank">黄晓明陈坤闹掰真相让人意外!两人同时爱上赵薇成导火索?</a></h2> 
						</div></div> 
							 
				<div class="swiper-slide">
					<a href="http://www.lynow.cn/yule/2017/0329/167511.html" target="_blank"><img src="images/20170329012152895.jpg" alt="斯嘉丽・约翰逊再次离婚了吗 黑寡妇年轻时性感照片曝光" /></a>
					<div class="tyt">
								<h2><a href="http://www.lynow.cn/yule/2017/0329/167511.html" target="_blank">黑寡妇斯嘉丽・约翰逊不为人知的事</a></h2> 
						</div></div> 
							 
				<div class="swiper-slide">
					<a href="http://www.lynow.cn/yule/2017/0311/426734.html" target="_blank"><img src="images/20170311094908314.jpg" alt="黄晓明baby宠爱细节很腻人 爱你就要把你当女儿宠" /></a>
					<div class="tyt">
								<h2><a href="http://www.lynow.cn/yule/2017/0311/426734.html" target="_blank">黄教主花式宠妻被封为宠妻狂魔</a></h2> 
						</div></div> 
											 				</div>  
			<div class="swiper-button-next"></div>
       		 <div class="swiper-button-prev"></div>
		</div>
	</div> 
        <!--焦点图--> 
            
            <div class="w675">
						        	<div class="amuse_list w675">
                 <dl>
                     <dt class="w240 fr"><a href="http://www.lynow.cn/yule/2017/0311/156733.html" target="_blank" title="$r[title]"><img src="images/thumb_240_130_20170311093215699.jpg" alt="黄晓明把baby当女儿宠太恩爱 教主撩妹示爱有绝招"></a></dt>
                    <dd class="w400 fl">
                      <h2><a href="http://www.lynow.cn/yule/2017/0311/156733.html" target="_blank" title="黄晓明把baby当女儿宠太恩爱 教主撩妹示爱有绝招">黄晓明把baby当女儿宠太恩爱 教主撩妹示爱有绝招</a></h2> 
                      <ul> 
											
																																																																																								
                           <li><a href="http://www.lynow.cn/yule/2017/0311/426734.html" target="_blank" title="黄晓明baby宠爱细节很腻人 爱你就要把你当女儿宠">黄教主花式宠妻被封为宠妻狂魔</a></li> 
                     																																																											
                           <li><a href="http://www.lynow.cn/yule/2017/0310/296715.html" target="_blank" title="黄晓明为什么那么有钱有原因的 理财高手投资哪里哪里赚">黄晓明太会赚钱简直就是招财猫</a></li> 
                     																																																											
                           <li><a href="http://www.lynow.cn/yule/a/201701/235138.html" target="_blank" title="杨颖香港顺利产子黄晓明陪产 baby怀的男孩还是女孩揭晓">杨颖香港顺利产子全家齐聚晒照</a></li> 
                     																																																											
                           <li><a href="http://www.lynow.cn/yule/a/201612/334529.html" target="_blank" title="赵薇黄晓明陈坤的关系复杂难辨 闺蜜路人傻傻分不清楚">赵薇黄晓明陈坤的关系到底如何</a></li> 
                     						 						 		          
                      </ul>
                   </dd>
                </dl> 
          </div>
		          	<div class="amuse_list w675">
                 <dl>
                     <dt class="w240 fr"><a href="http://www.lynow.cn/yule/2017/0304/046446.html" target="_blank" title="$r[title]"><img src="images/thumb_240_130_20170304031310288.jpg" alt="陈赫一家不喜欢许婧是真的吗 陈赫妈妈和儿媳睡一张床"></a></dt>
                    <dd class="w400 fl">
                      <h2><a href="http://www.lynow.cn/yule/2017/0304/046446.html" target="_blank" title="陈赫一家不喜欢许婧是真的吗 陈赫妈妈和儿媳睡一张床">陈赫一家不喜欢许婧是真的吗 陈赫妈妈和儿媳睡一张床</a></h2> 
                      <ul> 
											
																																																																																								
                           <li><a href="http://www.lynow.cn/yule/2017/0305/346507.html" target="_blank" title="陈赫郑恺杜江王传君是同学 上戏04级明星班也名不虚传">陈赫郑凯上戏04级明星班够牛</a></li> 
                     																																																											
                           <li><a href="http://www.lynow.cn/yule/2017/0305/126506.html" target="_blank" title="陈赫郑凯阑尾事件真相是什么 网传陈赫郑凯不和炒作cp">陈赫和郑凯私下里关系不好吗</a></li> 
                     																																																											
                           <li><a href="http://www.lynow.cn/yule/2017/0305/266503.html" target="_blank" title="陈赫的腰断了三分之一是真的吗 四块骨头错位倒是真的">陈赫曾发微博说腰上四块骨头错位</a></li> 
                     																																																											
                           <li><a href="http://www.lynow.cn/yule/2017/0304/126456.html" target="_blank" title="许婧回应陈赫我错了说不要伤害他 陈赫是个脆弱的孩子">许婧如何回应陈赫的道歉微博</a></li> 
                     						 						 		          
                      </ul>
                   </dd>
                </dl> 
          </div>
		  		           
        </div>
        
        </div>
        <!--明星栏目左侧--> 
        <div class="w300 fr">
        	<div class="w300 bb5">
                <div class="right_title clearfix pb20">
                     <div class="right_title_border fl"></div>
                     <div class="right_title_border fr"></div>
                     <div class="right_title_main"><span>八卦天地</span></div>
               </div>
			   			                  <dl class="w300 dl-list mb20">
               		<dt><a href="http://www.lynow.cn/yule/2017/0921/3316338.html" target="_blank"><img src="images/thumb_300_160_20170921103830566.jpg"></a></dt>
                    <dd><span>明星头条</span><h2><a href="http://www.lynow.cn/yule/2017/0921/3316338.html" target="_blank">冯绍峰人设崩塌记，绯闻太频繁，渣男就是这样炼成的</a></h2></dd>
               </dl>
			   			                  <ul class="block_img w300">
			   			                       <li><a href="http://www.lynow.cn/yule/2017/0921/0016334.html" target="_blank"><h2>网友大呼求放过赵丽颖，冯绍峰渣男人设怎么来的？</h2><img src="images/thumb_300_160_20170921100424359.jpg"></a></li>
                                   <li><a href="http://www.lynow.cn/yule/2017/0920/0616321.html" target="_blank"><h2>尔康背了多年的黑锅，林心如应该道歉?</h2><img src="images/thumb_300_160_20170920051523918.jpg"></a></li>
                                   <li><a href="http://www.lynow.cn/yule/2017/0920/0916318.html" target="_blank"><h2>还珠格格尔康推了五阿哥，是抢戏还是不和?</h2><img src="images/thumb_300_160_20170920041236293.jpg"></a></li>
                                   <li><a href="http://www.lynow.cn/yule/2017/0920/4816315.html" target="_blank"><h2>周杰和苏有朋结怨已久，如今对骂再上热搜</h2><img src="images/thumb_300_160_20170920025224637.jpg"></a></li>
                                   <li><a href="http://www.lynow.cn/yule/2017/0919/1216289.html" target="_blank"><h2>ty发两首歌diss张震岳，老张到底哪里惹到他了</h2><img src="images/thumb_300_160_20170919061847576.jpg"></a></li>
               			                  </ul>
           </div>
           <!--八卦天地--> 
        </div>
        <!--明星栏目右侧-->
    </div>
    <div class="w1024 re-more">
    	<div class="re-more_border fl"></div>
        <div class="re-more_border fr"></div>
        <div class="re-more_main"><a target="_blank" href="http://www.lynow.cn/yule/mingxing/">浏览更多明星资讯</a></div>
    </div>
</div>
<!--明星模块- end-->  
<div class="w1024">
	<div class="block-title w1024 mb20"><i></i><a href="http://www.lynow.cn/yule/tv/" target="_blank" title="电视剧">电视剧</a></div>
    <div class="w1024">
    	<div class="w675 fl">
        	<div class="w675 banner mb20">
		<div class="swiper-container">
			<div class="swiper-wrapper">
				  					 
				<div class="swiper-slide">
					<a href="http://www.lynow.cn/yule/2017/0204/225485.html" target="_blank"><img src="images/20170213095038863.jpg" alt="三生三世十里桃花电视剧竟然很好看 杨幂赵又廷hold住场面" /></a>
					<div class="tyt">
								<h2><a href="http://www.lynow.cn/yule/2017/0204/225485.html" target="_blank">三生三世:杨幂赵又廷hold住场面</a></h2> 
						</div></div> 
							 
				<div class="swiper-slide">
					<a href="http://www.lynow.cn/yule/2017/0121/275348.html" target="_blank"><img src="images/20170213095309996.jpg" alt="鬼怪即将大结局幕后花絮揭秘 孔侑曾担心太老演不了偶像剧" /></a>
					<div class="tyt">
								<h2><a href="http://www.lynow.cn/yule/2017/0121/275348.html" target="_blank">孔侑曾担心太老演不了偶像剧</a></h2> 
						</div></div> 
							 
				<div class="swiper-slide">
					<a href="http://www.lynow.cn/yule/a/201611/123096.html" target="_blank"><img src="images/20161118091332980.jpg" alt="揭秘嘿孩子电视剧好看吗? 李小冉火力全开被赞真性情" /></a>
					<div class="tyt">
								<h2><a href="http://www.lynow.cn/yule/a/201611/123096.html" target="_blank">嘿孩子:李小冉火力全开被赞真性情</a></h2> 
						</div></div> 
											 				</div>  
			<div class="swiper-button-next"></div>
       		 <div class="swiper-button-prev"></div>
		</div>
	</div> 
        <!--焦点图--> 
            
            <div class="w675">
								        	<div class="amuse_list w675">
                 <dl>
                     <dt class="w240 fr"><a href="http://www.lynow.cn/yule/2017/0408/127867.html" target="_blank" title="$r[title]"><img src="images/thumb_240_130_20170408061737447.jpg" alt="人民的名义幕后大boss是谁揭秘 大反派是赵立春的儿子"></a></dt>
                    <dd class="w400 fl">
                      <h2><a href="http://www.lynow.cn/yule/2017/0408/127867.html" target="_blank" title="人民的名义幕后大boss是谁揭秘 大反派是赵立春的儿子">人民的名义幕后大boss是谁揭秘 大反派是赵立春的儿子</a></h2> 
                      <ul> 
										
																          
                      </ul>
                   </dd>
                </dl> 
          </div>
		          	<div class="amuse_list w675">
                 <dl>
                     <dt class="w240 fr"><a href="http://www.lynow.cn/yule/2017/0120/245283.html" target="_blank" title="$r[title]"><img src="images/thumb_240_130_20170120082709237.jpg" alt="漂亮的李慧珍收视率怎么样有多高 李慧珍逆袭黄金档电视剧"></a></dt>
                    <dd class="w400 fl">
                      <h2><a href="http://www.lynow.cn/yule/2017/0120/245283.html" target="_blank" title="漂亮的李慧珍收视率怎么样有多高 李慧珍逆袭黄金档电视剧">漂亮的李慧珍收视率怎么样有多高 李慧珍逆袭黄金档电视剧</a></h2> 
                      <ul> 
										
																																																																																			
                           <li><a href="http://www.lynow.cn/yule/a/201701/355178.html" target="_blank" title="漂亮的李慧珍为什么这么好看 没有大牌演员菜鸟也会逆袭">漂亮的李慧珍:菜鸟逆袭有春天</a></li> 
                     																																																										
                           <li><a href="http://www.lynow.cn/yule/a/201612/374521.html" target="_blank" title="漂亮的李慧珍超长预告片曝光 迪丽热巴盛一伦玩时空交错">漂亮的李慧珍迪丽热巴盛一伦玩时空交错</a></li> 
                     																																																										
                           <li><a href="http://www.lynow.cn/yule/a/201510/144.html" target="_blank" title="李晨前女友迪丽娜尔系嫩模 迪丽热巴姓名相近无辜躺枪">李晨前女友迪丽娜尔身份介绍</a></li> 
                     																																																										
                           <li><a href="http://www.lynow.cn/yule/a/201509/57.html" target="_blank" title="迪丽热巴微博粉丝疯长15倍！ 人气超越古力娜扎">迪丽热巴微博粉丝疯长15倍！</a></li> 
                     					 					 	          
                      </ul>
                   </dd>
                </dl> 
          </div>
		  		           
        </div>
        
        </div>
        <!--电视剧栏目左侧--> 
        <div class="w300 fr">
        	<div class="w300 bb5">
                <div class="right_title clearfix pb20">
                     <div class="right_title_border fl"></div>
                     <div class="right_title_border fr"></div>
                     <div class="right_title_main"><span>抢先剧透</span></div>
               </div>
			   			                  <dl class="w300 dl-list mb20">
               		<dt><a href="http://www.lynow.cn/yule/2017/1025/3017625.html" target="_blank"><img src="images/thumb_300_160_20171025043547157.jpg"></a></dt>
                    <dd><span>电视头条</span><h2><a href="http://www.lynow.cn/yule/2017/1025/3017625.html" target="_blank">将军在上有你没见过的套路，女二插足只为抢女主</a></h2></dd>
               </dl>
			   			                  <ul class="block_img w300">
			   			                       <li><a href="http://www.lynow.cn/yule/2017/0921/2416344.html" target="_blank"><h2>那年花开吴家追梦少年吴泽，多年不中被调侃</h2><img src="images/thumb_300_160_20170921033631556.jpg"></a></li>
                                   <li><a href="http://www.lynow.cn/yule/2017/0921/5816341.html" target="_blank"><h2>图尔丹两万两黄金求婚周莹，那年花开上演土豪求婚</h2><img src="images/thumb_300_160_20170921120236960.jpg"></a></li>
                                   <li><a href="http://www.lynow.cn/yule/2017/0921/1216339.html" target="_blank"><h2>使徒行者2魏德信是最大反派，看陈豪如何演绎</h2><img src="images/thumb_300_160_20170921111837264.jpg"></a></li>
                                   <li><a href="http://www.lynow.cn/yule/2017/0920/5416322.html" target="_blank"><h2>使徒行者2最爱的还是猜卧底，施嘉丽是不是卧底</h2><img src="images/thumb_300_160_20170920055903815.jpg"></a></li>
                                   <li><a href="http://www.lynow.cn/yule/2017/0920/2416314.html" target="_blank"><h2>使徒行者2烧脑来袭，欢喜哥到底是好是坏?</h2><img src="images/thumb_300_160_20170920023008224.jpg"></a></li>
               			                  </ul>
           </div>
           <!--抢先剧透--> 
        </div>
        <!--电视剧栏目右侧-->
    </div>
    <div class="w1024 re-more">
    	<div class="re-more_border fl"></div>
        <div class="re-more_border fr"></div>
        <div class="re-more_main"><a target="_blank" href="http://www.lynow.cn/yule/tv/">浏览更多电视资讯</a></div>
    </div>
</div>
<!--电视剧模块- end-->
  
<div class="w1024">
	<div class="block-title w1024 mb20"><i></i><a href="http://www.lynow.cn/yule/zongyi/" target="_blank" title="综艺">综艺</a></div>
    <div class="w1024">
    	<div class="w675 fl">
        	<div class="w675 banner mb20">
		<div class="swiper-container">
			<div class="swiper-wrapper">
				  					 
				<div class="swiper-slide">
					<a href="http://www.lynow.cn/yule/a/201611/492780.html" target="_blank"><img src="images/20161108082706516.jpg" alt="成毅一年级毕业季化身暖男狂撩妹 成毅孟子义cp感十足" /></a>
					<div class="tyt">
								<h2><a href="http://www.lynow.cn/yule/a/201611/492780.html" target="_blank">一年级成毅化身暖男撩妹曹曦月</a></h2> 
						</div></div> 
							 
				<div class="swiper-slide">
					<a href="http://www.lynow.cn/yule/a/201611/222646.html" target="_blank"><img src="images/20161103012539890.jpg" alt="杨紫的男朋友是谁 杨紫金星秀哪期自曝与男友已分手" /></a>
					<div class="tyt">
								<h2><a href="http://www.lynow.cn/yule/a/201611/222646.html" target="_blank">金星秀:杨紫首度谈大学恋情</a></h2> 
						</div></div> 
							 
				<div class="swiper-slide">
					<a href="http://www.lynow.cn/yule/a/201610/192541.html" target="_blank"><img src="images/20161030052431872.jpg" alt="好纠结!黄金单身汉陈楚河最后选了谁 张骁为什么被淘汰" /></a>
					<div class="tyt">
								<h2><a href="http://www.lynow.cn/yule/a/201610/192541.html" target="_blank">好纠结!黄金单身汉陈楚河最后选了谁</a></h2> 
						</div></div> 
											 				</div>  
			<div class="swiper-button-next"></div>
       		 <div class="swiper-button-prev"></div>
		</div>
	</div> 
        <!--焦点图--> 
            
            <div class="w675">
								        	<div class="amuse_list w675">
                 <dl>
                     <dt class="w240 fr"><a href="http://www.lynow.cn/yule/a/201611/542764.html" target="_blank" title="$r[title]"><img src="images/thumb_240_130_20161107060113575.jpg" alt="武林风一龙播求二番战落幕 播求战后痛哭"></a></dt>
                    <dd class="w400 fl">
                      <h2><a href="http://www.lynow.cn/yule/a/201611/542764.html" target="_blank" title="武林风一龙播求二番战落幕 播求战后痛哭">武林风一龙播求二番战落幕 播求战后痛哭</a></h2> 
                      <ul> 
										
																																																																																			
                           <li><a href="http://www.lynow.cn/yule/a/201512/407.html" target="_blank" title="200多档真人秀节目齐上阵 综艺节目多如牛毛我们真需要吗">200多档真人秀节目齐上阵</a></li> 
                     																																																										
                           <li><a href="http://www.lynow.cn/yule/a/201512/388.html" target="_blank" title="盘点韩国好看的综艺节目 金希澈王成综艺新人王">盘点韩国好看的综艺节目</a></li> 
                     																																																										
                           <li><a href="http://www.lynow.cn/yule/a/201512/363.html" target="_blank" title="2016好看的综艺节目大盘点 蜜蜂少女队我是歌手来袭">2016好看的综艺节目大盘点</a></li> 
                     																																																										
                           <li><a href="http://www.lynow.cn/yule/a/201510/222.html" target="_blank" title="2016年综艺节目拉开备战序幕 湖南卫视现场成交37亿">2016年综艺节目拉开备战序幕</a></li> 
                     					 					 	          
                      </ul>
                   </dd>
                </dl> 
          </div>
		          	<div class="amuse_list w675">
                 <dl>
                     <dt class="w240 fr"><a href="http://www.lynow.cn/yule/a/201610/242426.html" target="_blank" title="$r[title]"><img src="images/thumb_240_130_20161023012737378.jpg" alt="喜剧总动员吴秀波郭德纲怎么没来去哪了 不回来主持了?"></a></dt>
                    <dd class="w400 fl">
                      <h2><a href="http://www.lynow.cn/yule/a/201610/242426.html" target="_blank" title="喜剧总动员吴秀波郭德纲怎么没来去哪了 不回来主持了?">喜剧总动员吴秀波郭德纲怎么没来去哪了 不回来主持了?</a></h2> 
                      <ul> 
										
																																																																																			
                           <li><a href="http://www.lynow.cn/yule/a/201610/092540.html" target="_blank" title="喜剧总动员第八期背景音乐插曲 宋小宝袁姗姗出场背景音乐">喜剧总动员第八期背景音乐插曲</a></li> 
                     																																																										
                           <li><a href="http://www.lynow.cn/yule/a/201610/352427.html" target="_blank" title="喜剧总动员崔志佳朱雨辰小品背景音乐 第七期背景音乐盘点">喜剧总动员郑恺王宁垫底被批有黑幕</a></li> 
                     																																																										
                           <li><a href="http://www.lynow.cn/yule/a/201610/242426.html" target="_blank" title="喜剧总动员吴秀波郭德纲怎么没来去哪了 不回来主持了?">喜剧总动员吴秀波郭德纲去哪了</a></li> 
                     					 					 	          
                      </ul>
                   </dd>
                </dl> 
          </div>
		  		          </div>
        
        </div>
        <!--综艺栏目左侧--> 
        <div class="w300 fr">
        	<div class="w300 bb5">
                <div class="right_title clearfix pb20">
                     <div class="right_title_border fl"></div>
                     <div class="right_title_border fr"></div>
                     <div class="right_title_main"><span>综艺大观</span></div>
               </div>
			   			                  <dl class="w300 dl-list mb20">
               		<dt><a href="http://www.lynow.cn/yule/2017/0917/3316179.html" target="_blank"><img src="images/thumb_300_160_20170917054257726.jpg"></a></dt>
                    <dd><span>综艺头条</span><h2><a href="http://www.lynow.cn/yule/2017/0917/3316179.html" target="_blank">新歌声扎西平措称夺冠热门，17岁少女郭沁成劲敌</a></h2></dd>
               </dl>
			   			                  <ul class="block_img w300">
			   			                       <li><a href="http://www.lynow.cn/yule/2017/0917/4016158.html" target="_blank"><h2>亲爱的客栈即将开张，这些明星都来了</h2><img src="images/thumb_300_160_20170917034008371.jpg"></a></li>
                                   <li><a href="http://www.lynow.cn/yule/2017/0917/0416141.html" target="_blank"><h2>中餐厅的重口味大菜榴莲鸡竟然这么好吃！</h2><img src="images/thumb_300_160_20170917110522139.jpg"></a></li>
                                   <li><a href="http://www.lynow.cn/yule/2017/0917/4116138.html" target="_blank"><h2>中餐厅赵薇搬出招牌菜香辣蟹，想知道怎么做吗?</h2><img src="images/thumb_300_160_20170917104605795.jpg"></a></li>
                                   <li><a href="http://www.lynow.cn/yule/2017/0917/5516134.html" target="_blank"><h2>极限挑战今天会复播吗?看到节目单就放心了</h2><img src="images/thumb_300_160_20170917100111624.jpg"></a></li>
                                   <li><a href="http://www.lynow.cn/yule/2017/0916/5916087.html" target="_blank"><h2>中国新歌声满屏都是老大救人，这是什么梗？</h2><img src="images/thumb_300_160_20170916120501730.jpg"></a></li>
               			                  </ul>
           </div>
           <!--八卦天地--> 
        </div>
        <!--综艺栏目右侧-->
    </div>
    <div class="w1024 re-more">
    	<div class="re-more_border fl"></div>
        <div class="re-more_border fr"></div>
        <div class="re-more_main"><a target="_blank" href="http://www.lynow.cn/yule/zongyi/">浏览更多综艺资讯</a></div>
    </div>
</div>
<!--综艺模块- end-->  
<div class="w1024">
	<div class="block-title w1024 mb20"><i></i><a href="http://www.lynow.cn/yule/dy/" target="_blank" title="电影">电影</a></div>
    <div class="w1024">
    	<div class="w675 fl">
        	<div class="w675 banner mb20">
		<div class="swiper-container">
			<div class="swiper-wrapper">
				  					 
				<div class="swiper-slide">
					<a href="http://www.lynow.cn/yule/2017/0414/168185.html" target="_blank"><img src="images/20170414072203813.jpg" alt="速度与激情8有什么车哪些车盘点 里面的车个个都有来头" /></a>
					<div class="tyt">
								<h2><a href="http://www.lynow.cn/yule/2017/0414/168185.html" target="_blank">速度与激情8里面的车个个都有来头</a></h2> 
						</div></div> 
							 
				<div class="swiper-slide">
					<a href="http://www.lynow.cn/yule/2017/0317/357008.html" target="_blank"><img src="images/20170317014031584.jpg" alt="电影美女与野兽几个版本盘点 其他版本的电影也不错" /></a>
					<div class="tyt">
								<h2><a href="http://www.lynow.cn/yule/2017/0317/357008.html" target="_blank">其他版本的美女与野兽也不错</a></h2> 
						</div></div> 
							 
				<div class="swiper-slide">
					<a href="http://www.lynow.cn/yule/2017/0218/085918.html" target="_blank"><img src="images/20170218031018343.jpg" alt="电影金刚狼3为什么会变老 故事在未来与金刚狼2无关联" /></a>
					<div class="tyt">
								<h2><a href="http://www.lynow.cn/yule/2017/0218/085918.html" target="_blank">金刚狼3:故事在未来与金刚狼2无关联</a></h2> 
						</div></div> 
											 				</div>  
			<div class="swiper-button-next"></div>
       		 <div class="swiper-button-prev"></div>
		</div>
	</div> 
        <!--焦点图--> 
            
            <div class="w675">
								        	<div class="amuse_list w675">
                 <dl>
                     <dt class="w240 fr"><a href="http://www.lynow.cn/yule/2017/0823/3514621.html" target="_blank" title="$r[title]"><img src="images/thumb_240_130_20170823023635342.jpg" alt="银魂会在中国上映吗时间已经确定 这阵容这良心你打几分"></a></dt>
                    <dd class="w400 fl">
                      <h2><a href="http://www.lynow.cn/yule/2017/0823/3514621.html" target="_blank" title="银魂会在中国上映吗时间已经确定 这阵容这良心你打几分">银魂会在中国上映吗时间已经确定 这阵容这良心你打几分</a></h2> 
                      <ul> 
										
																          
                      </ul>
                   </dd>
                </dl> 
          </div>
		          	<div class="amuse_list w675">
                 <dl>
                     <dt class="w240 fr"><a href="http://www.lynow.cn/yule/2017/0317/247006.html" target="_blank" title="$r[title]"><img src="images/thumb_240_130_20170317012812998.jpg" alt="美女与野兽真人版电影好看吗 揭秘与动画版有什么区别"></a></dt>
                    <dd class="w400 fl">
                      <h2><a href="http://www.lynow.cn/yule/2017/0317/247006.html" target="_blank" title="美女与野兽真人版电影好看吗 揭秘与动画版有什么区别">美女与野兽真人版电影好看吗 揭秘与动画版有什么区别</a></h2> 
                      <ul> 
										
																          
                      </ul>
                   </dd>
                </dl> 
          </div>
		  		          </div>
        
        </div>
        <!--电影栏目左侧--> 
        <div class="w300 fr">
        	<div class="w300 bb5">
                <div class="right_title clearfix pb20">
                     <div class="right_title_border fl"></div>
                     <div class="right_title_border fr"></div>
                     <div class="right_title_main"><span>影评天地</span></div>
               </div>
			   			                  <dl class="w300 dl-list mb20">
               		<dt><a href="http://www.lynow.cn/yule/2017/1006/3316853.html" target="_blank"><img src="images/thumb_300_160_20171006015622232.jpg"></a></dt>
                    <dd><span>电影头条</span><h2><a href="http://www.lynow.cn/yule/2017/1006/3316853.html" target="_blank">这些电影里饱含人生八苦 看得太扎心了</a></h2></dd>
               </dl>
			   			                  <ul class="block_img w300">
			   			                       <li><a href="http://www.lynow.cn/yule/2017/0927/5516594.html" target="_blank"><h2>今年国庆档的电影逼疯选择困难症 到底该看哪一部</h2><img src="images/thumb_300_160_20170927020518250.jpg"></a></li>
                                   <li><a href="http://www.lynow.cn/yule/2017/0919/5316242.html" target="_blank"><h2>看不见的客人最后你看懂了吗？从一支钢笔说起</h2><img src="images/thumb_300_160_20170919105807162.jpg"></a></li>
                                   <li><a href="http://www.lynow.cn/yule/2017/0919/0916239.html" target="_blank"><h2>看不见的客人口碑爆棚，谁杀了劳拉你看明白了吗</h2><img src="images/thumb_300_160_20170919101620210.jpg"></a></li>
                                   <li><a href="http://www.lynow.cn/yule/2017/0915/5816044.html" target="_blank"><h2>猩球崛起的猩猩全是假的，揭秘演员怎么变成猩猩的</h2><img src="images/thumb_300_160_20170915040215946.jpg"></a></li>
                                   <li><a href="http://www.lynow.cn/yule/2017/0915/4216040.html" target="_blank"><h2>猩球崛起与人猿星球啥关系?是前传也是新的故事</h2><img src="images/thumb_300_160_20170915034803804.jpg"></a></li>
               			                  </ul>
           </div>
           <!--影评天地--> 
        </div>
        <!--电影栏目右侧-->
    </div>
    <div class="w1024 re-more">
    	<div class="re-more_border fl"></div>
        <div class="re-more_border fr"></div>
        <div class="re-more_main"><a target="_blank" href="http://www.lynow.cn/yule/dy/">浏览更多电影资讯</a></div>
    </div>
</div>
