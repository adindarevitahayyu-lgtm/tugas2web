<?php
require_once "model/Peminjaman.php";

class PeminjamanController {
    private $model;

    public function __construct() {
        $this->model = new Peminjaman();
    }

    public function index() {
        $status = $_GET['status'] ?? null;
        $data = $this->model->getAll($status);
        include "view/index.php";
    }

    public function tambah() {
        include "view/tambah.php";
    }

    public function simpan() {
        if ($_POST['nama'] == "" || $_POST['nim'] == "") {
            echo "Nama & NIM tidak boleh kosong!";
            return;
        }

        $this->model->insert($_POST);
        header("Location: index.php");
    }

    public function edit($id) {
        $data = $this->model->getById($id);
        include "view/edit.php";
    }

    public function update() {
        $this->model->update($_POST['id'], $_POST);
        header("Location: index.php");
    }

    public function hapus($id) {
        $this->model->delete($id);
        header("Location: index.php");
    }
}