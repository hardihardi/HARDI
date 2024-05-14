<?php
session_start();
date_default_timezone_set('Asia/Jakarta');

$con =  mysqli_connect('localhost','root','','hardi');
if(mysqli_connect_error()){
     echo mysqli_connect_error();
 }

function base_url($url = null) {
     $base_url = "http://localhost:8080/FAJAR/";
     if($url != null){
         return $base_url."/".$url;
     } else {
         return $base_url;
     }
 }
?>




