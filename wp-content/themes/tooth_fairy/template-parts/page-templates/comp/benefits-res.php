<div class="padding-med text-center row">
  <?php $servicesTitle = get_post_meta( get_the_ID(), 'services-residential_2'); ?>
    	<h2 class="padding-bottom-med">
        <?php	print_r($servicesTitle[0]); ?>
      </h2>
  <?php $serviceRes = get_post_meta( get_the_ID(), 'wiki_test_repeat_group_2'); ?>
  <?php  $i=1;
    foreach($serviceRes[0] as $services) {
      $group="d-direction-row";
      $content="d-text-start";
        if($i % 2 === 0){$group ="d-direction-row-reverse"; $content="d-text-end";}  ?>
		      <div class="res-wrap padding-bottom-med flex  <?php echo $group ?> ">
            <div class="width-100 padding-med ">
			           <img class=" margin-auto" src= "<?php echo $services['image-res']; ?>">
            </div>
            <div class="width-100  align-self-center <?php echo $content ?>">
  			           <h3 class="yellow-font padding-bottom-med">
                     <?php echo $services['title-res'];?>
                   </h3>
    			        <p class="padding-sm"><?php echo $services['description-1']; ?></p>
                  <p class="padding-sm"><?php echo $services['description-2']; ?></p>
                  <p class="padding-sm"><?php echo $services['description-3']; ?></p>
                  <p class="padding-sm"><?php echo $services['description-4']; ?></p>
		        </div>
		     </div>
		 <?php
	   $i+=1;}

  $pricinglink = get_post_meta( get_the_ID(), 'service-prices'); ?>

  <?php echo '<a  href="'.get_site_url().'?page_id=28">' ; ?>

        <p class="padding-bottom-lg lg-blue-font">
          <?php	print_r($pricinglink[0]); ?>
        </p>
      </a>
</div>
