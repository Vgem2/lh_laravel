<?php 
$i=0;

?>

@while(count($events)<>0 )
                
<?php $event=$events->first(function($value, $key){return true;});

    

    
?>
    <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
        <?php echo "<a href='../events/".$event->id."'>";    ?>
      <div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
        <div class="my-3 py-3">
          <h2 class="display-5"><?php echo $event->title; ?></h2>
    <!--      <p class="lead"><?php  //echo $event->body; ?></p> -->
        </div>
        <div class="bg-light box-shadow mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
          <?php echo "<img style='object-fit:cover' src='".$event->img."' />"; ?>
          </div>
      </div>
</a>
        <?php $events->pull($i++); if( count($events)<>0){ $event=$events->first(function($value, $key){return true;}); 
        echo "<a href='../events/".$event->id."'>";
?>
      <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
        <div class="my-3 p-3">
          <h2 class="display-5" style="color:black"><?php  echo $event->title; ?></h2>
     <!--     <p class="lead"><?php //echo $event->body; ?></p> -->
        </div>
        <div class="bg-dark box-shadow mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
            <?php echo "<img style='object-fit:cover' src='".$event->img."' />"; ?>
          </div>
      </div>
</a>
        <?php $events->pull($i++); } //if( count($events)<>0) vége ?>
    </div>

   
@endwhile