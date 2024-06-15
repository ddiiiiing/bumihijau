<!-- File: app/Views/admin/edit_tree.php -->

<?= $this->extend('layouts/admin') ?>

<?= $this->section('content') ?>
<div class="container mt-5">
    <h1 class="text-center">Edit Pohon</h1>
    <form action="/admin/update_tree/<?= $tree['id'] ?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="name">Nama Pohon:</label>
            <input type="text" id="name" name="name" class="form-control" value="<?= $tree['name'] ?>" required>
        </div>
        <div class="form-group">
            <label for="description">Deskripsi:</label>
            <textarea id="description" name="description" class="form-control" required><?= $tree['description'] ?></textarea>
        </div>
        <div class="form-group">
            <label for="price">Harga:</label>
            <input type="number" id="price" name="price" class="form-control" value="<?= $tree['price'] ?>" required>
        </div>
        <div class="form-group">
            <label for="image">Gambar:</label>
            <input type="file" id="image" name="image" class="form-control">
            <input type="hidden" name="old_image" value="<?= $tree['image'] ?>">
        </div>
        <button type="submit" class="btn btn-green btn-block">Update Pohon</button>
    </form>
</div>
<?= $this->endSection() ?>
