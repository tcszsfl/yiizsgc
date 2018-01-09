<table width="100%" cellpadding="0" cellspacing="0" border="1">
    <tr>
        <th>id</th>
        <th>姓名</th>
        <th>性别</th>
        <th>宿舍</th>
        <th>家庭住址</th>
        <th>民族</th>
        <th>学生手机</th>
        <th>身份证号</th>
        <th>修改</th>
    </tr>
    <?php
    foreach($plist as $v):
        ?>
        <tr>
            <td><?=$v[1];?></td>
            <td><?=$v[3];?></td>
            <td><?=$v[5];?></td>
            <td><?=$v[7];?></td>
            <td><?=$v[9];?></td>
            <td><?=$v[11];?></td>
            <td><?=$v[13];?></td>
            <td><?=$v[15];?></td>
            <td><a href="/yii2/web/index.php?r=index/deluser&id=<?=$v['uid'];?>">删除</a>|
                <a href="/yii2/web/index.php?r=index/update&id=<?=$v[1];?>">编辑</a>
            </td>

        </tr>
    <?php endforeach;?>
     <a href="/yii2/web/index.php?r =index/index&page=<?=$page-1?>">上一页</a>
    <a  href="/yii2/web/index.php?r=index/index&page=<?=$page+1?>">下一页</a>
    <br/>
    <a href="/yii2/web/index.php?r=index/add" >添加</a>

</table>
