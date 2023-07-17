<?php
include_once "../../base.php";
?>
<h3 class='cent'>編輯次選單</h3>
<hr>
<form action='./api/updateTitle.php' method='post' enctype="multipart/form-data">
    <table style="width:70%; margin:auto" class="addData">
        <tr>

            <td>次選單名稱</td>
            <td>次選單連結網址</td>
            <td>刪除</td>
        </tr>
        <?php
        $rows = $Menu->all(['main_id' => "{$_GET['id']}"]);

        foreach ($rows as $row) {

        ?>
            <tr>
                <td><input type="text" name="text[<?= $row['id']; ?>]" value="<?= $row['text']; ?>"></td>
                <td><input type="text" name="href[<?= $row['id']; ?>]" value="<?= $row['href']; ?>"></td>

                <td><input type="checkbox" name="del[<?= $row['id']; ?>]" value="<?= $row['id']; ?>"></td>

            </tr>
        <?php
        }
        ?>
        <input type='hidden' name='table' value='menu'>
        <input type='hidden' name='id' value="<?= $_GET['id'] ?>">

        <tr>
            <td><input type='submit' value='修改確定'>
                <input type='reset' value='重置'>
                <input type='button' value='更多次選單' onclick="more()">

            </td>

        </tr>
        </talbe>
</form>
<script>
    let add = `$<tr>
                <td><input type="text" name="text2[]; ?>']" value=""></td>
                <td><input type="text" name="href2[]; ?>']" value=""></td>

            </tr>`
   
    function more() {
        
        $('.addData').append(add);
    }
</script>