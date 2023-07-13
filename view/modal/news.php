<h3 class='cent'>新增最新消息</h3>
<hr>
<form action='./api/add.php' method='post' enctype="multipart/form-data">
<table style="width:70%; margin:auto">
    
    <tr>
        <td>新增最新消息</td>
        <td><textarea type="text" name='text'> </textarea></td>
    </tr>
    <input type='hidden' name='table' value='news'>

    <tr>
        <td><input type='submit' value='新增'></td>
        <td><input type='reset' value='重置'></td>
    </tr>
</talbe>
</form>