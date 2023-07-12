<?php
include "../base.php";
dd($_POST);
echo "<br>";
$table=$_POST['table'];
$data=[];
switch($table){
    case 'title':
        dd($_FILES);
        $img=$_FILES['img'];
        if(!empty($img['tmp_name'])){       
            move_uploaded_file($img['tmp_name'],"../upload/{$img['name']}");
            $data['img']=$img['name'];
        }
    break;
     
}

if(isset($_POST['text'])){
    $data['text']=$_POST['text'];
    $data['sh']=0;
}
dd($data);
$db=ucfirst($table);
$$db->save($data);

  to("../backend.php?do=$table");

