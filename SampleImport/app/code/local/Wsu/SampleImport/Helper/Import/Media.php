<?php
class Wsu_SampleImport_Helper_Import_Media extends Mage_Core_Helper_Abstract {
	
	public function getMediaGallery($line) {
		return Mage::getSingleton('catalog/product')->getResource()->getAttribute('media_gallery') ->getAttributeId();
	}
}
