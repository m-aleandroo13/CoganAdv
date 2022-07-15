<?= $this->extend('layout/template'); ?>

<?= $this->section('title'); ?>
Lantai Dua - List Supplier
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>

<div class="container">
    <ol class="breadcrumb my-2">
        <li class="breadcrumb-item active">Data/Supplier/List Supplier</li>
    </ol>
    <form action="<?= base_url('supplier/hal_tambah_supplier'); ?>">
        <?= csrf_field(); ?>
        <div class="form-group mt-4 mb-4"><button type="submit" class="btn btn-success">Tambah Supplier</button></div>
    </form>
    <div class="row">
        <div class="col">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-dark" id="dataTable">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Supplier</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">No. Telp</th>
                                <th scope="col">Email</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($supplier as $s) :
                            ?>
                                <tr class='clickable-row' onclick="window.location='<?= '/supplier/detail/' . $s['id_supplier']; ?>';">
                                    <th scope="row"><?= $i; ?></th>
                                    <td><?= $s['nama_supplier']; ?></td>
                                    <td><?= $s['alamat_supplier']; ?></td>
                                    <td><?= $s['telp_supplier']; ?></td>
                                    <td><?= $s['email_supplier']; ?></td>

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