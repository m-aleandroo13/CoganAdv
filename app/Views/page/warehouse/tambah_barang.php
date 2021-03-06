<?= $this->extend('layout/template'); ?>

<?= $this->section('title'); ?>
Cogan Cafe - Insert Barang
<?= $this->endSection(); ?>


<?= $this->section('content'); ?>

<div class="container">
    <ol class="breadcrumb my-2">
        Warehouse/Barang/Insert Barang
    </ol>
    <div class="row">
        <div class="col">
            <div class="card shadow-lg border-0 rounded-lg mb-4">
                <div class="card-header">
                    <h3 class="text-center font-weight-light my-2">Insert Data Barang</h3>
                </div>
                <div class="card-body mb-4">
                    <form action="<?= base_url('barang/insert'); ?>">
                        <?= csrf_field(); ?>
                        <div class="form-group">
                            <label class="small mb-1" for="inputNamaBarang">Nama Barang</label>
                            <input class="form-control py-4" name="nama_barang" id="inputNamaBarang" type="text" placeholder="Enter nama barang" required />
                        </div>
                        <div class="form-group">
                            <label class="small mb-1" for="inputStockBarang">Stock</label>
                            <input class="form-control py-4" name="stock_barang" id="inputStockBarang" type="text" placeholder="Enter stock barang" />
                        </div>
                        <div class="form-group mt-4 mb-0"><button class="btn btn-primary btn-block">Insert</a></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>