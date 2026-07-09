<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SIPADU DPUTR Purwakarta</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>

*{
    font-family:'Poppins',sans-serif;
}

body{

    background:linear-gradient(135deg,#0d6efd,#0b5ed7);

    min-height:100vh;

    display:flex;

    justify-content:center;

    align-items:center;

}

.login-card{

    width:420px;

    border:none;

    border-radius:20px;

    overflow:hidden;

    box-shadow:0 15px 35px rgba(0,0,0,.25);

}

.header{

    background:white;

    text-align:center;

    padding:30px;

}

.header img{

    width:90px;

}

.header h3{

    margin-top:15px;

    font-weight:700;

    color:#0d6efd;

}

.header p{

    color:#777;

    font-size:14px;

}

.body-login{

    padding:35px;

    background:white;

}

.form-control{

    height:50px;

    border-radius:12px;

}

.btn-login{

    height:50px;

    border-radius:12px;

    font-weight:600;

}

.footer{

    text-align:center;

    color:#888;

    font-size:13px;

    margin-top:20px;

}

</style>

</head>

<body>

<div class="card login-card">

<div class="header">

<img src="assets/img/logo.png">

<h3>SIPADU</h3>

<p>Sistem Informasi Presensi Pegawai</p>

<strong>DPUTR Kabupaten Purwakarta</strong>

</div>

<div class="body-login">

<form action="login.php" method="POST">

<div class="mb-3">

<label>Username</label>

<div class="input-group">

<span class="input-group-text">
<i class="fa fa-user"></i>
</span>

<input
type="text"
class="form-control"
name="username"
placeholder="Masukkan Username"
required>

</div>

</div>

<div class="mb-3">

<label>Password</label>

<div class="input-group">

<span class="input-group-text">
<i class="fa fa-lock"></i>
</span>

<input
type="password"
class="form-control"
id="password"
name="password"
placeholder="Masukkan Password"
required>

<button
class="btn btn-outline-secondary"
type="button"
onclick="lihatPassword()">

<i class="fa fa-eye"></i>

</button>

</div>

</div>

<div class="mb-4">

<label>Login Sebagai</label>

<select
class="form-select"
name="level">

<option value="pegawai">Pegawai</option>

<option value="admin">Administrator</option>

</select>

</div>

<button
class="btn btn-primary w-100 btn-login">

<i class="fa fa-right-to-bracket"></i>

LOGIN

</button>

</form>

<div class="footer">

Versi 1.0

<br>

© 2026 DPUTR Kabupaten Purwakarta

</div>

</div>

</div>

<script>

function lihatPassword(){

let x=document.getElementById("password");

if(x.type==="password"){

x.type="text";

}else{

x.type="password";

}

}

</script>

</body>

</html>
