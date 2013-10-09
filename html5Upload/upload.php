<?php
header('Content-type: application/json');
$result = array();
foreach($_FILES as $file){
    $moved = move_uploaded_file($file["tmp_name"], "uploads/" . $file["name"]);
    $result[] = array('file'=>$file["name"], 'status'=>$moved);
}

print json_encode($result);
