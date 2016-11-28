<?php
use yii\helpers\Url;
$this->title = "联系我";
?>


<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	
		<!-- MAIN -->
		<div id="main" role="main" class="cf">
			
			<!-- page-content -->
			<div class="page-content">
			
				<!-- entry-content -->	
	        	<div class="entry-content cf">
					<h2 class="heading">联系我</h2>
                                        <div id="map" style="background: url('img/touxiang.png'); background-repeat: no-repeat;"></div>
				
					<p>
						<strong>地址信息</strong><br />
						宇宙太阳系地球镇地球村<br />
						<strong>电话</strong><br />
						妖妖灵
					</p>
					
					<h3>来来，这里来</h3>
					<!-- form -->
					<form id="contactForm" action="" method="post" />
						<fieldset>
															
							<p>
								<label for="name">你的名字</label>
								<input name="name" id="name" type="text" class="form-poshytip" title="Enter your full name" />
							</p>
							
							<p>
								<label for="email">你的邮箱</label>
								<input name="email" id="email" type="text" class="form-poshytip" title="Enter your email address" />
							</p>
							
							<p>
								<label for="web">网站</label>
								<input name="web" id="web" type="text" class="form-poshytip" title="Enter your website" />
							</p>
							
							<p>
								<label for="comments">留言</label>
								<textarea name="comments" id="comments" rows="5" cols="20" class="form-poshytip" title="Enter your comments"></textarea>
							</p>
							
							<!-- send mail configuration -->
							<input type="hidden" value="your@email.com" name="to" id="to" />
							<input type="hidden" value="ENter the subject here" name="subject" id="subject" />
							<input type="hidden" value="send-mail.php" name="sendMailUrl" id="sendMailUrl" />
							<!-- ENDS send mail configuration -->
							
							<p><input type="submit" value="发送" name="submit" id="submit" /> <span id="error" class="warning">信息</span></p>
						</fieldset>
						
					</form>
					<p id="sent-form-msg" class="success">谢谢你的意见哦。我是不会回复的(๑•̀  ູ॒॒•́๑)啦啦啦  就是那么贱</p>
					<!-- ENDS form -->
			
					</div><!-- ENDS entry-content -->
			</div><!-- ENDS page-content -->
			
			
		</div>
		<!-- ENDS MAIN -->
		
			
	
	</body>
</html>