<!DOCTYPE html>
<html>
<head>
	<title>Course List</title>
	<link rel="stylesheet" type="text/css" href="../assets/style.css">
</head>
<body>
	<?php require("../views/header.php"); ?>
	<div class="b-body">
		<h4 class="title">Course List</h4>
		<a href="/controllers/CourseController.php?action=createForm">Create Course</a>
		<table class="table" width="100%"> 
			<tr>
				<th> Code </th>
				<th> Duration </th>
				<th> Title </th>
				<th> Action </th>
			</tr>
			<?php foreach ($rows as $row) { ?>
			<tr>
				<td><?= $row['code']; ?></td>
				<td><?= $row['duration']; ?></td>
				<td><?= $row['title']; ?> </td>
				<td>
					<!-- <a href="/controllers/CourseController.php?action=updateForm&code=<?= $row['code']; ?>">Update</a> -->
					<a href="/controllers/CourseController.php?action=updateForm&code=<?php echo $row['code']; ?>" >Update</a> &nbsp;

                    <a href="/controllers/CourseController.php?action=delete&code=<?php echo $row['code']; ?>" >Delete</a>
				</td>
			</tr>
			<?php } ?>
		</table>
	</div>
</body>
</html>