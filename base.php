<?php
    session_start();

    $BASEDIR=dirname('__FILE__');

    include_once $BASEDIR . "/controller/Title.php";
    

    function dd($array){
        echo "<pre>";
        print_r($array);
        echo "</pre>";
    }

    function to($url){
        header("location:$url");
    }
    function q($sql){
        $dsn="mysql:host=localhost;charset=utf8;dbname=db02";
        $pdo=new PDO($dsn,'root','');
        $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

    $title=new Title;
//    dd($title->save(['id'=>'2','text'=>'aaaa222']));

$title->pagenite(4);
echo "<br>";
echo "<hr>";
$title->links();
?>