<?php
include "../base.php";
dd($_POST);
echo "<br>";
$table = $_POST['table'];
$db = ucfirst($table);
$data = [];
$rows = $_POST['id'];

dd($rows);
foreach ($rows as $id => $value) {

    if (isset($_POST['del']) && in_array($id, $_POST['del'])) {
        $$db->del($id);
    } else {
        $data = $$db->find($id);

        echo ('data <br>');
        dd($data);
        switch ($table) {
            case 'title':

                $data['text'] = $_POST['text'][$id];
                $data['sh'] = (isset($_POST['sh']) && $id == $_POST['sh']) ? 1 : 0;
                break;
            case 'ad':
            case 'mvim':
            case 'image':
                $data['sh'] = (isset($_POST['sh']) && in_array($id, $_POST['sh'])) ? 1 : 0;
                break;
            case 'total':
                $data['total'] = $_POST['text'][$id];
                break;
            case 'bottom':
                $data['text'] = $_POST['text'][$id];
                break;
            case 'news':
                $data['text'] = $_POST['text'][$id];
                $data['sh'] = (isset($_POST['sh']) && in_array($id, $_POST['sh'])) ? 1 : 0;
                break;
            case 'admin':
                $data['acc'] = $_POST['acc'][$id];
                $data['pw'] = $_POST['pw'][$id];
            default;
        }
        dd($data);
        $$db->save($data);
    }
}



to("../backend.php?do=$table");
