</table>
<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">最新消息資料管理</p>
    <form method="post" action="./api/update.php">
        <table width="100%">
            <tbody>
                <tr class="yel">

                    <td width="68%">最新消息資料內容</td>
                    <td width="15%">顯示</td>
                    <td width="15%">刪除</td>

                </tr>
                <?php
                $db = ucfirst($table);
                $rows = $$db->pagenite(3);
                foreach ($rows as $key => $row) {

                ?>
                    <tr>
                    <input type="hidden" name="id[<?= $row['id'] ?>]" value="<?= $row['id'] ?>">

                        <td width="68%">
                            <textarea type='text' name="text[<?= $row['id']; ?>]" ><?= $row['text']; ?></textarea>
                            </td>
                            <td width="15%">
                                <input type='checkbox' name='sh[<?= $row['id'] ?>]' <?= ($row['sh'] == 1) ? 'checked' : ''; ?> value="<?= $row['id']; ?>"></td>
                            <td width="15%">
                                <input type='checkbox' name="del[<?= $row['id'] ?>]" value="<?= $row['id']; ?>"></td>
                        
                          
                        <?php
                    }
                        ?>
                </tbody>
            </table>
            <?php
            echo "<div class='cent'>";
                $$db->links();
            echo "</div>";

            ?>
            <table style="margin-top:40px; width:70%;">
                <tbody>
                    <tr>
                        <td width="200px"><input type="button" onclick="op('#cover','#cvr','./view/modal/news.php')" value="新增最新消息"></td>
                        <td class="cent">
                          

                        <input type="hidden" name="table" value="<?= $table; ?>">   
                        <input type="submit" value="修改確定"><input type="reset" value="重置"></td>
                    </tr>
                </tbody>
            </table>

        </form>
    </div>
</div>