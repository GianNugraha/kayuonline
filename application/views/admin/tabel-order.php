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
            <h4 class="card-title mt-0"> Daftar Tabel Order</h4>
            <p class="card-category"> Ini Merupakan Tabel Order</p>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-hover">
                <?php if (!empty($order)) { ?>
                  <thead>
                    <th>No</th>
                    <th>ID Pemesan</th>
                    <th>SKU</th>
                    <th>Nama Produk</th>
                    <th>Ukuran Produk</th>
                    <th>Jumlah yang di pesan</th>
                    <th>Total Harga</th>
                    <th>Status</th>
                  </thead>
                  <tbody>
                    <?php $no=1;
                    foreach ($order as $key) { ?>
                      <tr>
                        <td><?= $no; ?></td>
                        <td><?= $key->id_pemesan;?></td>
                        <td><?= $key->sku_product;?></td>
                        <td><?= $key->nama_product;?></td>
                        <td><?= $key->ukuran;?></td>
                        <td><?= $key->jumlah;?></td>
                        <td><?= $key->total;?></td>
                        <td><?= $key->status;?></td>
                      </tr>
                    <?php $no+=1; } ?>
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