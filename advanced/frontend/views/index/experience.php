<?php
use yii\helpers\Url;
$this->title = "经历";
?>


<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	
		
		<!-- MAIN -->
		<div id="main" role="main" class="cf">
			
			<!-- categories -->
			<ul class="nav-categories cf">
				<li class="current"><a href="#">all</a></li>
				<li><a href="#">print</a></li>
				<li><a href="#">photography</a></li>
				<li><a href="#">web design</a></li>
			</ul>
			<!-- ENDS categories -->
			
			<!-- featured -->
			<ul class="work-list cf" id="filter-container">
				<li>
					<a href="project.html" class="thumb">
						<img src="img/dummies/t1.jpg" alt="Thumbnail" />
						<div class="img-overlay">VIEW PROJECT</div>
					</a>
					<a href="<?php echo Url::to(['/index/single']); ?>" class="title">LOREM IPSUM DOLOR</a>
					
					<div class="excerpt"><div class="categories"><a href="#">webdesign, </a><a href="#">print, </a><a href="#">photo</a></div></div>
				</li>
				
				<li>
					<a href="project.html" class="thumb">
						<img src="img/dummies/t2.jpg" alt="Thumbnail" />
						<div class="img-overlay">VIEW PROJECT</div>
					</a>
					<a href="<?php echo Url::to(['/index/single']); ?>" class="title">LOREM IPSUM DOLOR</a>
					
					<div class="excerpt"><div class="categories"><a href="#">webdesign, </a><a href="#">print, </a><a href="#">photo</a></div></div>
				</li>
				
				<li>
					<a href="project.html" class="thumb">
						<img src="img/dummies/t3.jpg" alt="Thumbnail" />
						<div class="img-overlay">VIEW PROJECT</div>
					</a>
					<a href="<?php echo Url::to(['/index/single']); ?>" class="title">LOREM IPSUM DOLOR</a>
					
					<div class="excerpt"><div class="categories"><a href="#">webdesign, </a><a href="#">print, </a><a href="#">photo</a></div></div>
				</li>
				
				<li>
					<a href="project.html" class="thumb">
						<img src="img/dummies/t4.jpg" alt="Thumbnail" />
						<div class="img-overlay">VIEW PROJECT</div>
					</a>
					<a href="<?php echo Url::to(['/index/single']); ?>" class="title">LOREM IPSUM DOLOR</a>
					
					<div class="excerpt"><div class="categories"><a href="#">webdesign, </a><a href="#">print, </a><a href="#">photo</a></div></div>
				</li>
				
				<li>
					<a href="project.html" class="thumb">
						<img src="img/dummies/t5.jpg" alt="Thumbnail" />
						<div class="img-overlay">VIEW PROJECT</div>
					</a>
					<a href="<?php echo Url::to(['/index/single']); ?>" class="title">LOREM IPSUM DOLOR</a>
					
					<div class="excerpt"><div class="categories"><a href="#">webdesign, </a><a href="#">print, </a><a href="#">photo</a></div></div>
				</li>
				
				<li>
					<a href="project.html" class="thumb">
						<img src="img/dummies/t6.jpg" alt="Thumbnail" />
						<div class="img-overlay">VIEW PROJECT</div>
					</a>
					<a href="<?php echo Url::to(['/index/single']); ?>" class="title">LOREM IPSUM DOLOR</a>
					
					<div class="excerpt"><div class="categories"><a href="#">webdesign, </a><a href="#">print, </a><a href="#">photo</a></div></div>
				</li>
				
				
			</ul>
			<!-- ENDS featured -->
			
			<!-- pager -->
			<ul class="pager cf">
				<li class="paged">Page 1 of 4 </li>
				<li class="active"><a href="#">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">4</a></li>
			</ul>
			<!-- ENDS pager -->
			
		</div>
		<!-- ENDS MAIN -->
		
			
	</body>
</html>