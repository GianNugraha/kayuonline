
<?php foreach ($productPerCategory as $key) {
  echo "<pre>";
  print_r($key);
  echo "</pre>";
} ?>
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
            <div class="col-md-12">
              <div class="card card-plain">
                <div class="card-header card-header-primary">
                  <h4 class="card-title mt-0"> Daftar Tabel Produk</h4>
                  <p class="card-category"> Here is a subtitle for this table</p>
                </div>
                <a href="add-harga-ukuran-stok">
                  <div style="margin-left: 20px; margin-top: 30px; margin-bottom: -10px;">
                    <i class="material-icons">add_task</i>
                  Tambah Ukuran, Harga & Stok
                  </div>
                </a>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <?php 
                        if (!empty($productPerCategory)){
                      ?>
                      <thead class="">
                        <th>
                          No
                        </th>
                        <th>
                          SKU
                        </th>
                        <th>
                         Nama Produk
                        </th>
                        <th>
                          Kategori Produk
                        </th>
                        <th>
                          Ukuran
                        </th>
                        <th>
                         Harga
                        </th>
                        <th>
                          Stok
                        </th>
                        <th>
                          Terjual
                        </th>
                        <th colspan="2" style="text-align: center;">
                          Aksi
                        </th>
                      </thead>
                      <tbody>
                        <?php 
                        $nomor = 1;
                        foreach ($productPerCategory as $key): 
                          ?>
                        <tr>
                          <td>
                            <!-- <a style="color: black" href="<?= base_url('admin/get-product-byCategory?id='.$key->category_id.'&sku=' .$key->product_code);?>"> -->
                            <?php echo $nomor ?>
                            <a/>
                          </td>
                          <td>
                            <!-- <a style="color: black" href="<?= base_url('admin/get-product-byCategory?id='.$key->category_id.'&sku=' .$key->product_code);?>"> -->
                            <?php echo $key->product_code; ?>
                          </a>
                          </td>
                          <td>
                            <!-- <a style="color: black" href="<?= base_url('admin/get-product-byCategory?id='.$key->category_id.'&sku=' .$key->product_code);?>"> -->
                            <?php echo $key->name; ?>
                            </a>
                          </td>
                          <td>
                            <!-- <a style="color: black" href="<?= base_url('admin/get-product-byCategory?id='.$key->category_id.'&sku=' .$key->product_code);?>"> -->
                            <?php echo $key->category_name; ?>
                            </a>
                          </td>
                          <td>
                            <!-- <a style="color: black" href="<?= base_url('admin/get-product-byCategory?id='.$key->category_id.'&sku=' .$key->product_code);?>"> -->
                            <?php echo $key->size; ?>
                          </a>
                          </td>
                          <td>
                            <!-- <a style="color: black" href="<?= base_url('admin/get-product-byCategory?id='.$key->category_id.'&sku=' .$key->product_code);?>"> -->
                            <?php echo $key->price; ?>
                          </a>
                          </td>
                          <td>
                            <!-- <a style="color: black" href="<?= base_url('admin/get-product-byCategory?id='.$key->category_id.'&sku=' .$key->product_code);?>"> -->
                            <?php echo $key->stock; ?>
                          </a>
                          </td>
                          <td>
                            <!-- <a style="color: black" href="<?= base_url('admin/get-product-byCategory?id='.$key->category_id.'&sku=' .$key->product_code);?>"> -->
                            <?php echo $key->sold; ?>
                          </a>
                          </td>
                          <td style="text-align: center">
                          <a href="#">
                            <i style="color:red" title="Hapus" rel="tooltip" class="material-icons">delete</i>
                          </a>
                          <a href="<?php echo base_url('admin/edit_produk/'.$this->dataencryption->enc_dec("encrypt",$key->product_size_id)) ?>">
                            <i title="Ubah" rel="tooltip" class="material-icons">edit</i>
                          </a>
                          </td>
                      </tr>
                         <?php $nomor+=1; endforeach;?>
                      </tbody>
                      <?php }
                        else{
                          echo "<center><h3>TIDAK ADA DATA !</h3></center>";
                        } ?>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>