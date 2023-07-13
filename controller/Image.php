<?php
include_once "DB.php";
    class Image extends DB{
        protected $header='標題區映像';

        function __construct(){
            parent::__construct('image');
        }
    }
?>