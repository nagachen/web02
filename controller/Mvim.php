<?php
include_once "DB.php";
    class Mvim extends DB{
        protected $header='標題區動畫';

        function __construct(){
            parent::__construct('mvim');
        }
    }
?>