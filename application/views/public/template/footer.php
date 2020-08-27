<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-3 col-lg-3">
                <center><a href="<?php echo base_url()?>"><img src="<?php echo base_url('assets/images/Group-151.png')?>" style="margin-top: 40px; margin-bottom: 40px; width: 200px; height: 220px;" class="img-fluid" alt="Responsive image"></a></center>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-9">
                <div class="form-group">
                    <input type="text" name="nama" class="form-control" placeholder="Masukkan Email Anda Untuk Berlangganan Email Kami" required>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <input type="submit" name="Subscribe" class="btn btn-block btn-info" value="Subscribe">
                    </div>
                </div>
            </div>
            <div class="col-sm-2 col-md-2 col-lg-2">
                <div class="">
                    <h4><span>&copy; 2020 Kayuonline</span></h4>
                </div>
                 <div class="">
                    <span><a href="#"><img style="height: 40px; width: 40px;" src="<?php echo base_url('assets/images/facebook.png')?>"></a></span>
                    <span><a href="#"><img style="height: 40px; width: 40px;" src="<?php echo base_url('assets/images/instagram.png')?>"></a></span>
                </div>
            </div>
            <div class="col-sm-1 col-md-1 col-lg-1">
                <div class="">
                    <a href="<?php echo base_url('faq')?>"><h4><span>FAQ</span></h4></a>
                </div>
            </div>
            <div class="col-sm-2 col-md-2 col-lg-2">
                <div class="">
                    <a href="<?php echo base_url('kebijakan-privasi')?>"><h4><span>Kebijakan Privasi</span></h4></a>
                </div>
            </div>
            <div class="col-sm-2 col-md-2 col-lg-2">
                <div class="">
                    <a href="<?php echo base_url('layanan-pelanggan')?>"><h4><span>Layanan Pelanggan</span></h4></a>
                </div>
            </div>
            <div class="col-sm-2 col-md-2 col-lg-2">
               <!--  <div class="">
                    <span> <img style="height: 130%; width: 130%" src="images/bank.png"> </span>
                </div> -->
            </div>
        </div>
        <div class="row">
            <div class="">
                <center><span> <img class="bank" src="<?php echo base_url('assets/images/bank.png')?>"> </span></center>
            </div>
        </div>
    </div>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <a href="https://api.whatsapp.com/send?phone=6281295704758&text=Halo Admin, Bisa Bantu Saya?" class="float" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
    </a>
</footer>
<!--end footer-->


<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-1.10.2.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/jquery.easing.1.3.js')?>"></script>
<script src="<?php echo base_url('assets/js/retina-1.1.0.min.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.cookie.js')?>"></script> <!-- jQuery cookie -->
<script type="text/javascript" src="<?php echo base_url('assets/js/styleswitch.js')?>"></script> <!-- Style Colors Switcher -->
<script src="<?php echo base_url('assets/js/jquery.fractionslider.js')?>" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.smartmenus.min.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.smartmenus.bootstrap.min.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.jcarousel.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/jflickrfeed.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.magnific-popup.min.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.isotope.min.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/swipe.js')?>"></script>
<!-- <script type="text/javascript" src="<?php //echo base_url('assets/js/jquery-scrolltofixed-min.js')?>"></script> -->
<script src="<?php echo base_url('assets/js/main.js')?>"></script>

<!-- Start Style Switcher -->
<!-- <div class="switcher"></div> -->
<!-- End Style Switcher -->
<script>
    $(window).load(function(){
        $('.slider').fractionSlider({
            'fullWidth': 			true,
            'controls': 			true,
            'responsive': 			true,
            'dimensions': 			"1720,450",
            'timeout' :             5000,
            'increase': 			true,
            'pauseOnHover': 		true,
            'slideEndAnimation': 	false,
            'autoChange':           true
        });
    });
</script>

    <!-- WARNING: Wow.js doesn't work in IE 9 or less -->
    <!--[if gte IE 9 | !IE ]><!-->
        <script type="text/javascript" src="<?php echo base_url('assets/js/wow.min.js')?>"></script>
        <script>
            // WOW Animation
            new WOW().init();
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
        document.getElementById("defaultOpen").click();
    </script>

    <script type="text/javascript">
        

    function openSearch() {
        document.getElementById("myOverlay").style.display = "block";
    }

    function closeSearch() {
        document.getElementById("myOverlay").style.display = "none";
    }

    </script>
    <![endif]-->

</body>
</html>