<?php defined('C5_EXECUTE') or die(_("Access Denied.")); ?>


<style>
	body {
		background: url('<?php echo $background ?>') no-repeat center center;
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
	}
</style>

<?php if (Page::getCurrentPage()->isEditMode()) { ?>
	<div style="background: white; border: 1px solid; padding: 10px; display:inline-block;"><?php echo t('Edit background image'); ?></div>
<?php } ?>


<script>
	var parallaxEnabled=false;
	$("body").addClass("fullscreen-background-image");
	$(function() {

		document.getElementsByTagName("body")[0].setAttribute('data-stellar-background-ratio',"0.5");
		document.getElementsByTagName("body")[0].setAttribute('data-stellar-horizontal-offset',"50");
		if(parallaxEnabled==true) {
			$('body').stellar();
		}
	});
</script>

<?php
if($parallax) {
	echo('<script>parallaxEnabled=true;</script>');
}?>
