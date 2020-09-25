<?php
require_once ('dbhelp.php');

$s_fname = $s_lname = $s_age = $s_address = $s_username = $s_password = '';

if (!empty($_POST)) {
	$s_id = '';

	if (isset($_POST['fname'])) {
		$s_fname = $_POST['fname'];
	}
        if (isset($_POST['lname'])) {
		$s_lname = $_POST['lname'];
	}
	if (isset($_POST['age'])) {
		$s_age = $_POST['age'];
	}
	if (isset($_POST['address'])) {
		$s_address = $_POST['address'];
	}
	if (isset($_POST['id'])) {
		$s_id = $_POST['id'];
	}
        if (isset($_POST['username'])) {
		$s_username = $_POST['username'];
	}
        if (isset($_POST['username'])) {
		$s_password = $_POST['password'];
	}
        

	$s_fname = str_replace('\'', '\\\'', $s_fname);
        $s_lname = str_replace('\'', '\\\'', $s_lname);
	$s_age      = str_replace('\'', '\\\'', $s_age);
	$s_address  = str_replace('\'', '\\\'', $s_address);
	$s_id       = str_replace('\'', '\\\'', $s_id);
        $s_username = str_replace('\'', '\\\'', $s_username);
        $s_password = str_replace('\'', '\\\'', $s_password);

	if ($s_id != '') {
		//update
		$sql = "update student set fname = '$s_fname', lname = '$s_lname' , age = '$s_age', address = '$s_address', username = '$s_username', password = '$s_password'  where id = " .$s_id;
	} else {
		//insert
		$sql = "insert into student(fname, lname, age, address, username, password) value ('$s_fname','$s_lname' '$s_age', '$s_address', '$s_username', '$s_password')";
	}

	// echo $sql;

	execute($sql);

	header('Location: TeacherWeb.php');
	die();
}

$id = '';
if (isset($_GET['id'])) {
	$id          = $_GET['id'];
	$sql         = 'select * from student where id = '.$id;
	$studentList = executeResult($sql);
	if ($studentList != null && count($studentList) > 0) {
		$std        = $studentList[0];
		$s_fname = $std['fname'];
                $s_lname = $std['lname'];
		$s_age      = $std['age'];
		$s_address  = $std['address'];
                $s_username = $std['username'];
		$s_password = $std['password'];
	} else {
		$id = '';
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Registation Form * Form Tutorial</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Add Student</h2>
			</div>
			<div class="panel-body">
				<form method="post">
					<div class="form-group">
					  <label for="usr">FName:</label>
					  <input type="number" name="id" value="<?=$id?>" style="display: none;">
					  <input required="true" type="text" class="form-control" id="usr" name="fname" value="<?=$s_fname?>">
					</div>
                                        <div class="form-group">
					  <label for="usr">LName:</label>
					  <input type="number" name="id" value="<?=$id?>" style="display: none;">
					  <input required="true" type="text" class="form-control" id="usr" name="lname" value="<?=$s_lname?>">
					</div>
					<div class="form-group">
					  <label for="birthday">Age:</label>
					  <input type="number" class="form-control" id="age" name="age" value="<?=$s_age?>">
					</div>
					<div class="form-group">
					  <label for="address">Address:</label>
					  <input type="text" class="form-control" id="address" name="address" value="<?=$s_address?>">
					</div>
                                       <div class="form-group">
					  <label for="username">Username:</label>
					  <input type="text" class="form-control" id="username" name="username" value="<?=$s_username?>">
					</div>
                                         <div class="form-group">
					  <label for="password">Password:</label>
					  <input type="text" class="form-control" id="password" name="password" value="<?=$s_password?>">
					</div>
					<button class="btn btn-success">Save</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>