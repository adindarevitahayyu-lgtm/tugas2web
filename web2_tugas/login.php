<!DOCTYPE html>
<html>
<head>
<title>Login Sistem</title>

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:'Segoe UI', sans-serif;
}

/* BACKGROUND + MOTIF BATIK */
body{
height:100vh;
display:flex;
justify-content:center;
align-items:center;

background:
linear-gradient(135deg,#f8cdda,#f9a1bc),
url("https://www.transparenttextures.com/patterns/arabesque.png");

background-blend-mode:overlay;
}

/* LOGIN BOX */
.login-container{
width:370px;
padding:45px;
border-radius:18px;
background:linear-gradient(145deg,#ffb6c1,#f78ca0);
box-shadow:0 20px 45px rgba(0,0,0,0.25);
color:white;
}

/* TITLE */
.login-container h2{
text-align:center;
font-size:28px;
margin-bottom:5px;
}

.subtitle{
text-align:center;
font-size:14px;
margin-bottom:30px;
color:#fff3f5;
}

/* FORM */
.form-group{
margin-bottom:20px;
}

label{
font-size:14px;
font-weight:600;
}

/* INPUT */
input{
width:100%;
padding:13px;
margin-top:6px;
border-radius:8px;
border:none;
font-size:14px;
outline:none;
transition:all 0.3s ease;
}

/* ANIMASI INPUT */
input:focus{
transform:translateY(-8px) scale(1.03);
box-shadow:0 12px 25px rgba(0,0,0,0.35);
border:2px solid #ffffff;
}

/* BUTTON */
button{
width:100%;
padding:13px;
border:none;
border-radius:8px;
background:white;
color:#e85a70;
font-size:16px;
font-weight:bold;
cursor:pointer;
transition:0.3s;
}

button:hover{
background:#ffe4ea;
transform:translateY(-3px);
box-shadow:0 10px 20px rgba(0,0,0,0.25);
}

/* FOOTER */
.footer{
text-align:center;
margin-top:18px;
font-size:13px;
color:#fff5f7;
}

</style>

</head>

<body>

<div class="login-container">

<h2>Login Sistem</h2>
<div class="subtitle">Silakan login untuk melanjutkan</div>

<form method="POST" action="controller/login_controller.php">

<div class="form-group">
<label>Email</label>
<input type="text" name="username" placeholder="Masukkan email">
</div>

<div class="form-group">
<label>Password</label>
<input type="password" name="password" placeholder="Masukkan password">
</div>

<button type="submit">Login</button>

</form>

<div class="footer">
Web Programming 2 • MVC Project
</div>

</div>

</body>
</html>