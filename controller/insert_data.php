<?php

include_once '../model/Connection.php';
include_once '../model/Datamanage.php';
error_reporting(0);

$manager = new Datamanage();

date_default_timezone_set("Asia/Calcutta");
$data = $_POST;
$colors=$_POST['colors'];
$color=""; if(!empty($colors)) {$N = count($colors);
    for($i=0; $i < $N; $i++){
        if($i==0){
            $color= $colors[$i];
        }
        else{
        $color= $color.",".$colors[$i];
        }
    }}
unset($data['colors']);
$data['questwo'] = $color;
$data['date'] = date("yy-m-d h:i:s");
if (isset($data) && !empty($data)) {
    $manager->insertData( $data);
}