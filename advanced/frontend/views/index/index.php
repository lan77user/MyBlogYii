<?php 
use yii\helpers\Url;
use yii\helpers\Html;
use yii\db\ActiveRecord;
use yii\web\View;
$this->title = "主页";
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	
		<!-- MAIN -->
		<div id="main" role="main" class="cf">
		
			
			<!-- SLIDER -->
			<div class="slider-wrapper theme-default">
	            <div id="slider" class="nivoSlider">
	                <img src="img/dummies/slides/01.jpg" alt="" />
	                <img src="img/dummies/slides/02.jpg" alt="" />
	                <img src="img/dummies/slides/03.jpg" alt="" />
	            </div>
	        </div>
			<!-- ENDS SLIDER -->
			
			<!-- tagline -->
			<div class="tagline">越努力 -> 越幸运</div>
			<!-- ENDS tagline -->
			
			<!-- featured -->
			<ul class="feature cf">
                            <?php foreach ($result as $key => $val):?>
				<li>
					<a href="<?php echo Url::toRoute(['/index/single', 'id'=> $key+1]); ?>" class="thumb">
						<img src="<?php echo $val->image;?>" alt="Thumbnail" />
						<div class="img-overlay">更多</div>
					</a>
                                    <a href="<?php echo Url::toRoute(['/index/single','id' => $key+1]); ?>" class="title" id=""><?php echo $val->title; ?></a>
                                    <div class="categories"><a href="#"><?php echo $val->source;?>&nbsp;&nbsp;</a><a href="#"><?php echo $val->writer;?> </a>
                                        <div class="excerpt" style="width: auto; height: 148px; overflow: hidden;  text-overflow:ellipsis;"><?php echo $val->content;?></div>
                                        <?php echo Html::a('更多',['index/single','id' => $key+1],['class' => 'action-button']); ?>
				</li>
                                <?php endforeach; ?>
				
				
			</ul>
			<!-- ENDS featured -->
			
		</div>
		<!-- ENDS MAIN -->
		
	
	</body>
</html>