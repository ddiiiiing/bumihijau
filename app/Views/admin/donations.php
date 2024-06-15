<!-- File: app/Views/admin/donations.php -->

<?= $this->extend('layouts/admin') ?>

<?= $this->section('content') ?>
<div class="container mt-5">
    <h1 class="text-center">Data Donasi</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Pengguna</th>
                <th>Pohon</th>
                <th>Lokasi</th>
                <th>Jumlah</th>
                <th>Total Pembayaran</th>
                <th>Metode Pembayaran</th>
                <th>Tanggal</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($donations as $donation): ?>
                <tr>
                    <td><?= $donation['id'] ?></td>
                    <td><?= $donation['user_id'] ?></td>
                    <td><?= $donation['tree_id'] ?></td>
                    <td><?= $donation['location_id'] ?></td>
                    <td><?= $donation['quantity'] ?></td>
                    <td>Rp<?= number_format($donation['amount'], 2) ?></td>
                    <td><?= $donation['payment_method'] ?></td>
                    <td><?= $donation['created_at'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->endSection() ?>
