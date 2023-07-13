</table>
<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">管理者帳號管理</p>
    <form method="post" action="./api/update.php">
        <table width="100%">
            <tbody>
                <tr class="yel">
                    <td width="45%">帳號</td>
                    <td width="45%">密碼</td>

                    <td width="7%">刪除</td>

                </tr>
                <?php
                $db = ucfirst($table);
                $rows = $$db->all();
                foreach ($rows as $key => $row) {

                ?>
                        <input type="hidden" name="id[<?= $row['id'] ?>]" value="<?= $row['id'] ?>">

                    <tr>
                        <td width="45%">
                        <input type='text' name="acc[<?= $row['id']; ?>]" value="<?= $row['acc']; ?>">
                            
                        </td>
                        <td width="45%">
                            <input type='password' name="pw[<?= $row['id']; ?>]" value="<?= $row['pw']; ?>">
                        </td>

                        <td width="7%">
                            <input type='checkbox' name="del[<?= $row['id'] ?>]" value="<?= $row['id']; ?>">
                        </td>


                    <?php
                }
                    ?>
            </tbody>
        </table>
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <td width="200px"><input type="button" onclick="op('#cover','#cvr','./view/modal/admin.php')" value="新增網站標題圖片"></td>
                    <td class="cent">


                        <input type="hidden" name="table" value="<?= $table; ?>">
                        <input type="submit" value="修改確定"><input type="reset" value="重置">
                    </td>
                </tr>
            </tbody>
        </table>

    </form>
</div>
</div>