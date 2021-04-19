<!DOCTYPE html>
<html>
<head>
	<title>Create Form</title>
	<link rel="stylesheet" href="../assets/style.css"></link>
</head>
<body>
	<?php require("./views/header.php"); ?>
	<div class="b-body">
        <h4 class="title" >Create New College</h4>
		<form action="<?=baseUrl('/colleges/create') ?>">
			<label>College Name
				<input type="text" name="name">
			</label>
			<label>College Address
				<input type="text" name="address">
			</label>
			<label>College Phone
				<input type="text" name="phone">
			</label>
			<button name="action" value="create" >Submit</button>
		</form>
	</div>
</body>
</html>
