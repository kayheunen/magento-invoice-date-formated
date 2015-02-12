<?php
	include_once('Mage/Sales/Model/Order/Invoice.php');

	class Skylion_Sales_Model_Order_Invoice extends Mage_Sales_Model_Order_Invoice {
		public function getCreatedAtFormated($format)
	    {
	        return Mage::helper('core')->formatDate($this->getCreatedAt(), $format);
	    }
	}
?>
