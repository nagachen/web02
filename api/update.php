<?php
include "../base.php";
dd($_POST);
echo "<br>";
$table = $_POST['table'];
$db = ucfirst($table);
$data = [];
$rows = '';

switch ($table) {
    default:
        $rows = $_POST['text'];
}

foreach ($rows as $id => $value) {

    if (isset($_POST['del']) && in_array($id, $_POST['del'])) {
        $$db->del($id);

    } else {
        $data = $$db->find($id);
        
        dd($data);
        switch ($table) {
            case 'title':
                $data['text'] = $_POST['text'][$id];
                $data['sh'] = ($id == $_POST['sh']) ? 1 : 0;
            break;
        }
    }
    $$db->save($data);
}



 to("../backend.php?do=$table");
