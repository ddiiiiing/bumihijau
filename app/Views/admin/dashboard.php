<!-- File: app/Views/admin/dashboard.php -->

<?= $this->extend('layouts/admin') ?>

<?= $this->section('content') ?>
<div class="container mt-5">
    <h1 class="text-center">Admin Dashboard</h1>
    <div class="row">
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Tambah Pohon</h5>
                    <p class="card-text">Tambahkan pohon baru ke dalam database.</p>
                    <a href="/admin/add_tree" class="btn btn-green btn-block">Tambah Pohon</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Tambah Lokasi</h5>
                    <p class="card-text">Tambahkan lokasi penanaman baru ke dalam database.</p>
                    <a href="/admin/add_location" class="btn btn-green btn-block">Tambah Lokasi</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Lihat Donasi</h5>
                    <p class="card-text">Lihat semua data donasi.</p>
                    <a href="/admin/donations" class="btn btn-green btn-block">Lihat Donasi</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
