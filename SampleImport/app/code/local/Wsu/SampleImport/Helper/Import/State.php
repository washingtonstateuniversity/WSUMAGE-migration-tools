<?php
class Wsu_SampleImport_Helper_Import_State extends Mage_Core_Helper_Abstract {
	
	public function resolveStatus($line) {
		if ($line['sku']) { 
			return Mage::getSingleton('catalog/product')->getResource()->getAttribute('media_gallery') ->getAttributeId();
		}
	}
}
