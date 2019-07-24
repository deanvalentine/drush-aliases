<?php
$aliases['prod_sites'] = array(
	'remote-user' => 'ansible',
	'ssh-options' => '-i /PATH/TO/YOUR/KEY',   
);

$aliases['www.XXX.org'] = array(
	'parent' => '@prod_sites',
	'root' => '/var/www/html/www-new.XXX.org/',
	'uri' => 'https://www.XXX.org',
	'remote-host' => '10.50.16.10',   
);

$aliases['contribute.XXX.org'] = array(
	'parent' => '@prod_sites',
	'root' => '/var/www/html/XXX/',
	'uri' => 'https://contribute.XXX.org',
	'remote-host' => '10.50.16.14',
);

$aliases['www.XXX1.org'] = array(
	'parent' => '@prod_sites',  
	'root' => '/var/www/html/',
 	'uri' => 'https://www.XXX1.org',
 	'remote-host' => '10.50.14.39',
 );
 
$aliases['www.XXX2.org'] = array(
	'parent' => '@prod_sites',
	'root' => '/var/www/html/dev.XXX2.org/',
   	'uri' => 'https://www.XXX2.org',
   	'remote-host' => '10.50.2.72',
);

/*
 *$aliases['SITENAME'] = array(
 *	'parent' => '@prod_sites',
 *  'root' => '/var/www/html/DOCROOT/',
 *  'uri' => 'https://URL',
 *  'remote-host' => 'IP',   
 * );
 */ 