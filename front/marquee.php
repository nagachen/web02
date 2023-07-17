<marquee scrolldelay="120" direction="left" style="position:absolute; width:100%; height:40px;">
<?php
    $rows=$Ad->all(['sh'=>'1']);
    $ad='';
    foreach($rows as $row){
        $ad .=" &nbsp&nbsp&nbsp&nbsp {$row['text']}";
        
    }
    echo $ad;
?>
</marquee>