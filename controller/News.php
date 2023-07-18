<?php
include_once "DB.php";
    class News extends DB{

        function __construct(){
            parent::__construct('news');
        }
   

    function moreNews(){
        $rows=$this->pagenite(5,['sh'=>1]);
        $start=$this->links['start']+1;
        echo "<ol start='$start'>";
        foreach($rows as $row){
            echo "<li>";
            echo mb_substr($row['text'],0,20);
            echo "<span class='all' style='display:none'>";
            echo $row['text'];
            echo "</span>";
            echo "</li>";
        }
        echo "</ol>";
        echo "<div class='cent'>";
        echo $this->links();
        echo "</div>";
    }
}
?>