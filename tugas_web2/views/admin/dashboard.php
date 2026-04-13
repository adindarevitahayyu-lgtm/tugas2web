<?php
if (!isset($_SESSION['user_id'])) {
    header("Location: index.php?page=login");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Admin</title>
    <style>
        body {
            margin: 0;
            font-family: Arial;
        }

        .container {
            display: flex;
        }

        .sidebar {
            width: 220px;
            height: 100vh;
            background-color: #2c3e50;
            color: white;
            padding-top: 20px;
            position: relative;
        }

        .sidebar h2 {
            text-align: center;
        }

        .sidebar a {
            display: block;
            color: white;
            padding: 12px;
            text-decoration: none;
        }

        .sidebar a:hover {
            background-color: #34495e;
        }

        .logout {
            position: absolute;
            bottom: 20px;
            width: 100%;
        }

        .content {
            flex: 1;
            padding: 20px;
        }
    </style>
</head>
<body>

<div class="container">


<?php require_once __DIR__ . '/../layout/sidebar.php'; ?>
    
    <div class="content">
        <h1>Dashboard</h1>
        <p>Selamat datang, <b><?php echo $_SESSION['username']; ?></b> 👋</p>
    </div>

</div>

</body>
</html>