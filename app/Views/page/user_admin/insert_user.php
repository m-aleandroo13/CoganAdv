INSERT User<?= $this->extend('layout/template'); ?>

<?= $this->section('title'); ?>
Lantai Dua - Insert Barang
<?= $this->endSection(); ?>


<?= $this->section('content'); ?>

<div class="container">
    <ol class="breadcrumb my-2">
        User Data/Insert User
    </ol>
    <div class="row">
        <div class="col">
            <div class="card shadow-lg border-0 rounded-lg mb-4">
                <div class="card-header">
                    <h3 class="text-center font-weight-light my-2">Insert Data User</h3>
                </div>
                <div class="card-body mb-4">
                    <form>
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputFirstName">First Name</label>
                                    <input class="form-control py-4" name="fname" id="inputFirstName" type="text" placeholder="Enter first name" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputLastName">Last Name</label>
                                    <input class="form-control py-4" name="lname" id="inputLastName" type="text" placeholder="Enter last name" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="small mb-1" for="inputEmailAddress">Email</label>
                            <input class="form-control py-4" name="email" id="inputEmailAddress" type="email" aria-describedby="emailHelp" placeholder="Enter email address" />
                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputPassword">Password</label>
                                    <input class="form-control py-4" id="inputPassword" type="password" placeholder="Enter password" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputConfirmPassword">Confirm Password</label>
                                    <input class="form-control py-4" id="inputConfirmPassword" type="password" placeholder="Confirm password" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-4 mb-0"><a class="btn btn-primary btn-block" href="login.html">Create Account</a></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>