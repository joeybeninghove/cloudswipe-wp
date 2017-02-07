<?php

include("/Users/joey/Sites/wp/wp-load.php");
require __DIR__ . '/../vendor/autoload.php';

CloudSwipe_Wp::set_secret_key( "sk_store_4ac40d63c965132addbf0c19" );
$invoice = CloudSwipe_Wp_Invoice::get_one( "in_c722a4484a94" );
print_r($invoice);
