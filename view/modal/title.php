<h3 class='cent'>新增標題區圖片</h3>
<hr>
<form action='./api/add.php' method='post' enctype="multipart/form-data">
<table style="width:70%; margin:auto">
    <tr>
        <td>標題區圖片</td>
        <td><input type='file' name='img' ></td>
    </tr>
    <tr>
        <td>標題區替代文字</td>
        <td><input type="text" name='text'></td>
    </tr>
    <tr>
        <td><input type='submit' value='新增'></td>
        <td><input type='reset' value='重置'></td>
    </tr>
</talbe>
</form>