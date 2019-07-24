<?php
$aliases['dev_sites'] = array(
	'remote-user' => 'ansible',
	'ssh-options' => '-i /PATH/TO/YOUR/KEY',   
);

$aliases['dev.XXX.org'] = array(
		'parent' => '@dev_sites',   
		'root' => '/var/www/html/www-new.XXX.org/',
		'uri' => 'https://dev.XXX.org',
		'remote-host' => '10.10.10.68',
);	

$aliases['dev.XXX1.org'] = array(
	'parent' => '@dev_sites',
	'root' => '/var/www/html/dev.XXX1.org/',
   	'uri' => 'http://http://dev.XXX1.org/',
   	'remote-host' => '10.50.16.6',
);

$aliases['dev-XXX2.org'] = array(
	'parent' => '@dev_sites',
	'root' => '/var/www/html/',
	'uri' => 'https://dev-XXX2.ndi.org',
	'remote-host' => '10.50.14.231',   
);

/*
*$aliases['SITENAME'] = array(
*	'parent' => '@dev_sites',
*	'root' => '/var/www/html/DOCROOT/',
*	'uri' => 'https://URL',
*	'remote-host' => 'IP',   
*);
*/
?>
