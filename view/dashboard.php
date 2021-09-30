<?php
//include auth_session.php file on all user panel pages
include("../controller/auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="form">
        <p>Hey, <?php echo $_SESSION['username']; ?>!</p>
        <p>tu est maintenant sur le dashboard.</p>
        <p><a href="../controller/logout.php">Se déconnecter</a></p>
    </div>
</body>
</html>