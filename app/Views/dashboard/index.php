<!-- File: app/Views/dashboard/index.php -->

<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<div class="row justify-content-center">
    <div class="col-md-8">
        <h1 class="text-center">Dashboard</h1>
        <div class="card mt-4">
            <div class="card-body">
                <h5 class="card-title">Selamat datang, <?= session()->get('user')['username'] ?>!</h5>
                <p class="card-text">Ini adalah halaman dashboard Anda. Anda dapat melakukan tindakan berikut:</p>
                <ul>
                    <li><a href="/donations/create">Donasi Pohon</a></li>
                    <li><a href="/trees">Lihat Pohon</a></li>
                    <li><a href="/locations">Lihat Lokasi Penanaman</a></li>
                </ul>
                <a href="/logout" class="btn btn-green">Logout</a>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
