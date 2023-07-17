<?php
include "../base.php";

$data['id'] = $_POST['id'];

$table = $_POST['table'];
$db = ucfirst($table);


switch ($table) {
    case 'title':
    case 'image':
    case 'mvim':

        $img = $_FILES['img'];
        if (!empty($img['tmp_name'])) {
            move_uploaded_file($img['tmp_name'], "../upload/{$img['name']}");
            $data['img'] = $img['name'];
        }
        $$db->save($data);
        break;
    case 'menu':
       
        if (isset($_POST['text'])) {
            $rows = $_POST['text'];
            dd($rows);
            foreach ($rows as $id => $row) {
                echo "id " .$id;
                
                if (isset($_POST['del']) && in_array($id, $_POST['del'])) {
                    echo'del';
                    $$db->del($id);
                } else {
                    $data1 = $$db->find($id);
                    $data1['text'] = $row;
                    $data1['href'] = $_POST['href'][$id];
                }
                $$db->save($data1);
            }
           
        }
        if (isset($_POST['text2'])) {
            $rows = $_POST['text2'];
            foreach ($rows as $id => $row) {
                $data2['text'] = $row;
                $data2['href'] = $_POST['href2'][$id];
                $data2['main_id']=$_POST['id'];
                $$db->save($data2);
            }
            
        }
}



 

to("../backend.php?do=$table");
