<?php

define('DB_SERVER', 'ec2-52-44-55-63.compute-1.amazonaws.com');
define('DB_USERNAME', 'pyibozygppyjbn');
define('DB_PASSWORD', 'e992772598f83aa1d367434edcd86c969c59f71d38333f57b4a1dc826c12608e');
define('DB_NAME', 'd5aqpaos0usmmb');
 
/* Attempt to connect to PostgreSQL database */
$link = pg_connect("host=".DB_SERVER." dbname=". DB_NAME ." user=" . DB_USERNAME . " password=" .DB_PASSWORD. "")
		or die('Could not connect1: ' . pg_last_error());
?>
