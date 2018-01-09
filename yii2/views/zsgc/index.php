<head>
</head>
<a href="/yii2/web/index.php?r=zsgc/adduser">添加</a>
<table border="1px"  width="100%">
	
	<thead>
		<tr>
			<th>Id</th>
			<th>用户姓名</th>
			<th>性别</th>
			<th>宿舍</th>
			<th>班级</th>
			<th>家庭住址</th>
			<th>专业</th>
			<th>家长姓名</th>
			<th>学生电话</th>
			<th>操作</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($list as $v): ?>
		<tr>
			<td><?= $v['id'] ?></td>
			<td><?= $v['username'] ?></td>
			<td><?= $v['sex'] ?></td>
			<td><?= $v['dorm_id'] ?></td>
			<td><?= $v['iclass'] ?></td>
			<td><?= $v['adress'] ?></td>
			
			<td><?= $v['major'] ?></td>
			<td><?= $v['famname'] ?></td>
			<td><?= $v['stutel'] ?></td>
			<td>
				<a href="/yii2/web/index.php?r=zsgc/deluser&id=<?= $v['id']?>">删除</a>
				<a href="/yii2/web/index.php?r=zsgc/upuser&id=<?= $v['id']?>">修改</a>
			</td>
		</tr>
	<?php endforeach ;?> 
	</tbody>
</table>