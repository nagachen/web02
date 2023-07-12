<?php
    session_start();

    $BASEDIR=__DIR__;

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

    $Title=new Title;
    $Ad=new Ad;
    $Admin=new Admin;
    $Bottom=new Bottom;
    $Image=new Image;
    $Menu=new Menu;
    $Mvim=new Mvim;
    $News=new News;
    $Total=new Total;




?>