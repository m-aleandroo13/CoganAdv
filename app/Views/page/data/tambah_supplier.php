<?= $this->extend('layout/template'); ?>

<?= $this->section('title'); ?>
Cogan Cafe - Insert Supplier
<?= $this->endSection(); ?>


<?= $this->section('content'); ?>

<div class="container">
    <ol class="breadcrumb my-2">
        Data/Supplier/Insert Supplier
    </ol>
    <div class="row">
        <div class="col">
            <div class="card shadow-lg border-0 rounded-lg mb-4">
                <div class="card-header">
                    <h3 class="text-center font-weight-light my-2">Insert Data Supplier</h3>
                </div>
                <div class="card-body mb-4">
                    <form action="<?= base_url('supplier/insert'); ?>">
                        <?= csrf_field(); ?>
                        <div class="form-group">
                            <label class="small mb-1" for="inputNamaSupplier">Nama Supplier</label>
                            <input class="form-control py-4" name="nama_supplier" id="inputNamaSupplier" type="text" placeholder="Enter nama supplier" required />
                        </div>
                        <div class="form-group">
                            <label class="small mb-1" for="inputEmailAddress">Email</label>
                            <input class="form-control py-4" name="email_supplier" id="inputEmailAddress" type="email" aria-describedby="emailHelp" placeholder="Enter email address" />
                        </div>
                        <div class="form-group">
                            <label class="small mb-1" for="inputAlamatSupplier">Alamat</label>
                            <input class="form-control py-4" name="alamat_supplier" id="inputAlamatSupplier" type="text" placeholder="Enter alamat" />
                        </div>
                        <div class="form-group">
                            <label class="small mb-1" for="inputNoTelp">No. Telpon</label>
                            <input class="form-control py-4" name="telp_supplier" id="inputNoTelpSupplier" type="number" placeholder="Enter nomor telpon" />
                        </div>
                        <div class="form-group">
                            <label class="small mb-1" for="inputLinkCatalog">Link Catalog</label>
                            <input class="form-control py-4" name="link_catalog_supplier" id="inputLinkCatalogSupplier" type="text" placeholder="Enter link catalog" />
                        </div>
                        <div class="form-group mt-4 mb-0"><button class="btn btn-primary btn-block">Insert</a></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>