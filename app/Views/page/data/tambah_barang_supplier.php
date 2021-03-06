<?= $this->extend('layout/template'); ?>

<?= $this->section('title'); ?>
Cogan Cafe - Insert Barang Supplier
<?= $this->endSection(); ?>


<?= $this->section('content'); ?>

<div class="container">
    <ol class="breadcrumb my-2">
        Insert Barang Supplier <?= $supplier['nama_supplier']; ?>
    </ol>
    <a class="btn btn-danger" href="<?= base_url('/supplier/detail/' . $supplier['id_supplier']); ?>">Back</a>
    <div class="row">
        <div class="col">
            <div class="card shadow-lg border-0 rounded-lg mb-4 ">
                <div class="card-header">
                    <h3 class="text-center font-weight-light my-2">Insert Data Barang Supplier <b><?= $supplier['nama_supplier']; ?></b></h3>
                </div>
                <div class="card-body mb-4">
                    <form action="<?= base_url('supplier/insert_barang_supplier/') ?>">
                        <?= csrf_field(); ?>
                        <div class="form-group">
                            <label class="small mb-1" for="inputNamaBarang">Nama Barang</label>
                            <select class="custom-select" name="id_barang" id="id_barang">
                                <option value="">Pilih Barang</option>
                                <?php foreach ($barang as $b) : ?>
                                    <option value="<?= $b['id_barang']; ?>"><?= $b['nama_barang']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="small mb-1" for="inputHargaBarang">Harga</label>
                            <input type="text" class="form-control" name="harga_barang" id="rupiah" placeholder="Enter harga barang">
                            <input type="hidden" class="form-control" name="id_supplier" value="<?= $supplier['id_supplier']; ?>">
                        </div>
                        <div class="form-group">
                            <label class="small mb-1" for="inputLinkBarang">Link Pembelian Barang</label>
                            <input class="form-control" name="link_barang" id="inputlinkBarang" type="text" placeholder="Enter link pembelian barang" />
                        </div>
                        <div class="form-group mt-4 mb-0"><button class="btn btn-primary btn-block">Insert</a></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    var rupiah = document.getElementById('rupiah');
    rupiah.addEventListener('keyup', function(e) {
        // tambahkan 'Rp.' pada saat form di ketik
        // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
        rupiah.value = formatRupiah(this.value, 'Rp. ');
    });

    /* Fungsi formatRupiah */
    function formatRupiah(angka, prefix) {
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
            split = number_string.split(','),
            sisa = split[0].length % 3,
            rupiah = split[0].substr(0, sisa),
            ribuan = split[0].substr(sisa).match(/\d{3}/gi);

        // tambahkan titik jika yang di input sudah menjadi angka ribuan
        if (ribuan) {
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }

        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
    }
</script>

<?= $this->endSection(); ?>