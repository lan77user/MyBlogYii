<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\helpers\Url;
use yii\web\View;
//use Yii;
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
		<meta charset="utf-8" />
		<title><?= Html::encode($this->title) ?></title>
		<meta name="description" content="" />
		<meta name="viewport" content="width=device-width" />
		
		<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
		<link rel="stylesheet" href="css/main.css" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/nivo-slider.css" />
		<link rel="stylesheet" media="all" href="css/responsive.css" />
		
		<script src="js/modernizr-2.6.1.min.js"></script>
		
		<!-- GOOGLE FONTS -->
		<link href='https://www.baidu.com' rel='stylesheet' type='text/css' />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
    
		<!-- TOP -->
		<div id="top-page" class="cf">
			
			<!-- search -->
			<form method="get" id="searchform" action="#" class="cf" />
				<input type="submit" id="searchsubmit" value=" " />
				<input type="text" value="" name="s" id="s" placeholder="Search" />
			</form>
			<!-- ENDS search -->
			
			<!-- Social bar -->
			<ul id="social-bar" class="cf">
				<li class="facebook"><a href="http://www.baidu.com" title="Facebook"></a></li>
				<li class="twitter"><a href="http://www.qq.com" title="twitter"></a></li>
                               
                                <span>
				<?php if (Yii::$app->user->isGuest): ?>
                                    <li class="action-button"><a href="<?php echo Url::to(['/user/signup'])?>" style="color: #fff; margin-left: 9px;">注册</a></li>
                                    <li class="action-button"><a href="<?php echo Url::to(['/user/signin'])?>" style="color: #fff;  margin-left: 9px;">登录</a></li>
					<?php else: ?>
                                    <li class="action-button"><a href="<?php echo Url::to(['/user/index'])?>" style="color: #fff;  margin-left: 9px;"><?php echo Yii::$app->user->identity->user_name; ?>的账户</a></li>
                                    <li class="action-button"><a href="<?php echo Url::to(['/user/signout'])?>" style="color: #fff; margin-left: 9px;">登出</a></li>
					<?php endif; ?>
			</span>
			</ul>
			<!-- ENDS Social bar -->
			
		</div>
		<!-- ENDS TOP -->
			
<?php $this->beginBody() ?>
<div class="wrap">
    		<!-- HEADER -->
    <header class="cf">
			
			<!-- nav -->
			<nav class="cf">
			
				<!-- left nav -->
				<ul id="left-nav" class="sf-menu">
					<li  class="current-menu-item"><a href="<?php echo Url::to(['/index/features']);?>">爱好</a>
						<ul>
							<li><a href="<?php echo Url::to(['/index/features']);?>">Columns</a></li>
							<li><a href="page-typography.html">Typography</a></li>
							<li><a href="page-elements.html">Elements</a></li>
						</ul>
					</li>
					<li  class="current-menu-item"><a href="<?php echo Url::to(['/index/blog']);?>">博客</a></li>
					<li class="current-menu-item"><a href="<?php echo Url::to(['/index/index']);?>">主页</a></li>
				</ul>
				<!-- ends left nav -->
				
				<!-- right nav -->
				<ul id="right-nav" class="sf-menu">
					<li  class="current-menu-item"><a href="<?php echo Url::to(['/index/experience']);?>">经历</a></li>
					<li  class="current-menu-item"><a href="<?php echo Url::to(['/index/contact']);?>">联系我</a></li>
					<li  class="current-menu-item"><a href="<?php echo Url::to(['/index/photo']);?>">照片</a></li>
				</ul>
				<!-- ENDS right nav -->
				
			</nav>
			<!-- nav -->
			
			<!-- logo -->
			<div id="logo">
				<a href="<?php echo Url::to(['/index/index']);?>"><img src="img/logo.png" alt="" /></a>
			</div>
			<!-- ENDS logo -->
			
			
		</header>
                		<!-- ENDS HEADER -->


    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

    
    	
		<!-- widgets -->
		<div class="widget-holder">
			<div class="left-fold"></div>
			<div class="right-fold"></div>
			<ul class="widget-cols cf">
				<li class="first-col">
					
					<div class="widget-block">
						<h4>作者详情</h4>
                                                
                                              <?php foreach (Yii::$app->view->params['layoutData'] as $key => $val): ?>
                                                                                                 						<div class="recent-post cf">
							<a href="#" class="thumb"><img src="<?php echo $val['img'];?>" alt="Post" /></a>
							<div class="post-head">
								<a href="#"><?php echo $val['writer'];?></a><span class="date"><?php echo $val['postday'];?></span>
							</div>
						</div>
                                                <?php endforeach;?>
					</div>
				</li>
				
				<li class="second-col">
					
					<div class="widget-block">
						<h4>关于</h4>
						<p>大致翻译了下原来Fox模板的内容，就是这是个很colorful的模板啊，然后有很多很棒的创造性丰富的设计啊,希望大家多多支持呢。图片方提供是这个→→<a href="http://twistedfork.me/">Dan Matutina</a></p>
						<p>还有你们可以访问他们的网站<a href="http://templatecreme.com/">Template Creme</a>里面有很多免费的漂亮的模板呢！嘿嘿</p>
					</div>
					
				</li>
				
				<li class="third-col">
					
					<div class="widget-block">
						<h4>尾言</h4>
						<p>尾巴不知道说什么呢。第一次用yii写自己的博客，一边学一边写，调试了很多次，有很多地方不会的都有人集思广益来帮忙。虽然只是一个小小的博客，可是学的到东西远远不止表面看到的那么简单！就像主治医生做了一场小手术，可是他需要了解的确是一个人全身上下的神经骨骼经络器官。珍惜和享受每个小项目！</p>
		     		</div>
		     		
				</li>
				
				<li class="fourth-col">
					
					<div class="widget-block">
						<h4>目录</h4>
						<ul>
							<li class="cat-item"><a href="#">设计</a></li>
							<li class="cat-item"><a href="#">照片</a></li>
							<li class="cat-item"><a href="#">艺术</a></li>
							<li class="cat-item"><a href="#">游戏</a></li>
							<li class="cat-item"><a href="#">电影</a></li>
							<li class="cat-item"><a href="#">娱乐</a></li>
						</ul>
					</div>
		     		
				</li>	
			</ul>
		</div>
		<!-- ENDS widgets -->
<!-- FOOTER -->
		<footer class="cf">
			<div id="bottom-left">
				<!--<script src="js/chirp.min.js"></script>-->
				<script>Chirp({user:'ansimuz',max:1})</script></div>
			<div id="bottom-right">Fox Theme by <a href="http://www.luiszuno.com">luiszuno.com</a> </div>
		</footer>
		<!-- ENDS FOOTER -->
		
		<!-- JavaScript at the bottom for fast page loading -->
		<script src="//upcdn.b0.upaiyun.com/libs/jquery/jquery-2.0.3.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/jquery-1.8.0.min.js"><\/script>')</script>
		<!-- superfish -->
		<script src="js/superfish-1.4.8/js/hoverIntent.js"></script>
		<script src="js/superfish-1.4.8/js/superfish.js"></script>
		<script src="js/superfish-1.4.8/js/supersubs.js"></script>
		<!-- ENDS superfish -->
		<script src="js/jquery.nivo.slider.js"></script>
		<script src="js/tabs.js"></script>
		<script src="js/css3-mediaqueries.js"></script>
		<script src="js/jquery.isotope.min.js"></script>
		<script src="js/custom.js"></script>
		<!-- ENDS javascripts -->
                
                

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
