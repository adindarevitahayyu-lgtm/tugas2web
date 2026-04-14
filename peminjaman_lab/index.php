<?php
require_once "controller/PeminjamanController.php";

$controller = new PeminjamanController();

$action = $_GET['action'] ?? 'index';

switch ($action) {
    case 'tambah':
        $controller->tambah();
        break;
    case 'simpan':
        $controller->simpan();
        break;
    case 'edit':
        $controller->edit($_GET['id']);
        break;
    case 'update':
        $controller->update();
        break;
    case 'hapus':
        $controller->hapus($_GET['id']);
        break;
    default:
        $controller->index();
        break;
}