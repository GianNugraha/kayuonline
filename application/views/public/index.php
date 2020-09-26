 <?php
// foreach ($productKO as $our): 
//     echo "<pre>";
//     print_r($our);
//     echo "</pre>";
// endforeach;
    // die();
?>  
<!-- slider -->
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="<?= base_url('assets/img/Slider-1.png'); ?>" alt=" First slide">
        <div class="carousel-caption d-none d-md-block">
          <h1>Kayu Online</h1>
          <h3>Suplayer Kayu Terbaik Di Indonesia</h3>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="<?= base_url('assets/img/Slider-2.png'); ?>" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="<?= base_url('assets/img/Slider-3.png'); ?>" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <!-- filter -->

  <!-- Nav tabs -->
  <br>
  <div class="tab">
    <button class="tablinks" onclick="openCity(event, 'kayuolahan')" id="defaultOpen">Kayu olahan</button>
    <button class="tablinks" onclick="openCity(event, 'decking')">Decking</button>
    <button class="tablinks" onclick="openCity(event, 'kusen')">Kusen</button>
    <button class="tablinks" onclick="openCity(event, 'pintu')">Pintu</button>
    <button class="tablinks" onclick="openCity(event, 'lis_profil')">Lis Profil</button>
    <button class="tablinks" onclick="openCity(event, 'tangga')">Tangga</button>
  </div>

  <br>
  <br>

  <div id="kayuolahan" class="tabcontent">
    <div class="container">
      <div class="row">
        <?php
        if (!empty($productKO)){
        foreach ($productKO as $key): 
            ?>
        <div class="col-md-3">
          <div class="product-top">
            <div class="thumb-img">
              <a href="<?php echo base_url('produk?kategori=KO&nama='.$key->name)?>"><img width="100%" src="<?= base_url().$key->image; ?>" class="gambar1"></a>
              <!-- <a href="<?php echo base_url('produk?kategori=KO&nama='.$key->name)?>"><img width="100%" src="<?= base_url('assets/img/lg-3.png'); ?>" class="gambar2"></a> -->
            </div>
            <!-- <div class="overlay">
              <div style="margin-left: 17px; margin-bottom: -5px; margin-top: 10px;" id="bars">
                <span><i class="fa fa-eye" title="Quick View"></i></span>
              </div> <a class="btn btn-secondary" href="#"><i class="fa fa-heart-o" title="Wishlist"></i></a>
              <a class="btn btn-secondary" href="viewcart.html"><i class="fa fa-shopping-cart" title="Shopping"></i></a>
            </div> -->
          </div>

          <div class="product-buttom text-center">
            <h3><?= $key->name ?></h3>
            <h5><?php if ($key->max_price != $key->min_price) { ?>
                <p class="description">Rp. <?= number_format($key->min_price,2,'.',','); ?> - Rp. <?= number_format($key->max_price,2,'.',','); ?></p>
            <?php }else{ ?>
                <p class="description">Rp. <?= number_format($key->max_price,2,'.',','); ?></p>
            <?php } ?>
        </h5>
          </div>
          <br />
        </div>
    <?php endforeach;
    }
    else{
    ?>
    <center>
        <span><h1 style="font-size: 40px;">Coming Soon !</h1></span>
    </center>
<?php } ?>

      </div>
    </div>
  </div>

  <div id="decking" class="tabcontent">
    <div class="container">
      <div class="row">
        <?php
        if (!empty($productDK)){
        foreach ($productDK as $key): 
            ?>
        <div class="col-md-3">
          <div class="product-top">
            <div class="thumb-img">
              <a href="<?php echo base_url('produk?kategori=DK&nama='.$key->name)?>"><img width="100%" src="<?= base_url().$key->image; ?>" class="gambar1"></a>
              <!-- <a href="<?php echo base_url('produk?kategori=DK&nama='.$key->name)?>"><img width="100%" src="<?= base_url('assets/img/lg-3.png'); ?>" class="gambar2"></a> -->
            </div>
            <!-- <div class="overlay">
              <div style="margin-left: 17px; margin-bottom: -5px; margin-top: 10px;" id="bars">
                <span><i class="fa fa-eye" title="Quick View"></i></span>
              </div> <a class="btn btn-secondary" href="#"><i class="fa fa-heart-o" title="Wishlist"></i></a>
              <a class="btn btn-secondary" href="viewcart.html"><i class="fa fa-shopping-cart" title="Shopping"></i></a>
            </div> -->
          </div>

          <div class="product-buttom text-center">
            <h3><?= $key->name ?></h3>
            <h5><?php if ($key->max_price != $key->min_price) { ?>
                <p class="description">Rp. <?= number_format($key->min_price,2,'.',','); ?> - Rp. <?= number_format($key->max_price,2,'.',','); ?></p>
            <?php }else{ ?>
                <p class="description">Rp. <?= number_format($key->max_price,2,'.',','); ?></p>
            <?php } ?>
        </h5>
          </div>
          <br />
        </div>
    <?php endforeach;
    }
    else{
    ?>
    <center>
        <span><h1 style="font-size: 40px;">Coming Soon !</h1></span>
    </center>
<?php } ?>

      </div>
    </div>
  </div>

  <div id="kusen" class="tabcontent">
    <div class="container">
      <h2 style="text-align: center; font-weight: bold;">COMING SOON !</h2>
    </div>
  </div>

  <div id="pintu" class="tabcontent">
    <div class="container">
      <h2 style="text-align: center; font-weight: bold;">COMING SOON !</h2>
    </div>
  </div>

  <div id="lis_profil" class="tabcontent">
    <div class="container">
      <h2 style="text-align: center; font-weight: bold;">COMING SOON !</h2>
    </div>
  </div>

  <div id="tangga" class="tabcontent">
    <div class="container">
      <h2 style="text-align: center; font-weight: bold;">COMING SOON !</h2>
    </div>
  </div>



  <!-- banner -->
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="img-hover-zoom img-hover-zoom--xyz">
          <img class="img-hover" src="<?= base_url('assets/img/banner2.png'); ?>" alt="Another Image zoom-on-hover effect">
        </div>
      </div>
      <div class="col-md-6">
        <div class="img-hover-zoom img-hover-zoom--xyz">
          <img class="img-hover" src="<?= base_url('assets/img/banner1.png'); ?>" alt="Another Image zoom-on-hover effect">
        </div>
      </div>
    </div>
  </div>

  <!-- akhir banner -->