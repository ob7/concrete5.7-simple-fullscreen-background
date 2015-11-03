<?php

defined('C5_EXECUTE') or die(_("Acess Denied."));
$al = loader::helper('concrete/asset_library');
$fm = loader::helper('form');
$photo = false;
if ($photoID) {
	$photo = \File::getByID($photoID);
}

?>

<div class="form-group">
	<label class="control-label"><?=t('Choose background image')?>
	</label>
	<?php print $al->file('photo','photoID','Select file',$photo);?>
</div>
