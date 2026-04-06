<?php

if(isset($_GET['page'])){

    $page = $_GET['page'];

    if($page == "mahasiswa"){
        include "../view/mahasiswa.php";
        exit;
    }

    if($page == "dashboard"){
        include "../view/dashboard.php";
        exit;
    }

}

?>