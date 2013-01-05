<?php

$method = $_SERVER['REQUEST_METHOD'];

if ($method!="POST") {
   $data = array("result"=>"please use POST method","seccess"=>false);
} else {
   if (($_POST["t"]!=null) AND ($_POST["u"]!=null)) {
      if ($_POST["u"]=="f") {
         $value=(($_POST["t"]*9)/5)+32;
      } else {
         $value=(($_POST["t"]-32)*5)/9;
      }      
      $data = array("result"=>$value,"seccess"=>true);
   } else {
      $data = array("result"=>"wrong number or unit","seccess"=>false);
   }
}

echo json_encode($data);

