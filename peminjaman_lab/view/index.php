<!DOCTYPE html>
<html>
<head>
    <title>Data Peminjaman</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">

    <h2 class="mb-4">📋 Data Peminjaman Lab</h2>

    <a href="index.php?action=tambah" class="btn btn-primary mb-3">+ Tambah Data</a>

    <div class="mb-3">
        <a href="index.php" class="btn btn-secondary btn-sm">Semua</a>
        <a href="index.php?status=Dipinjam" class="btn btn-warning btn-sm">Dipinjam</a>
        <a href="index.php?status=Kembali" class="btn btn-success btn-sm">Kembali</a>
    </div>

    <div class="card shadow">
        <div class="card-body">

            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>NIM</th>
                        <th>Alat</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                <?php $no=1; while($row = $data->fetch_assoc()) { ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $row['nama'] ?></td>
                        <td><?= $row['nim'] ?></td>
                        <td><?= $row['alat'] ?></td>
                        <td>
                            <?php if($row['status']=='Dipinjam') { ?>
                                <span class="badge bg-warning">Dipinjam</span>
                            <?php } else { ?>
                                <span class="badge bg-success">Kembali</span>
                            <?php } ?>
                        </td>
                        <td>
                            <a href="index.php?action=edit&id=<?= $row['id'] ?>" class="btn btn-sm btn-info">Edit</a>
                            <a href="index.php?action=hapus&id=<?= $row['id'] ?>" 
                               class="btn btn-sm btn-danger"
                               onclick="return confirm('Yakin hapus?')">Hapus</a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>

            </table>

        </div>
    </div>

</div>

</body>
</html>