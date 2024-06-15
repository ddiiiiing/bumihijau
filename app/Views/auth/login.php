<!-- File: app/Views/auth/login.php -->

<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<div class="row justify-content-center">
    <div class="col-md-6">
        <h1 class="text-center">Login</h1>
        <form action="/auth/doLogin" method="post">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-green btn-block">Login</button>
        </form>
    </div>
</div>
<?= $this->endSection() ?>
