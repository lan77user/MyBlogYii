<?php 
use yii\helpers\Url;
$this->title = "详情";
?>

<!-- MAIN -->
		<div id="main" role="main" class="cf">
			
			<!-- posts list -->
			<div id="posts-list" class="cf"> 
			
                                    <?php foreach($result as $key => $val): ?>
				<article class="cf">
					<div class="feature-image">
						<a href="<?php echo Url::to(['/index/single']);?>"><img src="<?php echo $val['image'];?>" alt="Thumbnail" /></a>
					</div>
					<div class="entry-title">
						<a href="<?php echo Url::to(['/index/single']);?>" class="post-heading"><?php echo $val['title'];?></a>
						<div class="entry-date"><?php echo $val['date']?></div>
						<a href="<?php echo Url::to(['/index/single']);?>#comments" class="comments"><?php echo $val['discuss'];?></a>
					</div>
					<div class="excerpt entry-content">
						<?php echo $val['content'];?>
					</div>	
				</article>
                                    <?php endforeach;?>
				
				<!-- Comments wrap-->
				<div id="comments-wrap">
					<h4 class="heading">3 comments</h4>
								
					<!-- comments list -->
					<ul class="commentlist">
						<li class="comment byuser comment-author-admin bypostauthor even thread-even depth-1 parent" id="comment-1">
							<div id="div-comment-1" class="comment-body">
								<div class="comment-author vcard">
									<img alt="" src="http://1.gravatar.com/avatar/35c17650e764d5598b6726ff10ea33f0?s=60&amp;d=http%3A%2F%2F1.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D60&amp;r=G" class="avatar avatar-60 photo" height="60" width="60" />
									<cite class="fn">admin</cite> <span class="says">says:</span>
								</div>
				
								<div class="comment-meta commentmetadata"><a href="#">June 18, 2012 at 6:07 pm</a></div>
				
								<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
								<div class="reply">
									<a class="comment-reply-link" href="replytocom=23#respond" onclick='return addComment.moveForm("comment-1", "2", "respond", "432")'>回复</a>
								</div>
							</div>
						</li>
						
						<li class="comment byuser comment-author-admin bypostauthor even thread-even depth-1 parent" id="comment-2">
							<div id="div-comment-2" class="comment-body">
								<div class="comment-author vcard">
									<img alt="" src="http://1.gravatar.com/avatar/35c17650e764d5598b6726ff10ea33f0?s=60&amp;d=http%3A%2F%2F1.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D60&amp;r=G" class="avatar avatar-60 photo" height="60" width="60" />
									<cite class="fn">admin</cite> <span class="says">says:</span>
								</div>
				
								<div class="comment-meta commentmetadata"><a href="#comment-2">June 18, 2012 at 6:07 pm</a></div>
				
								<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
								<div class="reply">
									<a class="comment-reply-link" href="#respond" onclick='return addComment.moveForm("comment-2", "2", "respond", "432")'>回复</a>
								</div>
							</div>
							<?php // "如果提交了下面的回复按钮，就显示这里的回复信息"?>
							<ul class="children">
								<li class="comment byuser comment-author-admin bypostauthor odd alt depth-2" id="comment-4">
									<div id="div-comment-3" class="comment-body">
										<div class="comment-author vcard">
											<img alt="" src="http://1.gravatar.com/avatar/35c17650e764d5598b6726ff10ea33f0?s=60&amp;d=http%3A%2F%2F1.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D60&amp;r=G" class="avatar avatar-60 photo" height="60" width="60" /><cite class="fn">admin</cite> <span class="says">says:</span>
										</div>
			
										<div class="comment-meta commentmetadata"><a href="http://luiszuno.com/themes/wp-vintage/pulvinar-facilisis/#comment-4">June 18, 2012 at 6:09 pm</a>
										</div>
			
										<p>Aenean fermentum, elit eget tincidunt condimentum, eros</p>
			
										<div class="reply">
											<a class="comment-reply-link" href="#respond" onclick='return addComment.moveForm("comment-3", "2", "respond", "432")'>回复</a>
										</div>
									</div>
								</li>
							</ul>
                                                    <?php //endif;?>
						</li>
					</ul>
					<!-- ENDS comments list -->
				</div>
				<!-- ENDS Comments wrap -->

				<!-- Respond -->				
				<div id="respond">
					<h4 class="heading">Leave a Reply <small><a rel="nofollow" id="cancel-comment-reply-link" href="/themes/wp-simpler/archives/34#respond" style="display:none;">Cancel reply</a></small></h4>
					
					
					<form action="<?php echo Url::to(['/index/single']);?>" method="post" id="commentform" />
					<p class="comment-notes">Your email address will not be published. Required fields are marked <span class="required">*</span></p>
					
					<p class="comment-form-author"><label for="author">Name<span class="required">*</span></label> <input id="author" name="author" type="text" value="" size="30" aria-required="true" /></p>
					
					<p class="comment-form-email"><label for="email">Email<span class="required">*</span></label> <input id="email" name="email" type="text" value="" size="30" aria-required="true" /></p>
	<p class="comment-form-url"><label for="url">Website</label><input id="url" name="url" type="text" value="" size="30" /></p>
					
					<p class="comment-form-comment"><label for="comment">Comment</label><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea></p>						
													
					<!-- allowed tags -->
					<p class="form-allowed-tags">You may use these <abbr title="HyperText Markup Language">HTML</abbr> tags and attributes:  <code>&lt;a href="" title=""&gt; &lt;abbr title=""&gt; &lt;acronym title=""&gt; &lt;b&gt; &lt;blockquote cite=""&gt; &lt;cite&gt; &lt;code&gt; &lt;del datetime=""&gt; &lt;em&gt; &lt;i&gt; &lt;q cite=""&gt; &lt;strike&gt; &lt;strong&gt; </code></p>						
					<!-- ENDS allowed tags -->
					
					<p class="form-submit">
						<input name="submit" type="submit" id="submit" value="Post Comment" />
						<input type="hidden" name="comment_post_ID" value="34" id="comment_post_ID" />
						<input type="hidden" name="comment_parent" id="comment_parent" value="0" />
					</p>
					
					</form>
				</div>
				<!-- ENDS Respond -->
						
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
		