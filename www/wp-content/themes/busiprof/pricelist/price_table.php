<?php
//Conect the classes
require_once(WEBRITI_TEMPLATE_DIR . '/pricelist/pricelist/product_class.php');
require_once(WEBRITI_TEMPLATE_DIR . '/pricelist/pricelist/list_class.php');
require_once(WEBRITI_TEMPLATE_DIR . '/pricelist/pricelist/customer_class.php');

function priceTableRun(){
    include( WEBRITI_TEMPLATE_DIR . '/pricelist/pricelist/pricelist.php' );
}

add_shortcode('pricetablerun', 'priceTableRun');
?>