<!-- File: app/Views/admin/trees.php -->

<?= $this->extend('layouts/admin') ?>

<?= $this->section('content') ?>
<div class="container mt-5">
    <h1 class="text-center">Daftar Pohon</h1>
    <a href="/admin/addTree" class="btn btn-green mb-3">Tambah Pohon</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($trees as $tree): ?>
                <tr>
                    <td><?= $tree['name'] ?></td>
                    <td><?= $tree['description'] ?></td>
                    <td>Rp<?= number_format($tree['price'], 2) ?></td>
                    <td><img src="/public/images/<?= $tree['image'] ?>" alt="<?= $tree['name'] ?>" style="width: 100px;"></td>
                    <td>
                        <a href="/admin/edit_tree/<?= $tree['id'] ?>" class="btn btn-warning">Edit</a>
                        <a href="/admin/delete_tree/<?= $tree['id'] ?>" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->endSection() ?>
