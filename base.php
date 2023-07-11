<?php
    session_start();

    $BASEDIR=dirname('__FILE__');

    include_once $BASEDIR . "/controller/Title.php";
    include_once $BASEDIR . "/controller/Ad.php";
    include_once $BASEDIR . "/controller/Admin.php";
    include_once $BASEDIR . "/controller/Bottom.php";
    include_once $BASEDIR . "/controller/Image.php";
    include_once $BASEDIR . "/controller/Menu.php";
    include_once $BASEDIR . "/controller/Mvim.php";
    include_once $BASEDIR . "/controller/News.php";
    include_once $BASEDIR . "/controller/Total.php";

    

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
    $title=new Ad;
    $title=new Admin;
    $title=new Bottom;
    $title=new Image;
    $title=new Menu;
    $title=new Mvim;
    $title=new News;
    $title=new Total;




?>