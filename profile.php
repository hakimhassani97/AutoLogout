<?php
session_start();
//logout
if (isset($_GET['logout'])){
    if (session_destroy()){
        header('Location: index.php?out');
    }
}
//if not logged in go to index.php
if (!$_SESSION['username']){
    header('Location: index.php');
}
?>
<html onmousemove="cancel()" onclick="cancel()">
<head>
  <title>Profile</title>
  <script>
    var timeout = 0;
    var millis = 5000;// time in millis before performing auto log out

    function auto_logout() {
        timeout = setTimeout("window.location = '?logout';",millis);
    }
    function cancel() { // restart timer ( new 5 secondes ) if mouse onclick or onmove
        window.clearTimeout(timeout);
        auto_logout();
    }
    cancel();
  </script>
</head>
<body> <!--show profile welcome-->
    <?= "Welcome <b>".$_SESSION['username']."</b> (<a href='?logout'>Logout</a>)"; ?>
</body>
</html>