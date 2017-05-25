<?php
require_once 'app/Mage.php';
Mage::app();
Mage::app()->getStore()->setId(Mage_Core_Model_App::ADMIN_STORE_ID);

$products = Mage::getModel('catalog/product')->getCollection()
	/*->addAttributeToFilter('entity_id', array('gt' => 3835));*/
	/*->addAttributeToFilter('entity_id', array('eq' => 3487));*/
	->addAttributeToFilter('entity_id', array('gt' => 3825))
	->addAttributeToFilter('entity_id', array('lt' => 3836))
	->addAttributeToFilter('attribute_set_id','10');

$mediaApi = Mage::getModel("catalog/product_attribute_media_api");

foreach($products as $product) {
	$prodID = $product->getId();
	$_product = Mage::getModel('catalog/product')->load($prodID);
	$items = $mediaApi->items($_product->getId());
	if (count($items) > 0) { 
		foreach($items as $item) {
			$mediaApi->remove($_product->getId(), $item['file']);
		}
		echo $product->getId() . " done \n";
	} else { 
		echo $product->getId() . " has no images \n";
	}
}	
?>