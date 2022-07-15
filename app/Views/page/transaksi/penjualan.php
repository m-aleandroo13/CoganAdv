<?= $this->extend('layout/template'); ?>

<?= $this->section('title'); ?>
Lantai Dua - Penjualan
<?= $this->endSection(); ?>


<?= $this->section('content'); ?>

<div class="container">
    <ol class="breadcrumb my-2">
        Transaksi/Penjualan
    </ol>
    <div class="row">
        <div class="col">
            <div class="card mb-3">
                <div class="card-body">
                    <h2>Input Produk Terjual</h2>
                    <form action="<?= base_url('penjualan/insert_cart_penjualan'); ?>">
                        <?= csrf_field(); ?>
                        <div class="form-group">
                            <label class="small mb-1" for="inputNamaProduk">Nama Produk</label>
                            <select class="custom-select" name="id_produk" id="id_produk">
                                <option value="">Pilih Produk</option>
                                <?php foreach ($produk as $p) : ?>
                                    <option value="<?= $p['id_produk']; ?>"><?= $p['nama_produk']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="small mb-1" for="inputJumlahPenjualan">Jumlah</label>
                            <input type="number" class="form-control" name="jumlah" placeholder="Jumlah Produk">
                        </div>
                        <button type="submit" class="btn btn-success">Add Cart</button>
                    </form>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-body">
                    <h2>Cart Penjualan</h2>
                    <form action="<?= base_url('penjualan/insert_penjualan'); ?>" action="post">
                        <?= csrf_field(); ?>
                        <input type="date" name="tgl" class="form-control mb-3" style="width: 200px; float: right;" required>
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th>Nama Barang</th>
                                    <th>Jumlah Produk</th>
                                    <th>Total</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $total_cost = 0;
                                foreach ($cart_penjualan as $cp) {
                                    foreach ($produk as $p2) {
                                        if ($cp['id_produk'] == $p2['id_produk']) {
                                ?>
                                            <tr>
                                                <td>
                                                    <?= $p2['nama_produk']; ?>
                                                    <input type="hidden" name="id_produk" value="<?= $cp['id_produk']; ?>">
                                                </td>
                                                <td><?= $cp['jumlah']; ?>
                                                    <input type="hidden" name="jumlah_penjualan" value="<?= $cp['jumlah']; ?>">
                                                </td>
                                                <td><?= "Rp. " . $total_harga = $cp['jumlah'] * $p2['harga_produk']; ?></td>
                                                <td>
                                                    <a class="btn btn-danger" href="<?= base_url('penjualan/delete_cart') . '/' . $cp['id_cart_pj'] ?>">Delete</a>
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
                        <button type="submit" class="btn btn-success">Check Out</button>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            Print
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Faktur Penjualan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="section-to-print">
                        <div class="card" style="padding: 25px;">
                            <div class="row no-gutters">
                                <div class="col-auto">
                                    <img src="<?php echo base_url('images/LT2.jpg'); ?>" style="width:90px;" class="img-fluid" alt="">
                                </div>
                                <div class="col">
                                    <div class="card-block px-2">
                                        <div class="row">
                                            <div class="col-8">
                                                <h2 class="card-title">Lantai Dua Coffe&Resto</h4>
                                                    <p class="card-text" style="font-size: 10px;"> Alamat: Jl. Raja Kecik, Kp. Dalam, Kec. Siak, Kabupaten Siak, Riau 28773</p>
                                                    <p class="card-text" style="font-size: 10px;"> No Hp: 081261828088</p>
                                            </div>
                                            <div class="col-4">
                                                <p class="card-text" style="font-size: 10px;"> Nama : ...................</p>
                                                <p class="card-text" style="font-size: 10px;"> No Hp: ...................</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <Center>
                            <h3 style="margin-bottom: 25px;">Lantai Dua Coffe & Resto</h3>
                        </Center>
                        <table id=" table-datatables" class="table table-bordered table-dark">
                            <thead>
                                <tr>
                                    <th>Nama Barang</th>
                                    <th>Jumlah Produk</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $total_cost = 0;
                                foreach ($cart_penjualan as $cp) {
                                    foreach ($produk as $p2) {
                                        if ($cp['id_produk'] == $p2['id_produk']) {
                                ?>
                                            <tr>
                                                <td>
                                                    <?= $p2['nama_produk']; ?>
                                                    <input type="hidden" name="id_produk" value="<?= $cp['id_produk']; ?>">
                                                </td>
                                                <td><?= $cp['jumlah']; ?>
                                                    <input type="hidden" name="jumlah_penjualan" value="<?= $cp['jumlah']; ?>">
                                                </td>
                                                <td><?= "Rp. " . $total_harga = $cp['jumlah'] * $p2['harga_produk']; ?></td>
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
                        <br />
                        <p id="date"></p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="window.print();"><i class="fas fa-solid fa-print"></i></button>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.getElementById("date").innerHTML = Date('d M Y');
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
    </style>
</div>

<?= $this->endSection(); ?>
<script>
    let generete = {
        count: Math.round((Math.pow(36, length + 1) - Math.random() * Math.pow(36, length))).toString(36).slice(1)
    }
</script>