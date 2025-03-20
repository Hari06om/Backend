<!-- <?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="form-container">
        <h2>Welcome, <?php echo $_SESSION["user"]["name"]; ?>!</h2>
        <p>Email: <?php echo $_SESSION["user"]["email"]; ?></p>
        <a href="backend/logout.php" class="logout-btn">Logout</a>
    </div>
</body>
</html> -->

<?php
session_start();
if (!isset($_SESSION["user"]) || $_SESSION["user"]["role"] !== "admin") {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="form-container">
        <h2>Admin Dashboard</h2>
        <p>Welcome, <?php echo $_SESSION["user"]["name"]; ?>!</p>
        <a href="backend/logout.php" class="logout-btn">Logout</a>
    </div>
</body>
</html>

