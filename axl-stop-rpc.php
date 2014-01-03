<?php

/*

Plugin name: Stop RPC
Author: Alex Righetto
Description: Security Plugin. He removes the default functionality in wp. Based on notes fond here: <a>http://www.deluxeblogtips.com/2013/08/disable-xml-rpc-wordpress.html</a>

*/

/*
remember to include in .htaccess
    <Files xmlrpc.php>
    Order Deny,Allow
    Deny from all
    </Files>
*/

    add_filter( 'xmlrpc_enabled', '__return_false' );	
	add_filter( 'wp_headers', 'axl_remove_x_pingback' );
	
    function axl_remove_x_pingback( $headers )
    {
		
    unset( $headers['X-Pingback'] );
    return $headers;
	
	
    }