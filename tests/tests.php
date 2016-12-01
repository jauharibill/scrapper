<?php 

require_once __DIR__ . "/../vendor/autoload.php";

use CumGhost\Crawler;

// $data = new Crawler("http://uin-malang.ac.id/r/161101/toleransi-tinggi-ala-nabi.html");
/**
* 
*/
$data = new Crawler("http://uin-malang.ac.id/r/161101/toleransi-tinggi-ala-nabi.html");

$data->getContentByTag('p');


 ?>