
<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

    <div class="container mt-5 col-5">
        <div class="card">
            <div class="class-header bg-primary text-white">
                Login
            </div>
            <div class="card-body">

                    <div class="mb-3">
                        <label for="inputUsername" class="form-label"> Username </label>
                        <input type="text" name="member_username" class="form-control" id="inputUsername">
                    </div>
                    <div class="mb-3">
                        <label for="inputPassword" class="form-label"> Password </label>
                        <input type="password" name="member_password" class="form-control" id="inputPassword">
                    </div>
                    <div class="mb-3">
                        <input type="submit" name="login" class="btn btn-primary" value="Login">
                    </div>

            </div>
        </div>
    </div>

<?= $this->endSection('content'); ?>
