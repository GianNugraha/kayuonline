<section class="wrapper">

<div class="container">
    <div class="row" style="margin-top: 30px; margin-bottom: 30px">
        <div class="col-lg-4 col-md-4 col-sm-4">
            <!-- <p>jika syarat cart terpenuhi</p> -->
            <!-- <div class="proced-1">
                <a class="next-1" href="#">
                    <h1 style="color: #888;" class="proced-1">01</h1>
                    <h4 style="color: #888;" class="shop-1">Shopping Cart</h4>
                    <p style="color: #888;" class="item-1">Manage your items list.</p>
                </a>
            </div> -->

            <!-- <p>jika syarat cart belum terpenuhi</p> -->

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
                    <h1 style="color: black;" class="procces-II">02</h1>
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
                <div class="header">
                    <h3>RINCIAN PENAGIHAN</h3>
                </div>
                <hr style="border:1px solid black">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="name">Nama Lengkap <span title="required" style="color:red" >*</span></label>
                        <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required>
                    </div>

                    <!-- <div class="form-group">
                       <label for="exampleInputEmail1">Company Name (Optional)</label>
                       <input type="text" name="tempat" class="form-control" placeholder="Company Name" required>
                   </div> -->
                    <!-- <div class="form-group">
                        <label for="exampleInputEmail1">Negara <span title="required" style="color:red" >*</span></label>
                        <select name="provinsi" class="form-control" required>
                          <option value=""> -- Negara -- </option>
                          <option value="Afghanistan">Afghanistan</option>
                          <option value="Albania">Albania</option>
                          <option value="jawatengah">Jawa Tengah</option>
                          <option value="yogyakarta">D.I. Yogyakarta</option>
                          <option value="jawatimur">Jawa Timur</option>
                          <option value="aceh">Aceh</option>
                          <option value="sumaterautara">Sumatera Utara</option>
                          <option value="sumaterabarat">Sumatera Barat</option>
                          <option value="riau">Riau</option>
                          <option value="jambi">Jambi</option>
                          <option value="sumateraselatan">Sumatera Selatan</option>
                          <option value="lampung">Lampung</option>
                          <option value="kalimantanbarat">Kalimantan Barat</option>
                          <option value="kalimantantengah">Kalimantan Tengah</option>
                          <option value="kalimantanselatan">Kalimantan Selatan</option>
                          <option value="kalimantantimur">Kalimantan Timur</option>
                          <option value="sulawesiutara">Sulawesi Utara</option>
                          <option value="sulawesitengah">Sulawesi Tengah</option>
                          <option value="sulawesiselatan">Sulawesi Selatan</option>
                          <option value="sulawesitenggara">Sulawesi Tenggara</option>
                          <option value="maluku">Maluku</option>
                          <option value="bali">Bali</option>
                          <option value="nusatenggarabarat">Nusa Tenggara Barat</option>
                          <option value="nusatenggaratimur">Nusa Tenggara Timur</option>
                          <option value="papua">Papua</option>
                          <option value="bengkulu">Bengkulu</option>
                          <option value="malukuutara">Maluku Utara</option>
                          <option value="banten">Banten</option>
                          <option value="bangkabelitung">Bangka Belitung</option>
                          <option value="gorontalo">Gorontalo</option>
                          <option value="kepulauanriau">Kepulauan Riau</option>
                          <option value="papuabarat">Papua Barat</option>
                          <option value="sulawesibarat">Sulawesi Barat</option>
                      </select>
                    </div> -->

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
                       <input type="text" name="phone" class="form-control" placeholder="+6281295701234" required>
                   </div>
                   <div class="form-group">
                       <label >Email <span title="required" style="color:red" >*</span></label>
                       <input for="exampleInputEmail1" type="email" name="email" class="form-control" placeholder="Contoh@Email.com" required>
                   </div>
            <div class="form-group">
                <label>Pesan Ke Pengirim (optional)</label>
                <textarea name="alamat" cols="50" rows="3" name="alamat" class="form-control" placeholder="Mas/Mbak .. Jika barang sudah sampai mohon telepon saya terlebih dahulu" required></textarea>
            </div>
    <div class="form-group col-md-4">
        <input type="submit" name="submit" href="#" class="btn btn-block btn-primary btn-lg" value="Proses">
    </div>
</form>
</div>

<div class="col-md-5" style="border-style: ridge">
    <div class="header">
        <h3>PESANAN ANDA</h3>
    </div>
    <hr style="border:1px solid black">
    <!-- <form action="procces_checkout.html" method="post"> -->
    <form action="ordercomplete.html" method="post">
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
        <div class="row">
            <div class="col-md-6">
                <p>Eksotik - BR <b>x1</b></p>
            </div>
             <div class="col-md-6">
                <p style="text-align: right">Rp. 9,000,000</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <p>Eksotik - MG <b>x2</b></p>
            </div>
             <div class="col-md-6">
                <p style="text-align: right">Rp. 44,000,000</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="header">
                    <h5><b>SUBTOTAL</b></h5>
                </div>
            </div>
             <div class="col-md-6">
                <div class="header">
                    <h5 style="text-align: right"><b>Rp. 53,000,000</b></h5>
                    <input type="hidden" id="subtotal" value="53000000">
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
                    <select id="selectBox" onchange="changeFunc();" style="height: 20px; text-align: center" name="pengiriman"  required>
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
                    <select style="height: 20px; text-align: center;" name="pengiriman"  required>
                      <option selected> -- Pilih Bank -- </option>
                      <option value="mandiri">Mandiri</option>
                      <option value="bri">BRI</option>
                      <option value="bca">BCA</option>
                      <option value="BNI">BNI</option>
                  </select>
              </div>
            </div>
        </div>
        <div class="form-group col-md-5" style="margin-top: 20px" >
            <input style="background-color: black" type="submit" name="order" class="btn btn-block" value="Proses Pesanan">
        </div>
    </form>
</div>
  
</div>

</section>