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
เพิ่มนักเรียน
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

<tr>
	<td>ID</td>
	<td>First Name</td>
	<td>Last Name</td>
	<td>Age</td>
	<td>Tel.</td>
	<td>
		แก้ไข

		ลบ
	</td>
</tr>
</table>

</body>
</html>