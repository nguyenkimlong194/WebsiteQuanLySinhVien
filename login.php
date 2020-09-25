<?php include "logincheck.php"; ?>
<!DOCTYPE html>
<html>

<body>


        <form action="" method="POST" id="signin" id="reg">

        <table border="0" align="center" cellpadding="2" cellspacing="0">
        <tr id="lg-1">
        <td class="tl-1"><div align="left" id="tb-name">Username:</div></td>
        <td><input type="text" id="tb-box" name="username" /></td>
        </tr>
        <tr id="lg-1">
        <td class="tl-1"><div align="left" id="tb-name">Password:</div></td>
        <td><input id="tb-box" type="password" name="password" /></td>
        </tr>
        </table>
        <div id="st"><input name="submit" type="submit" value="Login" id="st-btn"/></div>
        </form>

</body>
</html>