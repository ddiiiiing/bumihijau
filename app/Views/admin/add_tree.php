<!-- File: app/Views/admin/add_tree.php -->

<?= $this->extend('layouts/admin') ?>

<?= $this->section('content') ?>
<div class="container mt-5">
    <h1 class="text-center">Tambah Pohon</h1>
    <form action="/admin/storeTree" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="name">Nama Pohon:</label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="description">Deskripsi:</label>
            <textarea id="description" name="description" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label for="price">Harga:</label>
            <input type="number" id="price" name="price" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" class="form-control-file" id="image" required>
        </div>
        <button type="submit" class="btn btn-green btn-block">Tambah Pohon</button>
    </form>
</div>
<?= $this->endSection() ?>
