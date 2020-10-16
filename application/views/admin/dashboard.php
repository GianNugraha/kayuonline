<!DOCTYPE html>
<html>
  <head>
    <title></title>
      <style>
        .accordion {
          background-color: #eee;
          color: red;
          cursor: pointer;
          padding: 18px;
          width: 100%;
          border: none;
          text-align: left;
          outline: none;
          font-size: 15px;
          transition: 0.4s;
        }

        .active, .accordion:hover {
          background-color: white; 
        }
        .accordion:after {
          content: '\21DB';
          color: red;
          font-weight: bold;
          float: left;
          margin-left: 5px;
        }

        /*.active:after {
          content: "\2212";
        }*/

        .panel {
          padding: 0 18px;
          display: none;
          background-color: white;
          overflow: hidden;
        }
      </style>
  </head>
<body>
  <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12 col-md-12">
              <div class="card">
                <div class="card-header card-header-tabs card-header-danger">
                  <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                      <!-- <span class="nav-tabs-title">User Manual :</span><br><br> -->
                      <ul class="nav nav-tabs" data-tabs="tabs">
                        <li class="nav-item">
                          <a class="nav-link active" href="#beranda" data-toggle="tab">
                            <i class="material-icons">dashboard</i> Beranda
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#tabel" data-toggle="tab">
                            <i class="material-icons">content_paste</i> Daftar Tabel
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#transaksi" data-toggle="tab">
                            <i class="material-icons">stroller</i> Status Transaksi
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#bug" data-toggle="tab">
                            <i class="material-icons">money</i> Konfirmasi Transaksi
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#bug" data-toggle="tab">
                            <i class="material-icons">warning</i> Stok Minim
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#bug" data-toggle="tab">
                            <i class="material-icons">notifications</i> Fitur Lainnya
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="tab-content">
                    <div class="tab-pane active" id="beranda">
                      <table class="table">
                        <tbody>
                          <tr>
                            <td>
                              <div>
                                <i class="material-icons" style="color:red">keyboard_arrow_right</i>
                              </div>
                            </td>
                            <td>Halaman beranda merupakan tampilan awal pada tab admin ketika berhasil melakukan login.</td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check">
                                <i class="material-icons" style="color:red">keyboard_arrow_right</i>
                              </div>
                            </td>
                            <td>Halaman ini berisi daftar user manual untuk memudahkan admin dalam pengolahan data.</td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check">
                                <i class="material-icons" style="color:red">keyboard_arrow_right</i>
                              </div>
                            </td>
                            <td>Untuk penginputan data produk harus berurutan, yaitu mulai dari pendaftaran produk dulu (di bagian menu daftar tabel) setelah itu penginputan data ukuran, harga, stok dan thumbnail dengan cara klik salah satu item yang akan di tambahkan data nya.</td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check">
                                <i class="material-icons" style="color:red">keyboard_arrow_right</i>
                              </div>
                            </td>
                            <td>Harap berhati hati dan tolong teliti jika menginput suatu data.</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="tab-pane" id="tabel">
                      <table class="table">
                        <tbody>
                          <tr>
                            <td>
                              <button class="accordion">&nbsp Daftar Tabel Admin</button>
                              <div class="panel">
                                  Disini admin dapat menambahkan, mengubah, ataupun menghapus admin lainnya. <p>
                                  <h6 style="color: purple">1. Tambah Admin</h6> <p> Untuk menambahkan admin, kamu dapat menekan tombol &nbsp
                                    <i style="color: purple" class="material-icons">add_task</i> &nbsp pada bagian "Daftar Tabel Admin".</p>
                                  <h6 style="color: purple">2. Ubah Admin</h6> <p> Untuk mengubah admin, kamu dapat menekan tombol &nbsp
                                    <i style="color: purple" class="material-icons">edit</i> &nbsp pada bagian isi dari "Daftar Tabel Admin".</p>
                                  <h6 style="color: purple">3. Hapus Admin</h6> <p> Untuk menghapus admin, kamu dapat menekan tombol &nbsp
                                    <i class="material-icons" style="color: red">delete</i> &nbsp pada bagian isi dari "Daftar Tabel Admin".</p>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <button class="accordion">&nbsp Daftar Tabel User</button>
                              <div class="panel">
                                Admin dapat mengubah dan menghapus user yang sudah terdaftar, tetapi admin tidak bisa menambahkan user baru. <p>
                                <h6 style="color: purple">1. Ubah User</h6> <p> Untuk mengubah user, kamu dapat menekan tombol &nbsp
                                  <i style="color: purple" class="material-icons">edit</i> &nbsp pada bagian isi dari "Daftar Tabel User".</p>
                                <h6 style="color: purple">2. Hapus User</h6> <p> Untuk menghapus user, kamu dapat menekan tombol &nbsp
                                  <i class="material-icons" style="color: red">delete</i> &nbsp pada bagian isi dari "Daftar Tabel User".</p>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <button class="accordion">&nbsp Daftar Tabel Produk</button>
                              <div class="panel">
                                Disini admin dapat menambahkan, mengubah, ataupun menghapus Produk dan Ukuran nya. <p>
                                  <h6 style="color: purple">1. Tambah Produk</h6> <p> Untuk menambahkan Produk, kamu dapat menekan tombol &nbsp
                                    <i style="color: purple" class="material-icons">add_task</i> &nbsp pada bagian "Daftar Tabel Produk".</p>
                                  <h6 style="color: purple">2. Ubah Produk</h6> <p> Untuk mengubah Produk, kamu dapat menekan tombol &nbsp
                                    <i style="color: purple" class="material-icons">edit</i> &nbsp pada bagian isi dari "Daftar Tabel Produk".</p>
                                  <h6 style="color: purple">3. Hapus Produk</h6> <p> Untuk menghapus Produk, kamu dapat menekan tombol &nbsp
                                    <i class="material-icons" style="color: red">delete</i> &nbsp pada bagian isi dari "Daftar Tabel Produk".</p>
                                  <h6 style="color: purple">4. Tambah Ukuran, Harga & Stok</h6> <p> Untuk menambahkan Ukuran, Harga & Stok pada suatu produk. Kamu dapat memilih salah satu item pada tabel "Daftar Tabel Produk", setelah itu kamu akan di pindahkan ke tab baru. Setelah di pindahkan ke tab baru, kamu akan melihat icon &nbsp<i class="material-icons" style="color: purple">add_task</i>&nbsp pada bagian tabel "Stok Harga & Ukuran Per-Item"</p>
                                  <h6 style="color: purple">5. Ubah Ukuran, Harga & Stok</h6> <p> Untuk mengubah Ukuran, Harga & Stok pada suatu produk. Kamu dapat menekan tombol &nbsp<i class="material-icons" style="color: purple">edit</i>&nbsp pada bagian tabel "Stok Harga & Ukuran Per-Item"</p>
                                  <h6 style="color: purple">6. Hapus Ukuran, Harga & Stok</h6> <p> Untuk menghapus Ukuran, Harga & Stok pada suatu produk. Kamu dapat menekan tombol &nbsp<i class="material-icons" style="color: red">delete</i>&nbsp pada bagian tabel "Stok Harga & Ukuran Per-Item"</p>
                                  <h6 style="color: purple">7. Tambah Thumbnail</h6> <p> Sama seperti menambahkan Ukuran, Harga & Stok, namun untuk menambahkan Thumbnail pada suatu produk. Kamu dapat memilih salah satu item pada tabel "Daftar Tabel Produk", setelah itu kamu akan di pindahkan ke tab baru. Setelah di pindahkan ke tab baru, kamu akan melihat icon &nbsp<i class="material-icons" style="color: purple">add_task</i>&nbsp pada bagian tabel "Tambah Thumbnail". Perlu di ingat, kamu tidak dapat menghapus dan mengubah nya disini.</p>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <button class="accordion">&nbsp Daftar Tabel Thumbnail</button>
                              <div class="panel">
                                Admin dapat mengubah dan menghapus Thumbnail yang sudah terdaftar, tetapi admin tidak bisa menambahkan Thumbnail baru di sini. <p>
                                <h6 style="color: purple">1. Ubah Thumbnail</h6> <p> Untuk mengubah Thumbnail, kamu dapat menekan tombol &nbsp
                                  <i style="color: purple" class="material-icons">edit</i> &nbsp pada bagian isi dari "Daftar Tabel Thumbnail".</p>
                                <h6 style="color: purple">2. Hapus Thumbnail</h6> <p> Untuk menghapus Thumbnail, kamu dapat menekan tombol &nbsp
                                  <i style="color: red" class="material-icons">delete</i> &nbsp pada bagian isi dari "Daftar Tabel Thumbnail".</p>
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="tab-pane" id="transaksi">
                      <table class="table">
                        <tbody>
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="">
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>
                            <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">edit</i>
                              </button>
                              <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="" checked>
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>
                            <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                            </td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">edit</i>
                              </button>
                              <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="" checked>
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>
                            <td>Sign contract for "What are conference organizers afraid of?"</td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">edit</i>
                              </button>
                              <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                              </button>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
          acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.display === "block") {
              panel.style.display = "none";
            } else {
              panel.style.display = "block";
            }
          });
        }
      </script>
</body>
</html>
