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
          					<h4>Tambah Stok, Harga, Ukuran Baru</h4>
          					<p class="card-category">Edit Produk kayu online</p>
          				</div>
          				<div class="card-body">
          					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          				</div>
          			</div>
          		</div>
          	</div>
	</div>
</div>