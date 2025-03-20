<?php
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
    <title>User Dashboard</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="form-container">
        <h2>User Dashboard</h2>
        <p>Welcome, <?php echo $_SESSION["user"]["name"]; ?>!</p>
        <a href="backend/logout.php" class="logout-btn">Logout</a>
    </div>
</body>
</html>
