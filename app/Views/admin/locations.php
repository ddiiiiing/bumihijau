<!-- File: app/Views/admin/locations.php -->

<?= $this->extend('layouts/admin') ?>

<?= $this->section('content') ?>
<div class="container mt-5">
    <h1 class="text-center">Daftar Lokasi</h1>
    <a href="/admin/addLocation" class="btn btn-green mb-3">Tambah Lokasi</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Pengali Harga</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($locations as $location): ?>
                <tr>
                    <td><?= $location['name'] ?></td>
                    <td><?= $location['description'] ?></td>
                    <td><?= $location['price_multiplier'] ?></td>
                    <td><img src="/public/images/<?= $location['image'] ?>" alt="<?= $location['name'] ?>" style="width: 100px;"></td>
                    <td>
                        <a href="/admin/edit_location/<?= $location['id'] ?>" class="btn btn-warning">Edit</a>
                        <a href="/admin/delete_location/<?= $location['id'] ?>" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->endSection() ?>
