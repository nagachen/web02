<?php
    session_start();

    $BASEDIR=dirname('__FILE__');

    include_once $BASEDIR . "/controller/Title.php";
    

    function dd($array){
        echo "<pre>";
        print_r($array);
        echo "</pre>";
    }

    $title=new Title;
//    dd($title->save(['id'=>'2','text'=>'aaaa222']));

$title->pagenite(4);
echo "<br>";
echo "<hr>";
$title->links();
?>