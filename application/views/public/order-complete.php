<section class="wrapper">

<div class="container">
    <div class="row" style="margin-top: 30px; margin-bottom: 30px">
        <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="proced-1" style="margin-top: 30px;">
                <a class="next-1" href="<?php echo base_url('wishlist')?>">
                    <h1 style="color: black;" class="proced-1">01</h1>
                    <h4 style="color: black;" class="shop-1">Keranjang Belanja</h4>
                    <p style="color: black;" class="item-1">Kelola daftar item Anda.</p>
                </a>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="procces-II" style="margin-top: 30px;">
                <a class="next-2" href="<?php echo base_url('checkout')?>">
                    <h1 style="color: black;" class="procces-II">02</h1>
                    <h4 style="color: black;" class="shop-2">Detail Checkout</h4>
                    <p style="color: black;" class="item-2">Periksa daftar item Anda.</p>
                </a>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="procces-3" style="margin-top: 30px;">
            <a class="next-3" href="<?php echo base_url('order-complete')?>">
                <h1 style="color: black;" class="proced-3">03</h1>
                <h4 style="color: black;" class="shop-3">Pesanan Selesai</h4>
                <p style="color: black;" class="item-3">Tinjau dan Kirim Pesanan Anda.</p>
            </a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row-1">
            <div class="col-sm">
                <div class="p" style="color: #5cb85c; font-size: 20px">Terima Kasih. Pesanan Anda Akan Kami Proses Setelah Anda Mengirimkan Bukti Pembayaran di Bawah</div>
                <br>
                <ul>
                    <li class="order">Nomor Order : <strong>7202</strong> </li>
                    <li class="date">Tanggal : <strong>30 Juli 2020</strong> </li>
                    <li class="total-3">Jumlah : <strong>Rp. 24,013,000</strong> </li>
                    <li class="payment">Metode Pembayaran : <strong>Pembayaran Via Transfer Bank</strong></li>
                    <li class="payment">Silahkan Transfer ke Nomor Rekening Ini : <strong>Hira Karya Abadi</strong> / <strong>4412 2212 1298</strong></li>
                </ul>
            </div>
        </div>
    </div>
   <div class="container">
    <p class="order-detail-p"> <strong>Detail Pesanan</strong> </p>
    <table class="order-detail" border="1" cellpadding="8" style="width:100%">
        <tr>
            <td> <strong>PRODUK</strong> </td>
            <td> <strong>JUMLAH</strong></td>
        </tr>
        <tr>
            <td>Merbau - 1 Meter³ (210-390 x 11 x 7) × 2</td>
            <td> <strong>Rp12,000,000</strong> </td>
        </tr>
        <tr>
            <td> <strong>SUBTOTAL:</strong> </td>
            <td> <strong>Rp24,000,000</strong> </td>
        </tr>
        <tr>
            <td> <strong>JNE:</strong> </td>
            <td> <strong>Rp13,000</strong> </td>
        </tr>
        <tr>
            <td> <strong>METODE PEMBAYARAN:</strong> </td>
            <td>  <strong>Transfer bank</strong> </td>
        </tr>
        <tr>
            <td> <strong style="color: black">JUMLAH YANG HARUS DI BAYAR:</strong> </td>
            <td> <strong style="color: black">Rp24,013,000</strong> </td>
        </tr>
    </table>
    <form role="form" action="transfer.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label>Unggah Bukti Transfer</label>
            <div>
                <input type="file" name="gambar" class="form-control" required>
            </div>
        </div>

        <div class="form-group">
            <div>
                <button type="submit" name="bayar" class="btn btn-default btn-primary">konfirmasi</button>
            </div>
        </form>
</div>
</div>
<div class="container" style="margin-bottom: 30px">
    
</div>

</section>