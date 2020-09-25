
<?php
 include('session.php');
 include('dbhelp.php');
?>
<!DOCTYPE html>
<html>

<body>
    
<a href="StudentWeb.php"> <input type="submit" value="danh sách sinh viên" /></a>

<h1 align='center'>Welcome <?php echo $loggedin_session; ?>,</h1>
<div id="contentbox">
<?php
$sql="SELECT * FROM student where id=$loggedin_id";
$result=mysqli_query($con,$sql);
?>
<?php
while($rows=mysqli_fetch_array($result)){
?>
<div id="signup">
<div id="signup-st">
<form action="" method="POST" id="signin" id="reg">
<div id="reg-head" class="headrg">Your Profile</div>

<table border="0" align="center" cellpadding="2" cellspacing="0">
<tr id="lg-1">
<td class="tl-1"> <div align="left" id="tb-name">Reg id:</div> </td>
<td class="tl-4"><?php echo $rows['id']; ?></td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Username:</div></td>
<td class="tl-4"><?php echo $rows['username']; ?></td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Name:</div></td>
<td class="tl-4"><?php echo $rows['fname']; ?> <?php echo $rows['lname']; ?></td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Email id:</div></td>
<td class="tl-4"><?php echo $rows['address']; ?></td>
</tr>
</table>
</form>


    
    
<?php 
// close while loop 
}
?>

</body>
</html>