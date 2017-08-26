<?php
	require_once "config.php";

	$sql = "SELECT * FROM students";
	$query = mysqli_query($conn,$sql);
	
	$num_student = mysqli_num_rows($query);

?>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>

<h1>รายการนักเรียน</h1>
<b>มีจำนวนนักเรียน <?=$num_student?> คน</b>
<br/>
<br/>
<a href="create.php">เพิ่มนักเรียน</a>
<br/>
<br/>
<table>
<tr>
	<th>ID</th>
	<th>First Name</th>
	<th>Last Name</th>
	<th>Age</th>
	<th>Tel.</th>
	<th>การจัดการ</th>
</tr>
<?php while($row = mysqli_fetch_assoc($query)) : ?>
<tr>
	<td><?=$row['id'] ?></td>
	<td><?=$row['firstname'] ?></td>
	<td><?=$row['lastname'] ?></td>
	<td><?=$row['age'] ?></td>
	<td><?=$row['tel'] ?></td>
	<td>
		<a href="edit.php?id=<?=$row['id'] ?>">แก้ไข</a>

		ลบ
	</td>
</tr>
<?php endwhile; ?>
</table>

</body>
</html>