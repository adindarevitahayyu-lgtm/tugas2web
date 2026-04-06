<?php
include "koneksi.php";

function cek_login($username,$password){
    global $conn;

    $query = mysqli_query($conn,
    "SELECT * FROM users 
    WHERE username='$username' 
    AND password='$password'");

    return $query;
}
?>