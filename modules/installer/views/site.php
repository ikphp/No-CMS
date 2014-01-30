<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
echo '<?php'.PHP_EOL;
echo '$available_site = array();'.PHP_EOL;
echo '$site_alias = array();'.PHP_EOL.PHP_EOL;
echo '/* To add additional sub-site,'.PHP_EOL; 
echo '  1. Copy /application/config content to /application/config-your_site:'.PHP_EOL;
echo '  2. Modify database configuration, manually create database'.PHP_EOL;
echo '  3. Modify $available_site and $site_alias'.PHP_EOL;
echo '*/'.PHP_EOL.PHP_EOL;
echo '// If you want a sub-site named "dragon" (Can be accessed by both url: http://dragon.domain.com, or http://domain.com/site-dragon), uncomment this:'.PHP_EOL;
echo '// $available_site[] = \'dragon\';'.PHP_EOL;
echo '// If you want the "dragon" subsite can be accessed through different URL (you have parked domain) uncomment this'.PHP_EOL;
echo '// $site_alias[\'other_domain.com\'] = \'dragon\';'.PHP_EOL.PHP_EOL;