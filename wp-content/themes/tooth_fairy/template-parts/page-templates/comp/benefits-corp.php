<div class="padding-med row">
  <?php $servicesTitle = get_post_meta( get_the_ID(), 'services-corp_2'); ?>
    	<h3 class="padding-bottom-med text-center">
        <?php	print_r($servicesTitle[0]); ?>
      </h3>
  <?php $serviceCorp = get_post_meta( get_the_ID(), 'wiki_test_repeat_group_2');?>
  <?php  $i=1;
  foreach($serviceCorp[0] as $services) {
    $group="d-direction-row";
      if($i % 2 === 0){$group ="d-direction-row-reverse";}  ?>
		    <div class="res-wrap padding-med flex  <?php echo $group ?> ">
          <div class="width-100">
			         <img src= "<?php echo $services['image-corp']; ?>">
          </div>
          <div class="width-100 d-text-start align-self-center">
			        <p class="padding-sm"><span class= "lg-blue-font"><?php echo $services['description-1']; ?> </span>
                <?php echo $services['description-2']; ?></p>
              <p class="padding-sm"><span class= "lg-blue-font"><?php echo $services['description-3']; ?></span>
                <?php echo $services['description-4']; ?></p>
		      </div>
		    </div>
		<?php
	$i+=1; } ?>
</div>
