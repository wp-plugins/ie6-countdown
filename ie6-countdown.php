<?php
/*
Plugin Name: IE6 Countdown
Plugin URI: http://www.smartlogix.co.in
Description: This plugin shows the IE6 countdown banner from Microsoft to visitors using IE6.
Version: 1.0
Author: Namith Jawahar
Author URI: http://www.smartlogix.co.in

This plugin shows the IE6 countdown banner from Microsoft to visitors using IE6.
*/
add_action('wp_footer', 'ie6countdown_footer');
function ie6countdown_footer() {
	echo "<script type='text/javascript'>";
		echo "document.body.innerHTML = \"<!--[if lt IE 7]> <div style='clear: both; height: 59px; padding:0 0 0 15px; position: relative;'> <a href='http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode'><img src='http://www.theie6countdown.com/images/upgrade.jpg' border='0' height='42' width='820' alt='' /></a></div><![endif]-->\" + document.body.innerHTML;";
	echo "</script>";
}
?>
