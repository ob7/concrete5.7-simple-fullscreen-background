<?php

namespace Application\Block\FullscreenBackground;
use Concrete\Core\Block\BlockController;
use Loader;
use File;

defined('C5_EXECUTE') or die(_("Access Denied."));

class Controller extends BlockController
{
	protected $btTable = "btFullscreenBackground";
	protected $btInterfaceWidth = '650';
	protected $btInterfaceHeight = '465';
	protected $btWrapperClass = 'ccm-ui';

	public function getBlockTypeName()
	{
		return t("Fullscreen background chooser");
	}

	public function getBlockTypeDescription()
	{
		return t("Use this block to set the background image on pages");
	}

	public function view()
	{
		$image = File::getByID($this->photoID);
		$background_image = $image->getDownloadURL();
		$this->set('background',$background_image);
	}

	public function save($data)
	{
		parent::save($data);
	}
}
