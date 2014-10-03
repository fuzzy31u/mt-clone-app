<?php
if (!defined('STATUSNET') && !defined('LACONICA')) { exit(1); }

$config['site']['name'] = 'mamatwit-clone';

$config['site']['server'] = 'ec2-54-64-203-142.ap-northeast-1.compute.amazonaws.com';
$config['site']['path'] = false; 

$config['db']['database'] = 'mysqli://mamatwituser:mamatwitpass@localhost/mamatwit';

$config['db']['type'] = 'mysql';

$config['site']['profile'] = 'public';

$config['site']['timezone'] = 'Asia/Tokyo';
$config['site']['language'] = 'ja_JP';

$config['site']['theme'] = 'neo-light';