</table>
<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">校園映像資料管理</p>
    <form method="post" action="./api/update.php">
        <table width="100%">
            <tbody>
                <tr class="yel">
                    <td width="68%">校園映像資料管理</td>

                    <td width="10%">顯示</td>
                    <td width="10%">刪除</td>
                    <td width="10%">更換圖片</td>
                </tr>
                <?php
                $db = ucfirst($table);
                $rows = $$db->pagenite(3);;
                foreach ($rows as $key => $row) {

                ?>
                    <tr>
                        <td width="68%">
                            <input type="hidden" name="id[<?= $row['id'] ?>]" value="<?= $row['id'] ?>">

                            <img src="./upload/<?= $row['img']; ?>" name="img" width="95%" height="120px">
                        </td>

                        <td width="10%">
                            <input type='checkbox' name='sh[<?= $row['id'] ?>]' <?= ($row['sh'] == 1) ? 'checked' : ''; ?> value="<?= $row['id']; ?>">
                        </td>
                        <td width="10%">
                            <input type='checkbox' name="del[<?= $row['id'] ?>]" value="<?= $row['id']; ?>">
                        </td>
                        <td width="200px"><input type="button" onclick="op('#cover','#cvr','./view/modal/updateImage.php?id=<?= $row['id']; ?>')" value="更換圖片"></td>

                    <?php
                }
                    ?>
            </tbody>

        </table>
        <div style="width:100%" class="cent">
            <?php
            echo "<div class='cent'>";
            $$db->links();
            echo "</div>";
            ?></div>
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <td width="200px"><input type="button" onclick="op('#cover','#cvr','./view/modal/image.php')" value="新增校園映像圖片"></td>
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