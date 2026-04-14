<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow">
        <div class="card-body">

            <h3>Tambah Data</h3>

            <form method="POST" action="index.php?action=simpan">
                <div class="mb-3">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control">
                </div>

                <div class="mb-3">
                    <label>NIM</label>
                    <input type="text" name="nim" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Alat</label>
                    <input type="text" name="alat" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Tanggal Pinjam</label>
                    <input type="date" name="tanggal_pinjam" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Tanggal Kembali</label>
                    <input type="date" name="tanggal_kembali" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Status</label>
                    <select name="status" class="form-control">
                        <option>Dipinjam</option>
                        <option>Kembali</option>
                    </select>
                </div>

                <button class="btn btn-primary">Simpan</button>
                <a href="index.php" class="btn btn-secondary">Kembali</a>
            </form>

        </div>
    </div>
</div>

</body>
</html>