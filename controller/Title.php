<?php
include_once "DB.php";
    class Title extends DB{
        public $header='標題區圖片';

        function __construct(){
            parent::__construct('title');
        }
    }
?>