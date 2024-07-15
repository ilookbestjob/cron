<?php

use function GuzzleHttp\json_encode;

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
$data=file_get_contents("root");

$matches=[];
preg_match_all('/(#*)(\s*)(((\*)(\/*)(\d*))|((\d*)(,*))*)(\s)(((\d*)(,*))*|\*)(\s)(((\d+)(,*))*|\*)(\s)(((\d+)(,*))*|\*)(\s)(((\d+)(,*))*|\*)(\s)(((\d+)(,*))*|\*)(.*)(?=(#*)(\s*)(((\*)(\/*)(\d*))|((\d*)(,*))*)(\s)(((\d*)(,*))*|\*)(\s)(((\d+)(,*))*|\*)(\s)(((\d+)(,*))*|\*)(\s)(((\d+)(,*))*|\*)(\s)(((\d+)(,*))*|\*)|$)/Um',$data,$matches);

echo \json_encode($matches[0]);






?>


