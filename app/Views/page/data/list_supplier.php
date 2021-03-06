<?= $this->extend('layout/template'); ?>

<?= $this->section('title'); ?>
Cogan Cafe - List Supplier
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>

<div class="container">
    <ol class="breadcrumb my-2">
        <li class="breadcrumb-item active">Data/Supplier/List Supplier</li>
    </ol>
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
                                <th scope="col">Catalog</th>
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
                                    <td><a href="<?= $s['link_catalog_supplier']; ?>"><?= $s['link_catalog_supplier']; ?></a></td>
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