<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<div class="row justify-content-center">
    <div class="col-md-8">
        <h1 class="text-center">Donasi Pohon</h1>
        <form id="donationForm" action="/donation/store" method="post">
            <div class="form-group">
                <label for="tree_id">Pilih Pohon:</label>
                <select id="tree_id" name="tree_id" class="form-control" required>
                    <?php foreach ($trees as $tree): ?>
                        <option value="<?= $tree['id'] ?>"><?= $tree['name'] ?> - Rp<?= number_format($tree['price'], 2) ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="location_id">Pilih Lokasi:</label>
                <select id="location_id" name="location_id" class="form-control" required>
                    <?php foreach ($locations as $location): ?>
                        <option value="<?= $location['id'] ?>"><?= $location['name'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="quantity">Jumlah Pohon:</label>
                <input type="number" id="quantity" name="quantity" class="form-control" min="1" required>
            </div>
            <div class="form-group">
                <label for="amount">Total Pembayaran:</label>
                <input type="number" id="amount" name="amount" class="form-control" required readonly>
            </div>
            <div class="form-group">
                <label for="payment_method">Metode Pembayaran:</label>
                <select id="payment_method" name="payment_method" class="form-control" required>
                    <option value="OVO">OVO</option>
                    <option value="Gopay">Gopay</option>
                    <option value="Dana">Dana</option>
                    <option value="Transfer Manual">Transfer Manual</option>
                </select>
            </div>
            <button type="submit" class="btn btn-green btn-block">Donasi</button>
        </form>
        <div id="totalPrice" class="text-center mt-3"></div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
$(document).ready(function() {
    function calculateTotal() {
        const treeId = $('#tree_id').val();
        const locationId = $('#location_id').val();
        const quantity = $('#quantity').val();

        if (treeId && locationId && quantity) {
            $.post('/donation/calculateTotal', {
                tree_id: treeId,
                location_id: locationId,
                quantity: quantity
            }, function(response) {
                $('#amount').val(response.totalPrice);
                $('#totalPrice').text('Total Biaya Donasi: Rp' + response.totalPrice.toFixed(2));
            }, 'json');
        }
    }

    $('#tree_id, #location_id, #quantity').change(function() {
        calculateTotal();
    });

    calculateTotal();
});
</script>
<?= $this->endSection() ?>
