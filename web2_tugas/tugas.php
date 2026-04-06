<!DOCTYPE html>
<html>
<head>
<title>Data Tugas</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:'Segoe UI', sans-serif;
}

/* BACKGROUND GRADIENT */
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

.nav-right{
display:flex;
align-items:center;
gap:12px;
}

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
text-decoration:none;
}

.logout-btn:hover{
background:#ffe4ec;
transform:scale(1.05);
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

<a href="../logout/logout.php" class="logout-btn">Logout</a>

</div>

</div>


<div class="container mt-5">

<h3>Data Tugas</h3>

<a href="#" class="btn btn-primary mb-3">Tambah Tugas</a>

<table class="table table-bordered">

<thead>
<tr>
<th>No</th>
<th>NIS</th>
<th>Judul</th>
<th>Deskripsi</th>
<th>Deadline</th>
<th>Aksi</th>
</tr>
</thead>

<tbody>

<tr>
<td>1</td>
<td>1</td>
<td>Tugas tes 1</td>
<td>Kerjakan lengkap</td>
<td>2026-10-03</td>
<td>
<button class="btn btn-warning btn-sm">Edit</button>
<button class="btn btn-danger btn-sm">Hapus</button>
</td>
</tr>

</tbody>

</table>

</div>

</body>
</html>
