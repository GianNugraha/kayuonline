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
                          <label class="bmd-label-floating">Produk Kategori</label>
                          <select name="kategori" class="form-control">
                            <?php foreach($allProductCategories as $key){ 
                              $categori = $key['id'];
                              echo "<option value='$categori'>{$key['category_name']}</option>";
                            }?>
                          </select>
                          <!-- <input type="text" name="nama" required class="form-control"> -->
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Stok</label>
                          <input type="text" onkeypress="return hanyaAngka(event)" name="stok" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Harga</label>
                              <input type="text" onkeypress="return hanyaAngka(event)" name="harga" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Ukuran</label>
                            <?php foreach ($allProductSizes as $key) {
                              echo "<input type='hidden' name='id_sizes' value= '{$key['id']}' readonly>";
                            } ?>
                            <input type="text" onkeypress="return hanyaAngka(event)" name="ukuran" class="form-control">
                              <?php foreach ($allProductHasSizes as $key) {
                                echo "<input type='hidden' name='id_has_sizes' value= '{$key['id']}' readonly>";
                                }
                              ?>
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