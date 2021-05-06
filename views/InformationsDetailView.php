<?php 
  //load LayoutTrangChu.php
  $this->layoutPath = "LayoutTrangTrong.php";
 ?>

<div class="blogMain">
	<div class="container">
    	<div class="head-title head-title-xyz clearfix"><h1><?php echo $record->name; ?></h1></div>
        <div class="blogPost">
        	<div class="about clearfix">
				<h3><strong><?php echo $record->description; ?></strong> </h3>
				<p><?php echo $record->content; ?></p>
		    	<div class="like-button share-facebook pro-fb">
			        <div id="fb-root"></div>
			        <div class="fb-like" data-href="vinhthai.com.vn" data-layout="button_count" 
					data-action="like" data-show-faces="false" data-share="true"></div>
			    </div>
			</div>
		</div>
	</div>
</div>