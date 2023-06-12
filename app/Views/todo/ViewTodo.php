<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<form action="/Todo/save" method="post">
    Masukkan Kegiatan:<br>
    <input type="text" name="kegiatan" required>
    <input type="submit" name="tambah" value="Tambahkan">
</form>

<table class=table table-sm>
    <thead>
        <tr>
            <th>Daftar Kegiatan:</th>
            <th> </th>

        </tr>
    </thead>
    <tbody>
        <?php foreach ($todo as $t) : ?>
            <tr>
                <td><?= $t['kegiatan']; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?= $this->endSection(); ?>