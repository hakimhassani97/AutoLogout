<?php
session_start();
error_reporting (E_ALL ^ E_NOTICE);

// Login
if (isset($_POST['submit'])){
    $username = trim($_POST['username']);
    $password = $_POST['password'];
    if ($username == 'admin' and $password == 'admin'){
        $_SESSION ['username'] = $username;
        header('Location: profile.php');
    }
}

//if logged in, go to profile.php
if ($_SESSION['username']){
    header('Location: profile.php');
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Auto-Logout</title>
</head>
<body>
<form method="post">
    <table>
        <tr>
            <td><label>Username :</label></td>
            <td><input type="text" name="username"/></td>
        </tr>
        <tr>
            <td><label>Password :</label></td>
            <td><input type="password" name="password"/></td>
        </tr>
        <tr>
            <td colspan="2" align="center" style="padding-top:10px">
            <input type="submit" value="Login" name="submit" /></td>
        </tr>
        <?php  ?>
    </table>
</form>
</body>
</html>