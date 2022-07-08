<?= $this->extend('layout/template'); ?>

<?= $this->section('title'); ?>
Cogan Cafe - Pembelian
<?= $this->endSection(); ?>


<?= $this->section('content'); ?>

<div class="container">
    <ol class="breadcrumb my-2">
        Transaksi/Pembelian
    </ol>
    <div class="row">
        <div class="col">
            <div class="card mb-3">
                <div class="card-body">
                    <h2>Beli Barang</h2>
                    <form action="<?= base_url('pembelian/insert_cart_pembelian'); ?>">
                        <?= csrf_field(); ?>
                        <div class="form-group">
                            <label class="small mb-1" for="inputNamaBarang">Supplier</label>
                            <select class="custom-select" name="id_supplier" id="supplier" onchange="displayDivDemo('barang', this)">
                                <option value="">Pilih Supplier</option>
                                <?php foreach ($supplier as $s) : ?>
                                    <option value="<?= $s['id_supplier']; ?>"><?= $s['nama_supplier']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div id="barang">
                            <div class="form-group">
                                <label class="small mb-1" for="inputNamaBarang">Nama Barang</label>
                                <select class="custom-select" name="id_barang">
                                    <option value="">Pilih Barang</option>
                                    <?php foreach ($barang as $p) : ?>
                                        <option value="<?= $p['id_barang']; ?>"><?= $p['nama_barang']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="small mb-1" for="inputJumlahpembelian">Jumlah</label>
                                <input type="number" class="form-control" name="jumlah" id="jumlah" placeholder="Jumlah Barang">
                            </div>
                            <input id="idSupp" type="text">
                        </div>

                        <button type="submit" class="btn btn-success">Add Cart</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card mb-3">
                <div class="card-body">
                    <h2>Cart pembelian</h2>
                    <form action="<?= base_url('pembelian/insert_pembelian'); ?>" action="post">
                        <?= csrf_field(); ?>
                        <input type="date" name="tgl" class="form-control mb-3" style="width: 200px; float: right;" required>

                        <table id="table-datatables" class="table table-dark">
                            <thead>
                                <tr>
                                    <th>Nama Barang</th>
                                    <th>Jumlah Barang</th>
                                    <th>Total</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $total_cost = 0;
                                foreach ($cart_pembelian as $cp) {
                                    foreach ($barang as $p2) {
                                        if ($cp['id_barang'] == $p2['id_barang']) {
                                ?>
                                            <tr>
                                                <td>
                                                    <?= $p2['nama_barang']; ?>
                                                    <input type="hidden" name="id_barang" value="<?= $cp['id_barang']; ?>">
                                                </td>
                                                <td><?= $cp['jumlah']; ?>
                                                    <input type="hidden" name="jumlah_pembelian" value="<?= $cp['jumlah']; ?>">
                                                </td>
                                                <td><?= "Rp. " . $total_harga = $cp['jumlah'] * $p2['harga_barang']; ?></td>
                                                <td>
                                                    <a class="btn btn-danger" href="<?= base_url('pembelian/delete_cart') . '/' . $cp['id_cart_pj'] ?>">Delete</a>
                                                </td>
                                            </tr>
                            </tbody>
                <?php
                                            $total_cost += $total_harga;
                                        }
                                    }
                                }
                ?>
                <tr>
                    <td colspan="2">Total Pembayaran</td>
                    <td>: <?= "Rp. " . $total_cost; ?></td>
                </tr>
                        </table>
                        <button type="submit" class="btn btn-success">Input Laporan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        function displayDivDemo(id, elementValue) {
            document.getElementById(id).style.display = "block";
            document.getElementById("idSupp").value = elementValue.value;
        }
    </script>
    <script>
        // Get the modal
        var modal = $('#modalDialog');

        // Get the button that opens the modal
        var btn = $("#mbtn");

        // Get the <span> element that closes the modal
        var span = $(".close");

        $(document).ready(function() {
            // When the user clicks the button, open the modal 
            btn.on('click', function() {
                modal.show();
            });

            // When the user clicks on <span> (x), close the modal
            span.on('click', function() {
                modal.hide();
            });
        });

        // When the user clicks anywhere outside of the modal, close it
        $('body').bind('click', function(e) {
            if ($(e.target).hasClass("modal")) {
                modal.hide();
            }
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#contactFrm').submit(function(e) {
                e.preventDefault();
                $('.modal-body').css('opacity', '0.5');
                $('.btn').prop('disabled', true);

                $form = $(this);
                $.ajax({
                    type: "POST",
                    url: 'ajax_submit.php',
                    data: 'contact_submit=1&' + $form.serialize(),
                    dataType: 'json',
                    success: function(response) {
                        if (response.status == 1) {
                            $('#contactFrm')[0].reset();
                            $('.response').html('<div class="alert alert-success">' + response.message + '</div>');
                        } else {
                            $('.response').html('<div class="alert alert-danger">' + response.message + '</div>');
                        }
                        $('.modal-body').css('opacity', '');
                        $('.btn').prop('disabled', false);
                    }
                });
            });
        });
    </script>
    <style>
        @media print {

            html,
            body * {
                visibility: hidden;
                align-content: center;
            }

            #section-to-print,
            #section-to-print * {
                visibility: visible;
            }

            #section-to-print {
                display: block;
                margin-left: auto;
                margin-right: auto;
            }
        }

        @page {
            size: auto;
            size: A5;
            margin: 0mm;
        }

        #barang {
            display: none;
        }
    </style>
</div>

<?= $this->endSection(); ?>