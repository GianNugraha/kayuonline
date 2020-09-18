<!-- bradcrom -->
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <div class="row">
        <div class="col-sm">
          <ul class="bradcrom-links">
            <li><a href="index.html">Home</a><a> / </a><span>Shop</span></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- bradcrom -->

  <!-- tabs -->
  <div class="tab-filter">
    <div class="container">
      <div class="row">
        <div class="col-sm">
          <div class="filter">
            <div id="mySidenav" class="filnav">
              <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
              <p style="font-size: 15px; margin-left: 20px;"><a href="index.html">Home</a>/<a
                  href="toko.html">Product</a></p>
              <div style="margin-left: 20px; margin-top: 20px;" class="iner_filter2">
                <h5 class="widged_title">PRODUCT CATEGORIES</h5>
                <a class="widget_a" href="">Decking</a>
                <button class="accordion-2">Kayu olahan</button>
                <div class="panel">
                  <div class="ex">
                    <a href="#">Eksotik - BR</a>
                  </div>
                  <div class="ex">
                    <a href="#">Eksotik - GSL</a>
                  </div>
                  <div class="ex">
                    <a href="#">Eksotik - MG</a>
                  </div>
                  <div class="ex">
                    <a href="#">Indah M</a>
                  </div>
                  <div class="ex">
                    <a href="#">Jati</a>
                  </div>
                  <div class="ex">
                    <a href="#">Krikis</a>
                  </div>
                  <div class="ex">
                    <a href="#">Matoa</a>
                  </div>
                  <div class="ex">
                    <a href="#">Merbau</a>
                  </div>
                  <div class="ex">
                    <a href="#">Nyatoh</a>
                  </div>
                </div>
                <div class="Kusen">
                  <a class="widget_a" href="">Kusen</a>
                </div>
                <div class="lisprofil">
                  <a class="widget_a" href="">Lis Profil</a>
                </div>
                <div class="pintu">
                  <a class="widget_a" href="">Pintu</a>
                </div>
                <div class="tangga">
                  <a class="widget_a" href="">Tangga</a>
                </div>

                <div class="tag">
                  <h4 style="font-size: 20px; margin-top: 30px;">TAGS</h4>
                </div>

                <div class="tags-btn">
                  <div class="btn-tags">
                    <ul>
                      <a href="">Decking</a>
                      <a href="">Kayu Olahan</a>
                    </ul>
                    <ul>
                      <a href="">Kusen</a>
                    </ul>
                    <ul>
                      <a href="">Lis Profil</a>
                      <a href="">Pintu</a>
                      <a href="">Tangga</a>
                    </ul>
                  </div>
                </div>
              </div>


            </div>

            <span style="cursor: pointer;" onclick="openNav()">
              <p style="margin-top: 25px;"><i class="fa fa-filter" aria-hidden="true"></i><span> Filter</span></p>
            </span>

            <script>
              function openNav() {
                document.getElementById("mySidenav").style.width = "250px";
              }

              function closeNav() {
                document.getElementById("mySidenav").style.width = "0";
              }
            </script>
            <!-- <a class="filter" href="#">
              <p><i class="fa fa-filter" aria-hidden="true"></i><span> Filter</span></p>
            </a> -->
          </div>
        </div>
        <div class="col-sm">
          <ul class="tabs-column">
            <li data-tab-target="#column-6" class="active tab"><img class="tab_img" src="<?= base_url() ?>assets/img/6.png" alt=""></li>
            <li data-tab-target="#column-5" class="tab"><img class="tab_img" src="<?= base_url() ?>assets/img/5.png" alt=""></li>
            <li data-tab-target="#column-4" class="tab"><img class="tab_img" src="<?= base_url() ?>assets/img/4.png" alt=""></li>
            <li data-tab-target="#column-3" class="tab"><img class="tab_img" src="<?= base_url() ?>assets/img/3.png" alt=""></li>
            <li data-tab-target="#column-1" class="tab"><img class="tab_img" src="<?= base_url() ?>assets/img/1.png" alt=""></li>
          </ul>

        </div>
        <div class="col-sm">
          <div class="sort-by">
            <div class="dropdown">
              <select name="menu_sort" class="menu-dropdown" id="">
                <option value="default">Default sorting</option>
                <option value="popular">Sort by popularity</option>
                <option value="rating">Sort by average rating</option>
                <option value="lasted">Sort by latest</option>
                <option value="high">Sort by price: low to high</option>
                <option value="low">Sort by price: high to low</option>
              </select>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- akhir tabs -->

  <!-- name produk kami -->
  <section class="title">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h5>Produk Kami</h5>
          <hr>
        </div>
      </div>
    </div>
    </div>
  </section>


  <!-- tabs conten -->
  <div class="container">
    <div class="col-sm-12">
      <div class="tab-content">
        <div id="column-6" data-tab-content class="active">
          <div class="row">
            <div class="col-sm-2">
              <div class="product-top">
                <div class="thumb-img">
                  <a href="produk.html"><img width="100%" src="<?= base_url() ?>assets/img/lg-2.png" class="gambar1"></a>
                  <a href="produk.html"><img width="100%" src="<?= base_url() ?>assets/img/lg-3.png" class="gambar2"></a>
                </div>
                <div class="overlay">
                  <div style="margin-left: 17px; margin-bottom: -5px; margin-top: 10px;" id="bars">
                    <span><i class="fa fa-eye" title="Quick View"></i></span>
                  </div>
                  <a class="btn btn-secondary" href="#"><i class="fa fa-heart-o" title="Wishlist"></i></a>
                  <a class="btn btn-secondary" href="#"><i class="fa fa-shopping-cart" title="Shopping"></i></a>
                </div>
              </div>

              <div class="product-buttom text-center">
                <!-- <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
                <i class="fa fa-star-half-o"></i> -->
                <h3>Eksotik - BR</h3>
                <h5>Rp.500.00</h5>
              </div>
            </div>

            <div class="col-sm-2">
              <div class="product-top">
                <div class="thumb-img">
                  <a href="produk.html"><img width="100%" src="<?= base_url() ?>assets/img/lg-2.png" class="gambar1"></a>
                  <a href="produk.html"><img width="100%" src="<?= base_url() ?>assets/img/lg-3.png" class="gambar2"></a>
                </div>
                <div class="overlay">
                  <a class="btn btn-secondary" href="produk.html"><i class="fa fa-eye" title="Quick View"></i></a>
                  <a class="btn btn-secondary" href="#"><i class="fa fa-heart-o" title="Wishlist"></i></a>
                  <a class="btn btn-secondary" href="#"><i class="fa fa-shopping-cart" title="Shopping"></i></a>
                </div>
              </div>

              <div class="product-buttom text-center">
                <!-- <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
                <i class="fa fa-star-half-o"></i> -->
                <h3>Eksotik - BR</h3>
                <h5>Rp.500.00</h5>
              </div>
            </div>

            <div class="col-sm-2">
              <div class="product-top">
                <div class="thumb-img">
                  <a href="produk.html"><img width="100%" src="<?= base_url() ?>assets/img/lg-2.png" class="gambar1"></a>
                  <a href="produk.html"><img width="100%" src="<?= base_url() ?>assets/img/lg-3.png" class="gambar2"></a>
                </div>
                <div class="overlay">
                  <a class="btn btn-secondary" href="produk.html"><i class="fa fa-eye" title="Quick View"></i></a>
                  <a class="btn btn-secondary" href="#"><i class="fa fa-heart-o" title="Wishlist"></i></a>
                  <a class="btn btn-secondary" href="#"><i class="fa fa-shopping-cart" title="Shopping"></i></a>
                </div>
              </div>

              <div class="product-buttom text-center">
                <!-- <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
                <i class="fa fa-star-half-o"></i> -->
                <h3>Eksotik - BR</h3>
                <h5>Rp.500.00</h5>
              </div>
            </div>

            <div class="col-sm-2">
              <div class="product-top">
                <div class="thumb-img">
                  <a href="produk.html"><img width="100%" src="<?= base_url() ?>assets/img/lg-2.png" class="gambar1"></a>
                  <a href="produk.html"><img width="100%" src="<?= base_url() ?>assets/img/lg-3.png" class="gambar2"></a>
                </div>
                <div class="overlay">
                  <a class="btn btn-secondary" href="produk.html"><i class="fa fa-eye" title="Quick View"></i></a>
                  <a class="btn btn-secondary" href="#"><i class="fa fa-heart-o" title="Wishlist"></i></a>
                  <a class="btn btn-secondary" href="#"><i class="fa fa-shopping-cart" title="Shopping"></i></a>
                </div>
              </div>

              <div class="product-buttom text-center">
                <!-- <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
                <i class="fa fa-star-half-o"></i> -->
                <h3>Eksotik - BR</h3>
                <h5>Rp.500.00</h5>
              </div>
            </div>

            <div class="col-sm-2">
              <div class="product-top">
                <div class="thumb-img">
                  <a href="produk.html"><img width="100%" src="<?= base_url() ?>assets/img/lg-2.png" class="gambar1"></a>
                  <a href="produk.html"><img width="100%" src="<?= base_url() ?>assets/img/lg-3.png" class="gambar2"></a>
                </div>
                <div class="overlay">
                  <a class="btn btn-secondary" href="produk.html"><i class="fa fa-eye" title="Quick View"></i></a>
                  <a class="btn btn-secondary" href="#"><i class="fa fa-heart-o" title="Wishlist"></i></a>
                  <a class="btn btn-secondary" href="#"><i class="fa fa-shopping-cart" title="Shopping"></i></a>
                </div>
              </div>

              <div class="product-buttom text-center">
                <!-- <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
                <i class="fa fa-star-half-o"></i> -->
                <h3>Eksotik - BR</h3>
                <h5>Rp.500.00</h5>
              </div>
            </div>

            <div class="col-sm-2">
              <div class="product-top">
                <div class="thumb-img">
                  <a href="produk.html"><img width="100%" src="<?= base_url() ?>assets/img/lg-2.png" class="gambar1"></a>
                  <a href="produk.html"><img width="100%" src="<?= base_url() ?>assets/img/lg-3.png" class="gambar2"></a>
                </div>
                <div class="overlay">
                  <a class="btn btn-secondary" href="produk.html"><i class="fa fa-eye" title="Quick View"></i></a>
                  <a class="btn btn-secondary" href="#"><i class="fa fa-heart-o" title="Wishlist"></i></a>
                  <a class="btn btn-secondary" href="#"><i class="fa fa-shopping-cart" title="Shopping"></i></a>
                </div>
              </div>

              <div class="product-buttom text-center">
                <!-- <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
                <i class="fa fa-star-half-o"></i> -->
                <h3>Eksotik - BR</h3>
                <h5>Rp.500.00</h5>
              </div>
            </div>

          </div>

        </div>
        <div id="column-5" data-tab-content>
          <div class="container">
            <div class="row">
              <div class="sm-col-5">
                <div class="product-top">
                  <div class="thumb-img">
                    <a href="produk.html"><img width="100%" src="<?= base_url() ?>assets/img/lg-2.png" class="gambar1"></a>
                    <a href="produk.html"><img width="100%" src="<?= base_url() ?>assets/img/lg-3.png" class="gambar2"></a>
                  </div>
                  <div class="overlay">
                    <a class="btn btn-secondary" href="produk.html"><i class="fa fa-eye" title="Quick View"></i></a>
                    <a class="btn btn-secondary" href="#"><i class="fa fa-heart-o" title="Wishlist"></i></a>
                    <a class="btn btn-secondary" href="#"><i class="fa fa-shopping-cart" title="Shopping"></i></a>
                  </div>
                </div>

                <div class="product-buttom text-center">
                  <!-- <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
                <i class="fa fa-star-half-o"></i> -->
                  <h3>Eksotik - BR</h3>
                  <h5>Rp.500.00</h5>
                </div>
              </div>

              <div class="sm-col-5">
                <div class="product-top">
                  <div class="thumb-img">
                    <a href="produk.html"><img width="100%" src="<?= base_url() ?>assets/img/lg-2.png" class="gambar1"></a>
                    <a href="produk.html"><img width="100%" src="<?= base_url() ?>assets/img/lg-3.png" class="gambar2"></a>
                  </div>
                  <div class="overlay">
                    <a class="btn btn-secondary" href="produk.html"><i class="fa fa-eye" title="Quick View"></i></a>
                    <a class="btn btn-secondary" href="#"><i class="fa fa-heart-o" title="Wishlist"></i></a>
                    <a class="btn btn-secondary" href="#"><i class="fa fa-shopping-cart" title="Shopping"></i></a>
                  </div>
                </div>

                <div class="product-buttom text-center">
                  <!-- <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star-half-o"></i>
                  <i class="fa fa-star-half-o"></i> -->
                  <h3>Eksotik - BR</h3>
                  <h5>Rp.500.00</h5>
                </div>
              </div>

              <div class="sm-col-5">
                <div class="product-top">
                  <div class="thumb-img">
                    <a href="produk.html"><img width="100%" src="<?= base_url() ?>assets/img/lg-2.png" class="gambar1"></a>
                    <a href="produk.html"><img width="100%" src="<?= base_url() ?>assets/img/lg-3.png" class="gambar2"></a>
                  </div>
                  <div class="overlay">
                    <a class="btn btn-secondary" href="produk.html"><i class="fa fa-eye" title="Quick View"></i></a>
                    <a class="btn btn-secondary" href="#"><i class="fa fa-heart-o" title="Wishlist"></i></a>
                    <a class="btn btn-secondary" href="#"><i class="fa fa-shopping-cart" title="Shopping"></i></a>
                  </div>
                </div>

                <div class="product-buttom text-center">
                  <!-- <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star-half-o"></i>
                  <i class="fa fa-star-half-o"></i> -->
                  <h3>Eksotik - BR</h3>
                  <h5>Rp.500.00</h5>
                </div>
              </div>

              <div class="sm-col-5">
                <div class="product-top">
                  <div class="thumb-img">
                    <a href="produk.html"><img width="100%" src="<?= base_url() ?>assets/img/lg-2.png" class="gambar1"></a>
                    <a href="produk.html"><img width="100%" src="<?= base_url() ?>assets/img/lg-3.png" class="gambar2"></a>
                  </div>
                  <div class="overlay">
                    <a class="btn btn-secondary" href="produk.html"><i class="fa fa-eye" title="Quick View"></i></a>
                    <a class="btn btn-secondary" href="#"><i class="fa fa-heart-o" title="Wishlist"></i></a>
                    <a class="btn btn-secondary" href="#"><i class="fa fa-shopping-cart" title="Shopping"></i></a>
                  </div>
                </div>

                <div class="product-buttom text-center">
                  <!-- <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star-half-o"></i>
                  <i class="fa fa-star-half-o"></i> -->
                  <h3>Eksotik - BR</h3>
                  <h5>Rp.500.00</h5>
                </div>
              </div>

              <div class="sm-col-5">
                <div class="product-top">
                  <div class="thumb-img">
                    <a href="produk.html"><img width="100%" src="<?= base_url() ?>assets/img/lg-2.png" class="gambar1"></a>
                    <a href="produk.html"><img width="100%" src="<?= base_url() ?>assets/img/lg-3.png" class="gambar2"></a>
                  </div>
                  <div class="overlay">
                    <a class="btn btn-secondary" href="produk.html"><i class="fa fa-eye" title="Quick View"></i></a>
                    <a class="btn btn-secondary" href="#"><i class="fa fa-heart-o" title="Wishlist"></i></a>
                    <a class="btn btn-secondary" href="#"><i class="fa fa-shopping-cart" title="Shopping"></i></a>
                  </div>
                </div>

                <div class="product-buttom text-center">
                  <!-- <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star-half-o"></i>
                  <i class="fa fa-star-half-o"></i> -->
                  <h3>Eksotik - BR</h3>
                  <h5>Rp.500.00</h5>
                </div>
              </div>

            </div>
          </div>
        </div>
        <div id="column-4" data-tab-content>
          <div class="container">
            <div class="row">
              <div class="col-md-3">
                <div class="product-top">
                  <div class="thumb-img">
                    <a href="produk.html"><img width="100%" src="<?= base_url() ?>assets/img/gl.jpeg" class="gambar1"></a>
                    <a href="produk.html"><img width="100%" src="<?= base_url() ?>assets/img/lg-2.png" class="gambar2"></a>
                  </div>

                  <div class="overlay">
                    <a class="btn btn-secondary" href="produk.html"><i class="fa fa-eye" title="Quick View"></i></a>
                    <a class="btn btn-secondary" href="#"><i class="fa fa-heart-o" title="Wishlist"></i></a>
                    <a class="btn btn-secondary" href="#"><i class="fa fa-shopping-cart" title="Shopping"></i></a>
                  </div>
                </div>

                <div class="product-buttom text-center">
                  <!-- <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-half-o"></i> -->
                  <h3>Eksotik - GSL</h3>
                  <h5>Rp. 8,000,000</h5>
                </div>
              </div>


              <div class="col-md-3">
                <div class="product-top">
                  <div class="thumb-img">
                    <a href="produk.html"><img width="100%" src="<?= base_url() ?>assets/img/lg-3.png" class="gambar1"></a>
                    <a href="produk.html"><img width="100%" src="<?= base_url() ?>assets/img/lg-2.png" class="gambar2"></a>
                  </div>

                  <div class="overlay">
                    <a class="btn btn-secondary" href="produk.html"><i class="fa fa-eye" title="Quick View"></i></a>
                    <a class="btn btn-secondary" href="#"><i class="fa fa-heart-o" title="Wishlist"></i></a>
                    <a class="btn btn-secondary" href="#"><i class="fa fa-shopping-cart" title="Shopping"></i></a>
                  </div>
                </div>

                <div class="product-buttom text-center">
                  <!-- <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-half-o"></i> -->
                  <h3>Eksotik - GSL</h3>
                  <h5>Rp. 8,000,000</h5>
                </div>
              </div>


              <div class="col-md-3">
                <div class="product-top">
                  <div class="thumb-img">
                    <a href="produk.html"><img width="100%" src="<?= base_url() ?>assets/img/lg-4.jpeg" class="gambar1"></a>
                    <a href="produk.html"><img width="100%" src="<?= base_url() ?>assets/img/lg-3.png" class="gambar2"></a>
                  </div>

                  <div class="overlay">
                    <a class="btn btn-secondary" href="produk.html"><i class="fa fa-eye" title="Quick View"></i></a>
                    <a class="btn btn-secondary" href="#"><i class="fa fa-heart-o" title="Wishlist"></i></a>
                    <a class="btn btn-secondary" href="#"><i class="fa fa-shopping-cart" title="Shopping"></i></a>
                  </div>
                </div>

                <div class="product-buttom text-center">
                  <!-- <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-half-o"></i> -->
                  <h3>Eksotik - GSL</h3>
                  <h5>Rp. 8,000,000</h5>
                </div>
              </div>


              <div class="col-md-3">
                <div class="product-top">
                  <div class="thumb-img">
                    <a href="produk.html"><img width="100%" src="<?= base_url() ?>assets/img/lg-4.jpeg" class="gambar1"></a>
                    <a href="produk.html"><img width="100%" src="<?= base_url() ?>assets/img/lg-3.png" class="gambar2"></a>
                  </div>

                  <div class="overlay">
                    <a class="btn btn-secondary" href="produk.html"><i class="fa fa-eye" title="Quick View"></i></a>
                    <a class="btn btn-secondary" href="#"><i class="fa fa-heart-o" title="Wishlist"></i></a>
                    <a class="btn btn-secondary" href="#"><i class="fa fa-shopping-cart" title="Shopping"></i></a>
                  </div>
                </div>

                <div class="product-buttom text-center">
                  <!-- <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-half-o"></i> -->
                  <h3>Eksotik - GSL</h3>
                  <h5>Rp. 8,000,000</h5>
                </div>
                <br>
              </div>

              <div class="col-md-3">
                <div class="product-top">
                  <div class="thumb-img">
                    <a href="produk.html"><img width="100%" src="<?= base_url() ?>assets/img/lg-4.jpeg" class="gambar1"></a>
                    <a href="produk.html"><img width="100%" src="<?= base_url() ?>assets/img/lg-3.png" class="gambar2"></a>
                  </div>

                  <div class="overlay">
                    <a class="btn btn-secondary" href="produk.html"><i class="fa fa-eye" title="Quick View"></i></a>
                    <a class="btn btn-secondary" href="#"><i class="fa fa-heart-o" title="Wishlist"></i></a>
                    <a class="btn btn-secondary" href="#"><i class="fa fa-shopping-cart" title="Shopping"></i></a>
                  </div>
                </div>

                <div class="product-buttom text-center">
                  <!-- <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-half-o"></i> -->
                  <h3>Eksotik - GSL</h3>
                  <h5>Rp. 8,000,000</h5>
                </div>
              </div>


              <div class="col-md-3">
                <div class="product-top">
                  <div class="thumb-img">
                    <a href="produk.html"><img width="100%" src="<?= base_url() ?>assets/img/lg-4.jpeg" class="gambar1"></a>
                    <a href="produk.html"><img width="100%" src="<?= base_url() ?>assets/img/lg-3.png" class="gambar2"></a>
                  </div>

                  <div class="overlay">
                    <a class="btn btn-secondary" href="produk.html"><i class="fa fa-eye" title="Quick View"></i></a>
                    <a class="btn btn-secondary" href="#"><i class="fa fa-heart-o" title="Wishlist"></i></a>
                    <a class="btn btn-secondary" href="#"><i class="fa fa-shopping-cart" title="Shopping"></i></a>
                  </div>
                </div>

                <div class="product-buttom text-center">
                  <!-- <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-half-o"></i> -->
                  <h3>Eksotik - GSL</h3>
                  <h5>Rp. 8,000,000</h5>
                </div>
              </div>


              <div class="col-md-3">
                <div class="product-top">
                  <div class="thumb-img">
                    <a href="produk.html"><img width="100%" src="<?= base_url() ?>assets/img/lg-2.png" class="gambar1"></a>
                    <a href="produk.html"><img width="100%" src="<?= base_url() ?>assets/img/lg-3.png" class="gambar2"></a>
                  </div>
                  <div class="overlay">
                    <a class="btn btn-secondary" href="produk.html"><i class="fa fa-eye" title="Quick View"></i></a>
                    <a class="btn btn-secondary" href="#"><i class="fa fa-heart-o" title="Wishlist"></i></a>
                    <a class="btn btn-secondary" href="#"><i class="fa fa-shopping-cart" title="Shopping"></i></a>
                  </div>
                </div>

                <div class="product-buttom text-center">
                  <!-- <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star-half-o"></i>
                  <i class="fa fa-star-half-o"></i> -->
                  <h3>Eksotik - BR</h3>
                  <h5>Rp.500.00</h5>
                </div>
              </div>


              <div class="col-md-3">
                <div class="product-top">
                  <div class="thumb-img">
                    <a href="produk.html"><img width="100%" src="<?= base_url() ?>assets/img/lg-2.png" class="gambar1"></a>
                    <a href="produk.html"><img width="100%" src="<?= base_url() ?>assets/img/lg-3.png" class="gambar2"></a>
                  </div>
                  <div class="overlay">
                    <a class="btn btn-secondary" href="produk.html"><i class="fa fa-eye" title="Quick View"></i></a>
                    <a class="btn btn-secondary" href="#"><i class="fa fa-heart-o" title="Wishlist"></i></a>
                    <a class="btn btn-secondary" href="#"><i class="fa fa-shopping-cart" title="Shopping"></i></a>
                  </div>
                </div>

                <div class="product-buttom text-center">
                  <!-- <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star-half-o"></i>
                  <i class="fa fa-star-half-o"></i> -->
                  <h3>Eksotik - BR</h3>
                  <h5>Rp.500.00</h5>
                </div>
              </div>



            </div>
          </div>
        </div>

        <div id="column-3" data-tab-content>
          <div class="row">
            <div class="col-sm">
              <div class="product-top">
                <div class="thumb-img">
                  <a href="produk.html"><img width="100%" src="<?= base_url() ?>assets/img/lg-4.jpeg" class="gambar1"></a>
                  <a href="produk.html"><img width="100%" src="<?= base_url() ?>assets/img/lg-3.png" class="gambar2"></a>
                </div>

                <div class="overlay">
                  <a class="btn btn-secondary" href="produk.html"><i class="fa fa-eye" title="Quick View"></i></a>
                  <a class="btn btn-secondary" href="#"><i class="fa fa-heart-o" title="Wishlist"></i></a>
                  <a class="btn btn-secondary" href="#"><i class="fa fa-shopping-cart" title="Shopping"></i></a>
                </div>
              </div>

              <div class="product-buttom text-center">
                <!-- <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star-half-o"></i>
                  <i class="fa fa-star-half-o"></i> -->
                <h3 style="font-size: 25px;">Eksotik - GSL</h3>
                <h5 style="font-size: 18px;">Rp. 8,000,000</h5>
              </div>
            </div>

            <div class="col-sm">
              <div class="product-top">
                <div class="thumb-img">
                  <a href="produk.html"><img width="100%" src="<?= base_url() ?>assets/img/lg-4.jpeg" class="gambar1"></a>
                  <a href="produk.html"><img width="100%" src="<?= base_url() ?>assets/img/lg-3.png" class="gambar2"></a>
                </div>

                <div class="overlay">
                  <a class="btn btn-secondary" href="produk.html"><i class="fa fa-eye" title="Quick View"></i></a>
                  <a class="btn btn-secondary" href="#"><i class="fa fa-heart-o" title="Wishlist"></i></a>
                  <a class="btn btn-secondary" href="#"><i class="fa fa-shopping-cart" title="Shopping"></i></a>
                </div>
              </div>

              <div class="product-buttom text-center">
                <!-- <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star-half-o"></i>
                  <i class="fa fa-star-half-o"></i> -->
                <h3 style="font-size: 25px;">Eksotik - GSL</h3>
                <h5 style="font-size: 18px;">Rp. 8,000,000</h5>
              </div>
            </div>

            <div class="col-sm">
              <div class="product-top">
                <div class="thumb-img">
                  <a href="produk.html"><img width="100%" src="<?= base_url() ?>assets/img/lg-4.jpeg" class="gambar1"></a>
                  <a href="produk.html"><img width="100%" src="<?= base_url() ?>assets/img/lg-3.png" class="gambar2"></a>
                </div>

                <div class="overlay">
                  <a class="btn btn-secondary" href="produk.html"><i class="fa fa-eye" title="Quick View"></i></a>
                  <a class="btn btn-secondary" href="#"><i class="fa fa-heart-o" title="Wishlist"></i></a>
                  <a class="btn btn-secondary" href="#"><i class="fa fa-shopping-cart" title="Shopping"></i></a>
                </div>
              </div>

              <div class="product-buttom text-center">
                <!-- <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star-half-o"></i>
                  <i class="fa fa-star-half-o"></i> -->
                <h3 style="font-size: 25px;">Eksotik - GSL</h3>
                <h5 style="font-size: 18px;">Rp. 8,000,000</h5>
              </div>
            </div>

          </div>
        </div>

        <div id="column-1" data-tab-content>
          <div class="column-1">
            <div class="container">
              <div style=" padding: 15px 15px;" class="row">
                <div class="col-sm-3">
                  <div class="col-sm">
                    <div class="product-top">
                      <div class="thumb-img">
                        <a href="produk.html"><img width="100%" src="<?= base_url() ?>assets/img/lg-4.jpeg" class="gambar1"></a>
                        <a href="produk.html"><img width="100%" src="<?= base_url() ?>assets/img/lg-3.png" class="gambar2"></a>
                      </div>

                      <!-- <div class="overlay">
                        <a class="btn btn-secondary" href="produk.html"><i class="fa fa-eye" title="Quick View"></i></a>
                        <a class="btn btn-secondary" href="#"><i class="fa fa-heart-o" title="Wishlist"></i></a>
                        <a class="btn btn-secondary" href="#"><i class="fa fa-shopping-cart" title="Shopping"></i></a>
                      </div> -->
                    </div>

                    <!-- <div class="title-images text-center"> -->
                    <!-- <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <i class="fa fa-star-half-o"></i> -->
                    <!-- <h3 style="font-size: 25px;">Eksotik - GSL</h3>
                      <h5 style="font-size: 18px;">Rp. 8,000,000</h5>
                    </div> -->
                  </div>
                </div>
                <div class="col-sm-6">
                  <div>
                    <h3 class="names"><a href="#"> EKSOTIK - BR </a>, <a href="#"> KAYU OLAHAN</a></h3>
                    <h4>Eksotik - BR</h4>
                    <hr>
                    <p style="font-size: 12px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat debitis
                      voluptatem iusto
                      voluptatibus, nulla officia aperiam veritatis accusamus consequatur vero rerum.</p>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div>
                    <div class="price">
                      <span>Rp</span><span>9,000,000</span>
                    </div>
                    <div class="stok">
                      <p>AVAILABLE : <span class="in-stok">IN STOK</span></p>
                    </div>
                    <div class="btn-add">
                      <a href="#"><span class="link">Add to cart</span></a>
                    </div>
                    <div class="Quick_view">
                      <a class="title-quick" href="produk.html"><i class="fa fa-eye" title="Quick View"></i> Quick
                        View</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="column-1">
            <div class="container">
              <div style=" padding: 15px 15px;" class="row">
                <div class="col-sm-3">
                  <div class="col-sm">
                    <div class="product-top">
                      <div class="thumb-img">
                        <a href="produk.html"><img width="100%" src="<?= base_url() ?>assets/img/lg-4.jpeg" class="gambar1"></a>
                        <a href="produk.html"><img width="100%" src="<?= base_url() ?>assets/img/lg-3.png" class="gambar2"></a>
                      </div>

                      <!-- <div class="overlay">
                        <a class="btn btn-secondary" href="produk.html"><i class="fa fa-eye" title="Quick View"></i></a>
                        <a class="btn btn-secondary" href="#"><i class="fa fa-heart-o" title="Wishlist"></i></a>
                        <a class="btn btn-secondary" href="#"><i class="fa fa-shopping-cart" title="Shopping"></i></a>
                      </div> -->
                    </div>

                    <!-- <div class="title-images text-center"> -->
                    <!-- <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <i class="fa fa-star-half-o"></i> -->
                    <!-- <h3 style="font-size: 25px;">Eksotik - GSL</h3>
                      <h5 style="font-size: 18px;">Rp. 8,000,000</h5>
                    </div> -->
                  </div>
                </div>
                <div class="col-sm-6">
                  <div>
                    <h3 class="names"><a href="#"> EKSOTIK - BR </a>, <a href="#"> KAYU OLAHAN</a></h3>
                    <h4>Eksotik - BR</h4>
                    <hr>
                    <p style="font-size: 12px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat debitis
                      voluptatem iusto
                      voluptatibus, nulla officia aperiam veritatis accusamus consequatur vero rerum.</p>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div>
                    <div class="price">
                      <span>Rp</span><span>9,000,000</span>
                    </div>
                    <div class="stok">
                      <p>AVAILABLE : <span class="in-stok">IN STOK</span></p>
                    </div>
                    <div class="btn-add">
                      <a href="#"><span class="link">Add to cart</span></a>
                    </div>
                    <div class="Quick_view">
                      <a class="title-quick" href="produk.html"><i class="fa fa-eye" title="Quick View"></i> Quick
                        View</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>


  <!-- banner -->
  <div class="banner">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="img-hover-zoom img-hover-zoom--xyz">
            <img class="img-hover" src="<?= base_url() ?>assets/img/banner2.png" alt="Another Image zoom-on-hover effect">
          </div>
        </div>
        <div class="col-md-6">
          <div class="img-hover-zoom img-hover-zoom--xyz">
            <img class="img-hover" src="<?= base_url() ?>assets/img/banner1.png" alt="Another Image zoom-on-hover effect">
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- akhir banner -->

   <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
  <!-- icon -->


  <!-- short by -->

  <script>const tabs = document.querySelectorAll('[data-tab-target]')
    const tabContents = document.querySelectorAll('[data-tab-content]')

    tabs.forEach(tab => {
      tab.addEventListener('click', () => {
        const target = document.querySelector(tab.dataset.tabTarget)
        tabContents.forEach(tabContent => {
          tabContent.classList.remove('active')
        })
        tabs.forEach(tab => {
          tab.classList.remove('active')
        })
        tab.classList.add('active')
        target.classList.add('active')
      })
    })</script>
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <!-- <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js'></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script> -->



  <!-- javaScript Boot -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>

  <!-- Optional JavaScript -->

  <!-- scroll -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script>var btn = $('#button');

    $(window).scroll(function () {
      if ($(window).scrollTop() > 300) {
        btn.addClass('show');
      } else {
        btn.removeClass('show');
      }
    });

    btn.on('click', function (e) {
      e.preventDefault();
      $('html, body').animate({ scrollTop: 0 }, '300');
    });</script>
  <!-- scroll -->

  <script>
    function openCity(evt, cityName) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }
      document.getElementById(cityName).style.display = "block";
      evt.currentTarget.className += " active";
    }
  </script>
  <script>
    function openTab(evt, tabName) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }
      document.getElementById(tabName).style.display = "block";
      evt.currentTarget.className += " active";
    }

    // Get the element with id="defaultOpen" and click on it
    // document.getElementById("defaultOpen").click();
  </script>

  <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>


  <!-- acordion -->
  <script>
    var acc = document.getElementsByClassName("accordion-2");
    var i;

    for (i = 0; i < acc.length; i++) {
      acc[i].addEventListener("click", function () {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.maxHeight) {
          panel.style.maxHeight = null;
        } else {
          panel.style.maxHeight = panel.scrollHeight + "px";
        }
      });
    }
  </script>
  <!-- acordion -->
  <!-- search -->
  <script>
    $(document).ready(function () {
      $(".fa-search").click(function () {
        $("icon").toggleClass("active");
        $("input[type='text']").toggleClass("active");
      });
    });
  </script>

  <script>
    const sidedrawer = document.querySelector(".sidedrawer");
    const backdrop = document.querySelector(".backdrop")
    const bars = document.getElementById("bars");

    bars.addEventListener("click", () => {
      sidedrawer.classList.add('active');
      backdrop.classList.add('show');
    });

    backdrop.addEventListener('click', () => {
      sidedrawer.classList.remove("active");
      backdrop.classList.remove("show");
    });
  </script>

  <!-- stepper -->
  <script>
    var inc = document.getElementsByClassName("stepper");
    for (i = 0; i < inc.length; i++) {
      var incI = inc[i].querySelector("input"),
        id = incI.getAttribute("id"),
        min = incI.getAttribute("min"),
        max = incI.getAttribute("max"),
        step = incI.getAttribute("step");
      document
        .getElementById(id)
        .previousElementSibling.setAttribute(
          "onclick",
          "stepperInput('" + id + "', -" + step + ", " + min + ")"
        );
      document
        .getElementById(id)
        .nextElementSibling.setAttribute(
          "onclick",
          "stepperInput('" + id + "', " + step + ", " + max + ")"
        );
    }

    function stepperInput(id, s, m) {
      var el = document.getElementById(id);
      if (s > 0) {
        if (parseInt(el.value) < m) {
          el.value = parseInt(el.value) + s;
        }
      } else {
        if (parseInt(el.value) > m) {
          el.value = parseInt(el.value) + s;
        }
      }
    }
  </script>

