


<?php 
	$item = $items[$_GET["id"]][$_GET["name"]];
?>
<!-- <div class="col-xs-6 col-xs-offset-3">
<div class="thumbnail">
	<img src="static/image/img-2.jpg">
</div>
<div class="caption col-xs-offset-1">
	<h4><?php //echo $_GET["name"]; ?> </h4>
	<p><?php //echo $item["disc"];?></p>
	<p>
		<a href="#" class="btn btn-primary" role="button">
			<?php //echo $item["buy"];?>
		</a>
	</p>
</div>
</div>
 -->


<div class="col-xs-10 col-xs-offset-1">
<div class="panel panel-default"  style="margin: 10px"  id="<?php echo $keyi; ?>">
	<div class="panel-heading" style="background-color:#eee;"  >
		<h1 class="panel-title"> 
			<?php echo $_GET["name"]; ?> 
		</h1>
	</div>
	<div class="panel-body">
		<div >
			<div class="thumbnail col-xs-6 col-xs-offset-3">
				<img src="static/image/img-2.jpg">
			</div>
			<div class="caption">
				<p class="col-xs-12" style="word-wrap:break-word;">

				<?php echo $item["disc"];?>

Copyright 2015 by Tutorials Point (I) Pvt. Ltd.
All the content and graphics published in this e-book are the property of
Tutorials Point (I) Pvt. Ltd. The user of this e-book is prohibited to reuse, retain,
copy, distribute or republish any contents or a part of contents of this e-book in
any manner without written consent of the publisher.
We strive to update the contents of our website and tutorials as timely and as
precisely as possible, however, the contents may contain inaccuracies or errors.
Tutorials Point (I) Pvt. Ltd. provides no guarantee regarding the accuracy,
timeliness or completeness of our website or its contents including this tutorial.
If you discover any errors on our website or in this tutorial, please notify us at
contact@tutorialspoint.com
									
				</p>
				<div class="row ">
				<p class="col-xs-12">
					<a href="#" class="btn btn-primary" role="button">
						<?php echo $item["buy"];?>
					</a>
				</p>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
