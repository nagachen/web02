
    </table>
    <div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
        <p class="t cent botli">選單管理</p>
        <form method="post"  action="./api/update.php">
            <table width="100%">
                <tbody>
                    <tr class="yel">
                        <td width="30%">主選單名稱</td>
                        <td width="30%">選單連結網址</td>
                        <td width="7%">次選單數</td>         
                        <td width="7%">顯示</td>
                        <td width="7%">刪除</td>
                        <td width="15%">編輯次選單</td>

                        <td></td>
                    </tr>
                    <?php
                    $db=ucfirst($table);
                    $rows = $$db->all(['main_id'=>'0']);
                    
                    foreach ($rows as $key => $row) {
                        
                    ?>
                        <tr>
                        <input type="hidden" name="id[<?= $row['id'] ?>]" value="<?= $row['id'] ?>">

                            <td width="30%">
                             <input type='text' name="text[<?=$row['id'];?>]" value="<?= $row['text']; ?>">

                            </td>
                            <td width="30%">
                                <input type='text' name="href[<?=$row['id'];?>]" value="<?= $row['href']; ?>">
                            </td>
                            <td width="7%">
                                <?= $Menu->count(['main_id'=>$row['id']])?>
                            </td>
                            <td width="7%">
                                <input type='checkbox' name='sh[<?=$row['id']?>]' <?=($row['sh']==1)?'checked':''; ?> value="<?=$row['id'];?>"></td>
                            <td width="7%">
                                <input type='checkbox' name="del[<?=$row['id']?>]" value="<?=$row['id'];?>"></td>
                        <td width="15%">
                            <input type="button" onclick="op('#cover','#cvr','./view/modal/updateMenu.php?id=<?=$row['id'];?>')" value="編輯次選單"></td>
                          
                        <?php
                    }
                        ?>
                </tbody>
            </table>
            <table style="margin-top:40px; width:70%;">
                <tbody>
                    <tr>
                        <td width="200px"><input type="button" onclick="op('#cover','#cvr','./view/modal/menu.php')" value="新增主選單"></td>
                        <td class="cent">
                          

                        <input type="hidden" name="table" value="<?=$table;?>">   
                        <input type="submit" value="修改確定"><input type="reset" value="重置"></td>
                    </tr>
                </tbody>
            </table>

        </form>
    </div>
</div>