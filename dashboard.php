<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:'Segoe UI', sans-serif;
}

/* BACKGROUND GRADIENT PINK PASTEL */
body{
background:linear-gradient(135deg,#ffd6e7,#ffc2d1,#ffb3c6);
min-height:100vh;
}

/* NAVBAR */
.navbar{
background:#ff8fab;
padding:15px 50px;
display:flex;
justify-content:space-between;
align-items:center;
box-shadow:0 5px 15px rgba(0,0,0,0.15);
}

/* LEFT MENU */
.nav-left{
display:flex;
align-items:center;
gap:20px;
}

.logo{
font-weight:bold;
font-size:18px;
color:white;
letter-spacing:1px;
margin-right:10px;
}

/* MENU BUTTON STYLE (Mahasiswa, Tugas, Admin) */
.menu-btn{
background:white;
color:#ff4d88;
padding:7px 15px;
border-radius:20px;
text-decoration:none;
font-weight:600;
font-size:14px;
transition:0.3s;
}

.menu-btn:hover{
background:#ffe4ec;
transform:scale(1.05);
}

/* RIGHT MENU */
.nav-right{
display:flex;
align-items:center;
gap:12px;
}

/* LOGOUT BUTTON */
.logout-btn{
background:white;
color:#ff4d88;
border:none;
padding:7px 15px;
border-radius:20px;
cursor:pointer;
font-weight:600;
font-size:14px;
transition:0.3s;
}

.logout-btn:hover{
background:#ffe4ec;
transform:scale(1.05);
}

/* CONTENT */
.container{
padding:60px;
display:flex;
justify-content:center;
}

/* CARD */
.dashboard-card{
background:white;
padding:40px;
border-radius:20px;
box-shadow:0 10px 30px rgba(0,0,0,0.15);
max-width:600px;
width:100%;
text-align:center;
}

.dashboard-card h1{
color:#ff4d88;
margin-bottom:10px;
}

.dashboard-card p{
color:#666;
font-size:15px;
}

</style>

</head>

<body>

<!-- NAVBAR -->
 <div class="navbar">

<div class="nav-left">
<div class="logo">WEB 2 MVC</div>

<a href="mahasiswa.php" class="menu-btn">Mahasiswa</a>
<a href="tugas.php" class="menu-btn">Tugas</a>

</div>

<div class="nav-right">

<div class="menu-btn">Admin</div>

<button class="logout-btn">Logout</button>

</div>

</div>

<!-- CONTENT -->
<div class="container">

<div class="dashboard-card">
<h1>Dashboard</h1>
<p>Selamat datang admin</p>
</div>

</div>

</body>
</html>