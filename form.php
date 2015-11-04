<?php

defined('C5_EXECUTE') or die(_("Acess Denied."));
$al = loader::helper('concrete/asset_library');
$fm = loader::helper('form');
$photo = false;
if ($photoID) {
	$photo = \File::getByID($photoID); // Without this, the block would not persist the image thats been selected and saved when doing and edits to the block after its been made.
}

?>

<div class="form-group">
	<label class="control-label"><?=t('Choose background image')?>
	</label>
	<?php print $al->file('photo','photoID','Select file',$photo);?>
</div>
<div class="form-group">
	<div class="checkbox">
		<label>
			<input type="checkbox" name="parallax" value="1" <?php if ($parallax) {?>checked<?php } ?>>
			<?php echo t('Enable parallax?')?>
		</label>
	</div>
</div>
