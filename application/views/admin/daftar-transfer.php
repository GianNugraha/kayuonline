<?php foreach ($buktiTf->result() as $key ) {
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
      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title ">Daftar Tabel Transfer Pembeli</h4>
          <p class="card-category"> Ini Merupakan Tabel transfer Pemesanan di Kayu Online</p>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <?php if (!empty($buktiTf->result())) { ?>
                <thead class=" text-primary">
                  <th>
                    Nomor
                  </th>
                  <th>
                    ID Pemesan
                  </th>
                  <th>
                    Nama Pemesan
                  </th>
                  <th>
                    Alamat Pemesan
                  </th>
                  <th>
                    Kode Pos
                  </th>
                  <th>
                    Kota
                  </th>
                  <th>
                    Kontak
                  </th>
                  <th>
                    Email
                  </th>
                  <th>
                    Bukti TF
                  </th>
                  <th colspan="2" style="text-align: center;">
                    Aksi
                  </th>
                </thead>
                <tbody>
                  <?php
                  $nomor = 1;
                  foreach ($buktiTf->result() as $key): 
                    ?>
                    <tr>
                      <td>
                        <?php echo $nomor ?>
                      </td>
                      <td>
                        <!-- <?php echo $this->dataencryption->enc_dec("encrypt", $key->id); ?> -->
                        <?php echo $key->id_pemesan; ?>
                      </td>
                      <td>
                        <?php echo $key->nama_pemesan; ?>
                      </td>
                      <td>
                        <?php echo $key->alamat_pemesan; ?>
                      </td>
                      <td>
                        <?php echo $key->kode_pos; ?>
                      </td>
                      <td>
                        <?php echo $key->kota; ?>
                      </td>
                      <td>
                        <?php echo $key->kontak; ?>
                      </td>
                      <td>
                        <?php echo $key->email; ?>
                      </td>
                      <td>
                        <img style="height: 100px; width: 100px" src="<?= base_url().$key->bukti_transaksi;  ?>"> 
                      </td>
                      <td>
                        <!-- <button type="button" > -->
                          <a href="<?php echo base_url('admin/proses_bukti/'.$this->dataencryption->enc_dec("encrypt", $key->id).'/terima') ?>">
                            <i style="color: blue" title="Terima" class="material-icons">done</i>
                          </a>
                          <!-- </button> -->
                          <!-- <button type="button" class="btn ">Edit</button> -->
                        </td>
                        <td>
                          <!-- <button type="button" > -->
                            <a href="<?php echo base_url('admin/proses_bukti/'.$this->dataencryption->enc_dec("encrypt", $key->id).'/tolak') ?>">
                              <i style="color: red" title="Tolak" class="material-icons">remove_circle</i>
                            </a>
                            <!-- </button> -->
                            <!-- <button type="button" class="btn btn-danger">Hapus</button> -->
                          </td>

                        </tr>
                        <?php $nomor+=1; endforeach;
                      }
                      else{
                        echo '<center><h3>TIDAK ADA DATA !</h3></center>';
                      }

                      ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

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
      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title ">Daftar Tabel Transfer Pembeli Yang Terkonfirmasi</h4>
          <p class="card-category"> Ini Merupakan Tabel transfer Pemesanan yang terkonfirmasi oleh Admin Kayu Online</p>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <?php if (!empty($TFDone->result())) { ?>
                <thead class=" text-primary">
                  <th>
                    Nomor
                  </th>
                  <th>
                    ID Pemesan
                  </th>
                  <th>
                    Nama Pemesan
                  </th>
                  <th>
                    Alamat Pemesan
                  </th>
                  <th>
                    Kode Pos
                  </th>
                  <th>
                    Kota
                  </th>
                  <th>
                    Kontak
                  </th>
                  <th>
                    Email
                  </th>
                  <th>
                    Bukti TF
                  </th>
                  <th colspan="2" style="text-align: center;">
                    Aksi
                  </th>
                </thead>
                <tbody>
                  <?php
                  $nomor = 1;
                  foreach ($TFDone->result() as $key): 
                    ?>
                    <tr>
                      <td>
                        <?php echo $nomor ?>
                      </td>
                      <td>
                        <!-- <?php echo $this->dataencryption->enc_dec("encrypt", $key->id); ?> -->
                        <?php echo $key->id_pemesan; ?>
                      </td>
                      <td>
                        <?php echo $key->nama_pemesan; ?>
                      </td>
                      <td>
                        <?php echo $key->alamat_pemesan; ?>
                      </td>
                      <td>
                        <?php echo $key->kode_pos; ?>
                      </td>
                      <td>
                        <?php echo $key->kota; ?>
                      </td>
                      <td>
                        <?php echo $key->kontak; ?>
                      </td>
                      <td>
                        <?php echo $key->email; ?>
                      </td>
                      <td>
                        <img style="height: 100px; width: 100px" src="<?= base_url().$key->bukti_transaksi;  ?>"> 
                      </td>
                      <td>
                        <!-- <button type="button" > -->
                          <a href="<?php echo base_url('admin/proses_bukti/'.$this->dataencryption->enc_dec("encrypt", $key->id).'/terima') ?>">
                            <i style="color: blue" title="Terima" class="material-icons">done</i>
                          </a>
                          <!-- </button> -->
                          <!-- <button type="button" class="btn ">Edit</button> -->
                        </td>
                        <td>
                          <!-- <button type="button" > -->
                            <a href="<?php echo base_url('admin/proses_bukti/'.$this->dataencryption->enc_dec("encrypt", $key->id).'/tolak') ?>">
                              <i style="color: red" title="Tolak" class="material-icons">remove_circle</i>
                            </a>
                            <!-- </button> -->
                            <!-- <button type="button" class="btn btn-danger">Hapus</button> -->
                          </td>

                        </tr>
                        <?php $nomor+=1; endforeach;
                      }
                      else{
                        echo '<center><h3>TIDAK ADA DATA !</h3></center>';
                      }

                      ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

