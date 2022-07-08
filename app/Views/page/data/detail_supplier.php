<?= $this->extend('layout/template'); ?>

<?= $this->section('title'); ?>
Cogan Cafe - Detail Supplier
<?= $this->endSection(); ?>


<?= $this->section('content'); ?>

<div class="container">
    <a href="<?= base_url('supplier/hal_list_supplier'); ?>" class="btn btn-danger mt-2">Back</a>
    <h1 class="mt-2"><?= $supplier['nama_supplier']; ?></h1>
    <ol class="breadcrumb mb-2">
        <li class="breadcrumb-item active">Detail Supplier</li>
    </ol>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">

                    <table>
                        <tr>
                            <th>Alamat</th>
                            <td>: <?= $supplier['alamat_supplier']; ?></td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>: <?= $supplier['email_supplier']; ?></td>
                        </tr>
                        <tr>
                            <th>No. Telp</th>
                            <td>: <?= $supplier['telp_supplier']; ?></td>
                        </tr>
                        <tr>
                            <th>Link Catalog:</th>
                            <td>: <a href="<?= $supplier['link_catalog_supplier']; ?>"> <?= $supplier['link_catalog_supplier']; ?> </a></td>
                        </tr>
                    </table>
                </div>
            </div>
            <ol class="breadcrumb my-2">
                <li class="breadcrumb-item active">Barang</li>
            </ol>
            <div class="table-responsive">
                <a class="btn btn-primary mb-2" href="<?= base_url('supplier/hal_tambah_barang_supplier'); ?>/<?= $supplier['id_supplier']; ?>"> Insert Barang</a>
                <table id="table-datatables" class="table table-dark">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Barang</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Link Barang</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($barang_supplier as $bs) :
                            $short_link = (strlen($bs['link_barang']) > 30) ? substr($bs['link_barang'], 0, 30) . '...' : $bs['link_barang'];
                        ?>
                            <tr>
                                <th scope="row"></th>
                                <td><?= $bs['nama_barang']; ?></td>
                                <td><?= $bs['harga_barang']; ?></td>
                                <td style="text-overflow: ellipsis;"><a href="<?= $bs['link_barang']; ?>"><?= $short_link; ?></a></td>
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

<?= $this->endSection(); ?>