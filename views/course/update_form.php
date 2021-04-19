<!DOCTYPE html>
<html>
<head>
	<title>Update Form</title>
	<link rel="stylesheet" href="<?=baseUrl('/assets/style.css')?>"></link>
</head>
<body>
	<?php require("./views/header.php"); ?>
	<div class="b-body">
        <h4 class="title" >Update Course</h4>
		<form action="<?=baseUrl('/courses/update')?>">
			<input type="hidden" name="code" value="<?= $row['code']; ?>">
			<label>Course Duration
				<input type="text" name="duration" value="<?= $row['duration']; ?>">
			</label>
			<label>Course Title
				<input type="text" name="title" value="<?= $row['title']; ?>">
			</label>
			<button name="action" value="update">Update</button>
		</form>
	</div>
</body>
</html>
