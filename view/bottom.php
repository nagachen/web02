</table>
<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">頁尾版權管理</p>
    <form method="post" action="./api/update.php">
        <table width="100%">
            <tbody>
                <tr class='cent'>

                    <td width="50%" class="yel">頁尾版權管理：</td>


                    <?php
                    $db = ucfirst($table);
                    $rows = $$db->all();

                    foreach ($rows as $key => $row) {

                    ?>

                        <input type="hidden" name="id[<?= $row['id'] ?>]" value="<?= $row['id'] ?>">

                        <td width="50%">
                            <input type='text' name="text[<?= $row['id']; ?>]" value="<?= $row['text']; ?>">
                        </td>

                    <?php
                    }
                    ?>
            </tbody>
        </table>
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
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