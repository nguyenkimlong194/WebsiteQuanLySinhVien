<?php
require_once ('dbhelp.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Student Management</title>
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
				DANH SÁCH SINH VIÊN
				<form method="get">
					<input type="text" name="s" class="form-control" style="margin-top: 15px; margin-bottom: 15px;" placeholder="Tìm kiếm theo tên">
				</form>
			</div>
			<div class="panel-body">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>STT</th>
							<th>Tên</th>
                                                        <th>Họ</th>
							<th>Tuổi</th>
							<th>Địa chỉ</th>
						</tr>
					</thead>
					<tbody>
                                        <?php
                                        if (isset($_GET['s']) && $_GET['s'] != '') {
                                                $sql = 'select * from student where fname like "%'.$_GET['s'].'%"';
                                        } else {
                                                $sql = 'select * from student';
                                        }

                                        $studentList = executeResult($sql);

                                        $index = 1;
                                        foreach ($studentList as $std) {
                                                echo '<tr>
                                                                <td>'.($index++).'</td>
                                                                <td>'.$std['fname'].'</td>
                                                                <td>'.$std['lname'].'</td>    
                                                                <td>'.$std['age'].'</td>
                                                                <td>'.$std['address'].'</td>
                                                        </tr>';
                                        }
                                        ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

</body>
</html>