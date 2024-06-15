<!-- File: app/Views/info/locations.php -->

<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<div class="container mt-5">
    <h2 class="text-center">Pilihan Lokasi Penanaman</h2>
    <div class="row">
        <?php foreach ($locations as $location): ?>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="<?= $location['image'] ?>" class="card-img-top" alt="<?= $location['name'] ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= $location['name'] ?></h5>
                        <p class="card-text"><?= $location['description'] ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<?= $this->endSection() ?>
