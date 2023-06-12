<!DOCTYPE html>
<html>

<head>
    <title>Pendaftaran Asisten Praktikum</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Pendaftaran Asisten Praktikum</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .title {
            text-align: center;
        }
    </style>
</head>

<body>

    <div class="container mt-5">
        <h1 class="title">Pendaftaran Asisten Praktikum</h1>
        <table class="table table-bordered mt-3">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Praktikum</th>
                    <th scope="col">IPK</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1;
                foreach ($asisten as $a) : ?>
                    <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $a['NIM']; ?></td>
                        <td><?= $a['NAMA']; ?></td>
                        <td><?= $a['PRAKTIKUM']; ?></td>
                        <td><?= $a['IPK']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <div class="mt-3">
            <a href="/asisten/simpan" class="btn btn-primary">Tambah Data Asisten</a>
            <a href="/asisten/search" class="btn btn-primary">Cari Data Asisten</a>
            <a href="/asisten/update" class="btn btn-primary">Edit Data Asisten</a>
            <a href="/asisten/delete" class="btn btn-danger">Hapus Data Asisten</a>
            <a href="/login" class="btn btn-secondary">Logout</a>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>