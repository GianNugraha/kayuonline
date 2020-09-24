<?php 
foreach ($total_biaya as $total): 
   $jumlah_bayar = $total->total;
   // echo $jumlah_bayar; die();
endforeach;
// foreach ($order as $key): 
//     echo "<pre>";
//     print_r($key);
//     echo "</pre>";
// endforeach;
 ?>
 <section class="wrapper">

<div class="container">
    <div class="row" style="margin-top: 30px; margin-bottom: 30px">
        <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="proced-1">
                <a class="next-1" href="<?php echo base_url('wishlist')?>">
                    <h1 style="color: black;" class="proced-1">01</h1>
                    <h4 style="color: black;" class="shop-1">Keranjang Belanja</h4>
                    <p style="color: black" class="item-1">Kelola daftar item Anda.</p>
                </a>
            </div>

        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="procces-II">
                <a class="next-2" href="<?php echo base_url('checkout')?>">
                    <h1 style="color: black; font-size: 3.5rem;">02</h1>
                    <h4 style="color: black;" class="shop-2">Detail Pembayaran</h4>
                    <p style="color: black;" class="item-2">Periksa daftar item Anda.</p>
                </a>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
            <a class="next-3" href="<?php echo base_url('order-complete')?>">
                <h1 class="proced-3">03</h1>
                <h4 class="shop-3">Pesanan Selesai</h4>
                <p class="item-3">Tinjau dan Kirim Pesanan Anda.</p>
            </a>
        </div>
    </div>
    <div class="row" style="margin-left:0;margin-right:0;">
      <div class="col-md-7">
        <form action="<?= base_url('order-complete') ?>" method="post">
          <div class="header">
            <h3>RINCIAN PENAGIHAN</h3>
          </div>
          <hr style="border:1px solid black">

          <div class="form-group">
            <label for="name">Nama Lengkap <span title="required" style="color:red" >*</span></label>
            <input type="text" name="nama" value="<?= $this->session->userdata('namaUser') ?>" class="form-control" placeholder="Nama Lengkap" required>
          </div>

          <div class="form-group">
           <label for="exampleInputEmail1">Alamat Pengiriman <span title="required" style="color:red" >*</span></label>
           <input type="text" name="tempat" class="form-control" placeholder="Alamat" required>
         </div>

         <div class="form-group">
           <label >Kode Pos<span title="required" style="color:red" >*</span></label>
           <input type="text" name="pastcode" class="form-control" placeholder="Kode Pos" required>
         </div>

         <div class="form-group">
           <label >Kabupaten / Kota<span title="required" style="color:red" >*</span></label>
           <input type="text" name="kota" class="form-control" placeholder="Kabupaten / Kota" required>
         </div>
         <div class="form-group">
           <label >Kontak <span title="required" style="color:red" >*</span></label>
           <input type="text" name="phone" class="form-control" value="<?= $this->session->userdata('no_hp')?>" placeholder="+6281295701234" required>
         </div>
         <div class="form-group">
           <label >Email <span title="required" style="color:red" >*</span></label>
           <input for="exampleInputEmail1" type="email" name="email" value="<?=$this->session->userdata('email')?>" class="form-control" placeholder="Contoh@Email.com" required>
         </div>
         <div class="form-group">
          <label>Pesan Ke Pengirim (optional)</label>
          <textarea name="alamat" cols="50" rows="3" name="alamat" class="form-control" placeholder="Mas/Mbak .. Jika barang sudah sampai mohon telepon saya terlebih dahulu" ></textarea>
        </div>
    </div>

    <div class="col-md-5" style="border-style: ridge">
      <div class="header">
        <h3>PESANAN ANDA</h3>
      </div>
      <hr style="border:1px solid black">
      <!-- <form action="procces_checkout.html" method="post"> -->
        <!-- <form action="ordercomplete.html" method="post"> -->
          <div class="row">
            <div class="col-md-6">
              <div class="header">
                <h5><b>PRODUK</b></h5>
              </div>
            </div>
            <div class="col-md-6">
              <div class="header">
                <h5 style="text-align: right"><b>SUBTOTAL</b></h5>
              </div>
            </div>
          </div>
          <?php foreach ($order as $key) { ?>
            <div class="row">
              <div class="col-md-6">
                <p><?= $key['nama_product']; ?> (<?= $key['ukuran'] ?>) <b>x <?=  $key['jumlah'] ?></b></p>
              </div>
              <div class="col-md-6">
                <p style="text-align: right">Rp. <?php $hargaProd = ($key['jumlah'] * $key['harga']); echo number_format($hargaProd,2,',','.'); ?></p>
              </div>
            </div>
          <?php } ?>
          <div class="row">
            <div class="col-md-6">
              <div class="header">
                <h5><b>SUBTOTAL</b></h5>
              </div>
            </div>
            <div class="col-md-6">
              <div class="header">
                <h5 style="text-align: right"><b>Rp. <?= number_format($jumlah_bayar,2,',','.'); ?></b></h5>
                <input type="hidden" id="subtotal" value="<?= $jumlah_bayar ?>">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="header">
                <p><b>PENGIRIMAN</b></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="header">
                <p  style="text-align: right">Biaya Pengiriman: Rp. <span id = "valueSelect"></span></p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="header">
                <p><b>JASA PENGIRIMAN</b></p>
              </div>
            </div>
            <div class="col-md-6">
              <div style="text-align: right">
                <select id="selectBox" onchange="changeFunc();" style="height: 30px; text-align: center" name="pengiriman"  required>
                  <option selected value="0"> -- None -- </option>
                  <option value="14000">J&T</option>
                  <option value="12000">Tiki</option>
                  <option value="8000">JNE</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="header">
                <h5><b>TOTAL</b></h5>
              </div>
            </div>
            <div class="col-md-6">
              <div class="header">
                <h5 style="text-align: right"><b>Rp. <span id = "valueJmlBayar"></span></b></h5>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="header">
                <p><b>PILIH BANK</b></p>
              </div>
            </div>
            <div class="col-md-6">
              <div style="text-align: right">
                <select style="height: 30px; text-align: center;" name="pengiriman"  required>
                  <option selected> -- Pilih Bank -- </option>
                  <option value="mandiri">Mandiri</option>
                  <option value="bri">BRI</option>
                  <option value="bca">BCA</option>
                  <option value="bni">BNI</option>
                </select>
              </div>
            </div>
          </div>
          <div class="form-group col-md-5" style="margin-top: 20px" >
            <input style="background-color: green; color: white" type="submit" name="order" class="btn btn-block" value="Proses Pesanan">
          </div>
    </form>
</div>
  
</div>

</section>

<script >
  function changeFunc() {
    var selectBox = document.getElementById("selectBox");
    var subtotal = document.getElementById("subtotal").value;
    var selectedValue = selectBox.options[selectBox.selectedIndex].value;
    valueSelect.innerHTML=selectedValue;
    var jumlahBayar = subtotal*1 + selectedValue*1;
    valueJmlBayar.innerHTML=jumlahBayar;
}
</script>