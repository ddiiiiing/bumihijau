<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3000"> <!-- Set data-interval to customize autoplay speed -->
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="/images/slide1.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="/images/slide2.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="/images/slide3.jpg" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    <div class="carousel-caption d-none d-md-block">
        <h1>BumiHijau</h1>
        <p>Tanamkan harapan tumbuhkan kehidupan</p>
    </div>
</div>

<div class="container mt-5">
    <h2 class="text-center">Pohon</h2>
    <div class="row">
        <?php foreach ($trees as $tree): ?>
            <div class="col-md-4 d-flex align-items-stretch">
                <div class="card mb-4 shadow-sm w-100">
                    <img class="card-img-top" src="/public/images/<?= $tree['image'] ?>" alt="<?= $tree['name'] ?>">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title"><?= $tree['name'] ?></h5>
                        <p class="card-text flex-grow-1"><?= $tree['description'] ?></p>
                        <p class="card-text">Rp<?= number_format($tree['price'], 2) ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<div class="container mt-5">
    <h2 class="text-center">Lokasi Penanaman</h2>
    <div class="row">
        <?php foreach ($locations as $location): ?>
            <div class="col-md-4 d-flex">
                <div class="card mb-4 shadow-sm">
                    <img class="card-img-top" src="/public/images/<?= $location['image'] ?>" alt="<?= $location['name'] ?>">
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

<script>
$(document).ready(function(){
    $('#carouselExampleIndicators').carousel({
        interval: 1500, // Change this value to customize the autoplay interval
        ride: 'carousel'
    });
});
</script>
