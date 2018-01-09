<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\models\Category;

AppAsset::register($this);
?>

<!DOCTYPE html>

<html lang="en">

<head>

<meta charset=utf8>

<title>今日临沂-关注临沂人身边的新鲜事 临沂生活资讯新闻门户</title>

<meta name="keywords" content="今日临沂,临沂最新消息,临沂大小事,临沂新闻头条,关注临沂">

<meta name="description" content="今日临沂秉承传播临沂的办站理念,励志打造成临沂具有一定影响力的综合地方门户网">

<meta http-equiv="Cache-Control" content="no-transform" />

<meta http-equiv="Cache-Control" content="no-siteapp" />

<script src="js/wap.js" type="text/javascript"></script>

<script type="text/javascript">uaredirect("http://m.lynow.cn");</script>

<meta name='viewport' content='width=device-width,minimum-scale=1,maximum-scale=1,user-scalable=no' />

<meta http-equiv="X-UA-Compatible" content="IE=edge" /> 

<meta name="mobile-agent" content="format=html5;url=http://m.lynow.cn"/> 

<link rel="stylesheet" type="text/css" href="css/index.css">  

<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script> 

<script type="text/javascript" src="js/koala.min.1.5.js"></script>

<script type="text/javascript" src="js/lypc.js"></script>

<script>

var _hmt = _hmt || [];

(function() {

  var hm = document.createElement("script");

  hm.src = "//hm.baidu.com/hm.js?dfb9d1279a0a89dc627f61ae7ae9f2f7";

  var s = document.getElementsByTagName("script")[0]; 

  s.parentNode.insertBefore(hm, s);

})();

</script>

</head>

<body> 

<div class="top mb20">
	<div class="w1024">
    	<a href="http://www.lynow.cn/" target="_blank" class="top-logo fl"></a>
        <ul class="nav fr">
        	   <li class="cur"><a href="http://localhost/yii2/web/index.php?r=rnews/index" target="_blank">首页</a></li>

          <!--  ////////////////// -->
               			    
        </ul>
    </div>
</div>

<?php $this->beginPage() ?>

        <?= $content ?>

<?php $this->endPage() ?>

<div class="footerwrap">
    	<div class="footer w1024">
        	<p>
            <a href="http://www.lynow.cn/about/aboutus/" target="_blank">关于我们</a>
            <a href="http://www.lynow.cn/about/copyright/" target="_blank">版权声明</a>
            <a href="http://www.lynow.cn/about/mzsm/" target="_blank">免责声明</a>
            <a href="http://www.lynow.cn/about/ystk/" target="_blank">隐私条款</a>
            <a href="http://www.lynow.cn/about/jrwm/" target="_blank">加入我们</a>
            <a href="http://www.lynow.cn/about/hzhb/" target="_blank">合作伙伴</a> 
            <a href="http://m.lynow.cn/" target="_blank">移动网站</a>
            <a href="http://www.lynow.cn/about/contactus/" target="_blank">联系我们</a></p>
            <p>今日临沂-关注<a href="http://www.lynow.cn/sitemaps.xml" target="_blank">临沂</a>人身边的新鲜事 临沂生活资讯新闻门户</p>
            <div class="bei" style=" width:230px; margin:0 auto; padding:5px 10px; height: auto; height: 20px;color: #fff">
					<img src="images/beiico.png" width="20" height="20" class="fl" style="margin-right:5px;">
					<span class="fl">京公网安备37130202371693号</span></div>
        </div>
</div>
    

</body>

</html>

