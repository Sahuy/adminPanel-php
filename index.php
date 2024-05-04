<?php
// error_reporting(E_ALL);
// ini_set('display_errors', 1);

session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Home Page</title>
</head>

<body>
    <h5>Home page for User</h5>
    <form action="http://localhost/adminPanel/funda-service/admin/logout.php" method="POST">
      <button type="submit" name="logout_btn" class="dropdown-item">Logout</button>
    </form>

    <?php
    //var_dump($_SESSION); // Check session variables

    if (isset($_SESSION['status'])) {
        echo $_SESSION['status'];
        unset($_SESSION['status']);
    } else {
        echo "Status not set.";
    }
    ?>

</body>

</html>
