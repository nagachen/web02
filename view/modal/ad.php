<h3 class='cent'>新增動態文字廣告</h3>
<hr>
<form action='./api/add.php' method='post' enctype="multipart/form-data">
<table style="width:70%; margin:auto">
    
    <tr>
        <td>新增動態文字</td>
        <td><input type="text" name='text'></td>
    </tr>
    <input type='hidden' name='table' value='ad'>

    <tr>
        <td><input type='submit' value='新增'></td>
        <td><input type='reset' value='重置'></td>
    </tr>
</talbe>
</form>