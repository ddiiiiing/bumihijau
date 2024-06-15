<!-- File: app/Views/info/trees.php -->

<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<div class="container mt-5">
    <h2 class="text-center">Pilihan Pohon</h2>
    <div class="row">
        <?php foreach ($trees as $tree): ?>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title"><?= $tree['name'] ?></h5>
                        <p class="card-text"><?= $tree['description'] ?></p>
                        <p class="card-text">Rp<?= number_format($tree['price'], 2) ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<?= $this->endSection() ?>
