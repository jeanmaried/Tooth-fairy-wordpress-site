<?php
/* Template Name: FrontPage*/
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<?php get_template_part( 'template-parts/page-templates/comp/banner' ); ?>
<div class="padding-lg">
<?php $bannerFront = get_post_meta( get_the_ID(), 'reasons-title');?>
		<h3 class="padding-bottom-med"> <?php print_r($bannerFront[0]); ?> </h3>
		<?php
		$whyGTA = get_post_meta( get_the_ID(), 'wiki_test_repeat_group_2');
			foreach($whyGTA[0] as $whyTF) { ?>
					<div class="flex">
						<div class="icon-home">
							<img src= "<?php echo $whyTF['icon-front']; ?>">
						</div>
					<div class="direction-column padding-left-med">
							<h3 class="lg-blue-font"><?php echo $whyTF['reason-front'];?></h3>
							<p><?php echo $whyTF['elaborate-front']; ?></p>
						</div>
					</div>
		<?php
		} ?>
</div>
<div class="lg-blue-bkg flex home-padding">
	<?php
	$frontServices = get_post_meta( get_the_ID(), 'wiki_test_repeat_group_3');
			$i =1;
			foreach($frontServices[0] as $services) {
				$icon_color = "med-blue-bkg";
				if ($i === 1){$icon_color = "yellow-bkg"; $i+=1;}?>
				<div class="flex direction-column width-50 align-items-center">
					<h4><?php echo $services['customer-front'];?></h4>
					<img class="width-50" src= "<?php echo $services['customer-type-image-front']; ?>">
					<button class=" white-font <?php echo $icon_color?>"><?php echo $services['learn-button-front']; ?></button>
				</div>
				<?php
			}?>
</div>
<div class="padding-lg">
<?php
	$dentalTeamHeader = get_post_meta( get_the_ID(), 'team-front'); ?>
		<h4> <?php echo($dentalTeamHeader[0]);?> </h4>
<?php
$frontForth = get_post_meta( get_the_ID(), 'wiki_test_repeat_group_4');
	foreach($frontForth[0] as $dentalTeam) { ?>
		<div class="flex direction-column">
			<h4 class="lg-blue-font"><?php echo $dentalTeam['team-name-front'];?></h4>
			<img class="align-self-center padding-med d-width-25" src= "<?php echo $dentalTeam['team-image-front']; ?>">
			<p><?php echo $dentalTeam['team-description']; ?></p>
		</div>
	<?php
}?>
<div class="flex justify-even">
<?php
$frontFifth = get_post_meta( get_the_ID(), 'wiki_test_repeat_group_5');
		foreach($frontFifth[0] as $dentalPartners) { ?>
			<div class="d-width-15">
				<img src= "<?php echo $dentalPartners['affiliations-image-front']; ?>">
			</div>
<?php
	}
?>
</div>
</div>

<?php while ( have_posts() ) : the_post();
	the_content();
endwhile; ?>
</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
