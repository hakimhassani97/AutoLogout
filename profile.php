<?php
session_start();
$im_here = 'True';
//logout
if (isset($_GET['logout'])){
    if (session_destroy()){
        header('Location: index.php');
    }
}

//if not session go to index.php
if (!$_SESSION['Bramaja']){
    header('Location: index.php');
}
?>
<html onmousemove="cancel()" onclick="cancel()">
<head>
  <title>Profile</title>
  <script>
    var tim = 0;
    function auto_logout() {
        tim = setTimeout(
            "window.location = '?logout';" // logout after 5 secondes if not active
        ,10000);} // 5000 = 5 secondes

    function cancel() { // restart timer ( new 5 secondes ) if mouse onclick or onmove
        window.clearTimeout(tim);
        auto_logout();
    }
  </script>
</head>
<body> <!--show profile welcome-->
    <?= "Welcome <b>".$_SESSION['Bramaja']."</b> (<a href='?logout'>Logout</a>)"; ?>
</body>
</html>