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
                  <h4 class="card-title">Edit Stok Harga Ukuran</h4>
                  <p class="card-category">Edit Produk kayu online</p>
                </div>
                <div class="card-body">
                  <?php $url = $this->uri->segment('3'); ?>
                  <form action="<?php echo base_url('admin/proses_stok_harga_ukuran/').$url ?>" method="POST"><br>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Stok</label>
                          <?php foreach ($hassizesid->result() as $key) {
                              echo "<input type='text' value='$key->stock' onkeypress='return hanyaAngka(event)' name='stok' class='form-control'>";
                          ?>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Harga</label>
                            <?php
                              echo "<input type='text' value='$key->price' onkeypress='return hanyaAngka(event)' name='harga' class='form-control'>"
                            ?>
                        </div>
                      </div>
                    <?php } ?>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Ukuran</label>

                            <?php foreach($sizesid->result() as $key){ 
                              echo "<input type='text' value='$key->size' name='ukuran' class='form-control'>";
                            }?>
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Ubah</button>
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