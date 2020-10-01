<div class="content">
        <div class="container-fluid">
          <?php
          if (!empty($this->session->flashdata('msg'))) {
            $message = $this->session->flashdata('msg');
            ?>
            <div class="alert alert-<?php echo $message['class']?>" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <center><?php echo $message['message'] ?></center>
            </div>
          <?php } ?>
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Edit Produk</h4>
                  <p class="card-category">Edit Produk kayu online</p>
                </div>
                <div class="card-body">
                  <form action="<?php echo base_url('admin/proses_ubah_produk') ?>" method="POST">

                    <?php foreach ($produk->result() as $key): ?>
                      <div class="row">
                        <div class="col-md-5">
                          <div class="form-group">
                            <label class="bmd-label-floating">ID Produk</label>
                            <input type="text" class="form-control" name="id" value="<?php echo $this->dataencryption->enc_dec('encrypt', $key->id); ?>" readonly>
                          </div>
                        </div>
                      </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nama</label>
                          <input type="text" name="nama-produk" value="<?php echo $key->name; ?>" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">SKU (Kode Produk)</label>
                          <input type="text" value="<?php echo $key->product_code; ?>" name="sku" class="form-control" readonly>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Deskripsi</label>
                          <textarea name="deskripsi" rows="5" cols="30" class="form-control"><?php echo $key->description ?></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Detail</label>
                          <textarea name="detail" rows="5" cols="30" class="form-control"><?= $key->detail ?></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div>
                          <label class="bmd-label-floating">Gambar</label>
                          <input type="file" name="gambar" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Produk Kategori</label>
                          <select name="kategori" class="form-control">
                            <?php foreach($kategori->result() as $key){?>
                              <option value="<?= $key->id?>" name="kategori"><?= $key->category_name; ?></option>
                            <?php } ?>
                          </select>
                          <!-- <input type="text" name="nama" required class="form-control"> -->
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Stok</label>
                          <?php foreach ($hassizes->result() as $key) {
                              echo "<input type='text' value='$key->stock' onkeypress='return hanyaAngka(event)' name='stok' class='form-control'>";
                          ?>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Harga</label>
                          <?php
                              echo "<input type='text' value='$key->price' onkeypress='return hanyaAngka(event)' name='harga' class='form-control'>";
                          ?>
                        </div>
                      </div>
                    <?php } ?>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Ukuran</label>
                            <?php foreach($sizes->result() as $key){ 
                              echo "<input type='text' value='$key->size' name='ukuran' class='form-control'>";
                            }?>
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Ubah</button>
                    <div class="clearfix"></div>
                  <?php endforeach;
                        ?>
                  </form>
                </div>
              </div>
            </div>
            <!-- <div class="col-md-4">
              <div class="card card-profile">
                <div class="card-avatar">
                  <a href="javascript:;">
                    <img class="img" src="<?php echo base_url(); ?>assets/img/faces/marc.jpg" />
                  </a>
                </div>
                <div class="card-body">
                  <h6 class="card-category text-gray">CEO / Co-Founder</h6>
                  <h4 class="card-title">Alec Thompson</h4>
                  <p class="card-description">
                    Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                  </p>
                  <a href="javascript:;" class="btn btn-primary btn-round">Follow</a>
                </div>
              </div>
            </div> -->
          </div>
        </div>
      </div>

      <script>
        function hanyaAngka(evt) {
          var charCode = (evt.which) ? evt.which : event.keyCode
           if (charCode > 31 && (charCode < 48 || charCode > 57))
 
            return false;
          return true;
        }
      </script>