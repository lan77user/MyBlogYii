<?php
use yii\helpers\Url;
$this->title = "博客";
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	
		
		<!-- MAIN -->
		<div id="main" role="main" class="cf">
			
			<!-- posts list -->
			<div id="posts-list" class="cf"> 
			
                            <?php foreach($result as $key => $val): ?>
				<article class="cf">
					<div class="feature-image">
						<a href="<?php echo Url::toRoute(['/index/single', 'id'=> $key+1]); ?>"><img src="<?php echo $val->image;?>" alt="Thumbnail" /></a>
					</div>
					<div class="entry-title">
						<a href="<?php echo Url::toRoute(['/index/single', 'id'=> $key+1]); ?>" class="post-heading"><?php echo $val->title;?></a>
						<div class="entry-date"><?php $val->date;?></div>
						<a href="<?php echo Url::toRoute(['/index/single', 'id'=> $key+1]); ?>#comments" class="comments"><?php echo $val->discuss;?></a>
					</div>
					<div class="excerpt" style="width: auto; height: 170px; overflow: hidden;  text-overflow:ellipsis;">
						<?php echo $val->content;?>
					</div>	
					<a href="<?php echo Url::toRoute(['/index/single', 'id'=> $key+1]); ?>" class="action-button">READ MORE</a>	
				</article>
				<?php endforeach; ?>
				
				<!-- page-navigation -->
				<div class="page-navigation cf">
					<div class="nav-next"><a href="#">Older</a></div>
					<div class="nav-previous"><a href="#">Newer</a></div>
				</div>
				<!--ENDS page-navigation -->

					
						
		    </div>
			<!-- ENDS posts list -->			
			
			
			<!-- sidebar -->
        	<aside id="sidebar">
        		
        		<ul>
	        		
	        		<li class="block">
		        		<h4 class="heading">Sponsors</h4>
		        		
						<div class="ads cf">
							<a href="http://themeforest.net/user/Ansimuz/portfolio?ref=ansimuz"><img src="img/dummies/themeforest.gif" alt="Thumbnail" /></a>
							<a href="http://themeforest.net/user/Ansimuz/portfolio?ref=ansimuz" class="last"><img src="img/dummies/themeforest.gif" alt="Thumbnail" /></a>
							<a href="http://themeforest.net/user/Ansimuz/portfolio?ref=ansimuz"><img src="img/dummies/themeforest.gif" alt="Thumbnail" /></a>
							<a href="http://themeforest.net/user/Ansimuz/portfolio?ref=ansimuz" class="last"><img src="img/dummies/themeforest.gif" alt="Thumbnail" /></a>
						</div>
	        		</li>
	        		
	        		<li class="block">
	        			<h4 class="heading">Text Widget</h4>
						Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. 
	        		</li>
	        		
	        		<li class="block">
		        		<h4 class="heading">Categories</h4>
						<ul>
							<li class="cat-item"><a href="#" title="title">Film and video<span class="post-counter"> (2)</span></a></li>
							<li class="cat-item"><a href="#" title="title">Print<span class="post-counter"> (2)</span></a></li>
							<li class="cat-item"><a href="#" title="title">Photo and lomo<span class="post-counter"> (2)</span></a></li>
							<li class="cat-item"><a href="#" title="title">Habitant morbi<span class="post-counter"> (2)</span></a></li>
							<li class="cat-item"><a href="#" title="title">Film and video<span class="post-counter"> (2)</span></a></li>
							<li class="cat-item"><a href="#" title="title">Print<span class="post-counter"> (2)</span></a></li>
							<li class="cat-item"><a href="#" title="title">Photo and lomo<span class="post-counter"> (2)</span></a></li>
							<li class="cat-item"><a href="#" title="title">Habitant morbi<span class="post-counter"> (2)</span></a></li>
						</ul>
		        	</li>
        		</ul>
        		
        	</aside>
			<!-- ENDS sidebar -->
			
			
		</div>
		<!-- ENDS MAIN -->
		
	</body>
</html>