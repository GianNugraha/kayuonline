
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
                  <h4 class="card-title">Tambah Produk Baru</h4>
                  <p class="card-category"></p>
                </div>
                <div class="card-body">
                  <form role="form" action="<?= base_url('admin/proses_add_produk') ?>" method="post" enctype="multipart/form-data">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nama Produk</label>
                          <input type="text" name="nama-produk" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">SKU (Kode Produk)</label>
                          <input type="text" name="sku" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Deskripsi</label>
                          <textarea name="deskripsi" rows="5" cols="30" class="form-control"></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div>
                          <label class="bmd-label-floating">Gambar</label>
                            <input type="file" name="gambar">
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
                                $idsize = $key['id']+=1;
                                echo "<input type='hidden' name='id_ukuran' value= '$idsize'>";
                                }
                              ?>
                          		<input type="text" name="ukuran" class="form-control">
                    		</div>
                    	</div>
                    </div>
                    <input type="hidden" value="not-reg" name="jenis">
                    <input type="submit" class="btn btn-primary pull-right">
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
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