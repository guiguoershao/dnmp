<?php
/**
 * @example https://docs.phpmyadmin.net/en/latest/config.html
 */
/*mysql,mysql5 example
$cfg['blowfish_secret']='multiServerExample70518';

$i = 0;

$i++; // server 1 :
$cfg['Servers'][$i]['verbose']   = 'no1';
$cfg['Servers'][$i]['host']      = 'mysql';


$i++; // server 2 :
$cfg['Servers'][$i]['verbose']   = 'no2';
$cfg['Servers'][$i]['host']      = 'mysql5';
*/
$cfg['blowfish_secret']='multiServerExample70518';

$i = 0;

$i++; // server 1 :
$cfg['Servers'][$i]['verbose']   = 'mysql-8.0';
$cfg['Servers'][$i]['host']      = 'mysql';


$i++; // server 2 :
$cfg['Servers'][$i]['verbose']   = 'mysql5-5.7';
$cfg['Servers'][$i]['host']      = 'mysql5';

$cfg['ExecTimeLimit'] = 0;
$cfg['MemoryLimit'] = 0;
$memory_limit = 0;