<?php
include "../base.php";

$data['id']=$_POST['id'];

$table=$_POST['table'];
$db=ucfirst($table);

$data=[];
switch($table){
    case 'title':
        
        $img=$_FILES['img'];
        if(!empty($img['tmp_name'])){       
            move_uploaded_file($img['tmp_name'],"../upload/{$img['name']}");
            $data['img']=$img['name'];
        }
    break;
     
}



$$db->save($data);

  to("../backend.php?do=$table");
