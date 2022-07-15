<?= $this->extend('layout/template'); ?>

<?= $this->section('title'); ?>
Lantai Dua - Edit Data Supplier
<?= $this->endSection(); ?>


<?= $this->section('content'); ?>

<div class="container">
    <ol class="breadcrumb my-2">
        Data/Supplier/Edit Data Supplier
    </ol>
    <div class="row">
        <div class="col">
            <div class="card shadow-lg border-0 rounded-lg mb-4">
                <div class="card-header">
                    <h3 class="text-center font-weight-light my-2">Edit Data Supplier</h3>
                    <a href="<?= base_url('supplier/detail_supplier/' . $supplier['id_supplier']); ?>" class="btn btn-danger mt-2">Batal</a>
                </div>
                <div class="card-body mb-4">
                    <form action="<?= base_url('supplier/edit'); ?>" method="POST">
                        <?= csrf_field(); ?>
                        <input name="id_supplier" type="hidden" value="<?= $supplier['id_supplier']; ?>">
                        <div class="form-group">
                            <label class="small mb-1" for="inputNamaSupplier">Nama Supplier</label>
                            <input class="form-control py-4" name="nama_supplier" id="inputNamaSupplier" type="text" value="<?= $supplier['nama_supplier']; ?>" required />
                        </div>
                        <div class="form-group">
                            <label class="small mb-1" for="inputEmailAddress">Email</label>
                            <input class="form-control py-4" name="email_supplier" id="inputEmailAddress" type="email" aria-describedby="emailHelp" value="<?= $supplier['email_supplier']; ?>" />
                        </div>
                        <div class="form-group">
                            <label class="small mb-1" for="inputAlamatSupplier">Alamat</label>
                            <input class="form-control py-4" name="alamat_supplier" id="inputAlamatSupplier" type="text" value="<?= $supplier['alamat_supplier']; ?>" required />
                        </div>
                        <div class="form-group">
                            <label class="small mb-1" for="inputNoTelp">No. Telpon</label>
                            <input class="form-control py-4" name="telp_supplier" id="inputNoTelpSupplier" type="number" value="<?= $supplier['telp_supplier']; ?>" />
                        </div>

                        <div class="form-group mt-4 mb-0"><button class="btn btn-primary btn-block">Save</a></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>