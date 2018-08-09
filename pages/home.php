
<div class="jumbotron imag-slide thumbnail">
	<img src="static/image/img-4.jpg" alt="Generic placeholder thumbnail">
</div>
<div class="btn-group-vertical col-xs-2">
<?php 				
	foreach($items as $key=>$arg){
		echo '<a type="button" class="btn btn-default" href="#'.$key.'">'.$key.'</a>';
	}
?>
</div>
<div class="col-xs-10">
<?php 
	foreach($items as $keyi=>$item){
?>

<div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="<?php echo "#item-".$keyi;?>">
          <?php echo "item ".$keyi; ?> 
        </a>
      </h4>
    </div>
    <div id="<?php echo "item-".$keyi;?>" class="panel-collapse collapse">
      <div class="panel-body">
          <?php 
        
            foreach($item as $key=>$arg){

          ?>
          <div class="col-xs-6 col-xs-3">
          <div class="thumbnail">
            <img src="static/image/img-2.jpg">
          </div>
          <div class="caption">
            <h4><?php echo $key; ?> </h4>
            <p><?php echo $arg["disc"];?></p>
            <p>
              <a href="#" class="btn btn-primary" role="button">
                <?php echo $arg["buy"];?>
              </a>
              <a href="item?id=<?php echo $keyi; ?>&name=<?php echo $key; ?>" class="btn btn-primary" role="button">
                more
              </a>
            </p>
          </div>
          </div>
        <?php }?>
      </div>
    </div>
  </div>

<?php }?>
</div>