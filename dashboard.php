


<?php
require('db.php');
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    <link rel="stylesheet" href="dashboard.css" />
</head>
<body>
    <div class="forms">
        <p class="p">Hey, <?php echo $_SESSION['username']; ?>!</p>
        <p class="a">Simple PHP Task</p>
        <p class="b"><a class="as" href="logout.php">Logout</a></p>
    </div>
</body>
</html>

