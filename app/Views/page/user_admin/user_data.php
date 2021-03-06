<?= $this->extend('layout/template'); ?>

<?= $this->section('title'); ?>
Cogan Cafe - User Data
<?= $this->endSection(); ?>

<?= $this->section('userlogin'); ?>
<?= $login_sess; ?>
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>

<div class="container">
    <ol class="breadcrumb my-2">
        <li class="breadcrumb-item active">User Data</li>
    </ol>
    <a class="btn btn-primary" href="<?= base_url('/admin/hal_insert_user') ?>">Tambah User</a>
    <div class="row">
        <div class="col">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-dark" id="dataTable">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Username</th>
                                <th scope="col">Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($user as $u) :
                            ?>
                                <tr>
                                    <th scope="row"><?= $i; ?></th>
                                    <td><?= $u['nama']; ?></td>
                                    <td><?= $u['username']; ?></td>
                                    <td><?= $u['email']; ?></td>
                                </tr>
                            <?php
                                $i++;
                            endforeach;
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>