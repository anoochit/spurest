<?php

$method = $_SERVER['REQUEST_METHOD'];

if ($method!="POST") {
   $data = array("result"=>"please use POST method","seccess"=>false);
} else {
   $data = array("result"=>"hello ".$_POST['name'],"seccess"=>true);
}

echo json_encode($data);

