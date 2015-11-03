<?php defined('C5_EXECUTE') or die(_("Access Denied.")); ?>

<script>
	$("body").addClass("fullscreen-background-image");
</script>
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
