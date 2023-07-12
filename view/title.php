
    </table>
    <div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
        <p class="t cent botli">網站標題管理</p>
        <form method="post" target="back" action="?do=tii">
            <table width="100%">
                <tbody>
                    <tr class="yel">
                        <td width="45%">網站標題</td>
                        <td width="23%">替代文字</td>
                        <td width="7%">顯示</td>
                        <td width="7%">刪除</td>
                        <td></td>
                    </tr>
                    <?php
                    $rows = $$table->all();
                    foreach ($rows as $key => $vlaue) {

                    ?>
                        <tr>
                            <td width="45%">
                                <img src="<?= $row['img']; ?>" name="img">
                            </td>
                            <td width="23%">
                                <input type='text' name='text[]' value="<?= $row['text']; ?>">
                            </td>
                            <td width="7%">
                                <input type='radio' name='sh' value="<?=($row['sh']==1)?'checked':''; ?>"></td>
                            <td width="7%">
                                <input type='checkbox' name='del[]' ></td>
                            <td></td>
                        <?php
                    }
                        ?>
                </tbody>
            </table>
            <table style="margin-top:40px; width:70%;">
                <tbody>
                    <tr>
                        <td width="200px"><input type="button" onclick="op('#cover','#cvr','./view/modal/title.php')" value="新增網站標題圖片"></td>
                        <td class="cent">
                        <input type="hidden" name="table" vluae="<?=$table;?>">   
                        <input type="submit" value="修改確定"><input type="reset" value="重置"></td>
                    </tr>
                </tbody>
            </table>

        </form>
    </div>
</div>