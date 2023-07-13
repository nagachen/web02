<h3 class='cent'>更換映象區圖片</h3>
<hr>
<form action='./api/updateTitle.php' method='post' enctype="multipart/form-data">
<table style="width:70%; margin:auto">
    <tr>
        <td>映象區圖片</td>
        <td><input type='file' name='img' ></td>
    </tr>
    
    <input type='hidden' name='table' value='image'>
    <input type='hidden' name='id' value="<?=$_GET['id']?>">

    <tr>
        <td><input type='submit' value='更新'></td>
        <td><input type='reset' value='重置'></td>
    </tr>
</talbe>
</form>