<?php
include "../base.php";
dd($_POST);
echo "<br>";
$table=$_POST['table'];
$data=[];
switch($table){
    case 'title':
    case 'mvim':
    case 'image':
        dd($_FILES);
        $img=$_FILES['img'];
        if(!empty($img['tmp_name'])){       
            move_uploaded_file($img['tmp_name'],"../upload/{$img['name']}");
            $data['img']=$img['name'];
        }
    break;
     
}
if(isset($_POST['acc'])){
    $data['acc']=$_POST['acc'];
    $data['pw']=$_POST['pw']; 
}

if(isset($_POST['text'])){
    $data['text']=$_POST['text'];
    $data['sh']=($table=='title')?0:1;
}
dd($data);
$db=ucfirst($table);
$$db->save($data);

   to("../backend.php?do=$table");

