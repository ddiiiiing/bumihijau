<!-- File: app/Views/admin/add_location.php -->

<?= $this->extend('layouts/admin') ?>

<?= $this->section('content') ?>
<div class="container mt-5">
    <h1 class="text-center">Tambah Lokasi</h1>
    <form action="/admin/storeLocation" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="name">Nama Lokasi:</label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="description">Deskripsi:</label>
            <textarea id="description" name="description" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label for="price_multiplier">Pengali Harga:</label>
            <input type="number" step="0.01" id="price_multiplier" name="price_multiplier" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="image">Gambar:</label>
            <input type="file" id="image" name="image" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-green btn-block">Tambah Lokasi</button>
    </form>
</div>
<?= $this->endSection() ?>
