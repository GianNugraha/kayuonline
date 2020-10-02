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
          		<div class="col-md-6">
          			<div class="card">
          				<div class="card-header card-header-primary">
          					<h4>Tambah Stok, Harga, Ukuran Baru</h4>
          					<p class="card-category">Hanya untuk harga, ukuran dan stok</p>
          				</div>
	          				<div class="card-body">
	          					<div class="row">
	          						<div class="col-md-4">
	          							<div class="form-group">
	          								<label>Stok</label>
	          								<input type="text" name="stok" class="form-control">
	          							</div>
	          						</div>
	          					</div>
	          					<div class="row">
	          						<div class="col-md-4">
	          							<div class="form-group">
	          								<label>Harga</label>
	          								<input type="text" name="harga" class="form-control">
	          							</div>
	          						</div>
	          					</div>
	          					<div class="row">
	          						<div class="col-md-4">
	          							<div class="form-group">
	          								<label>Ukuran</label>
	          								<input type="text" name="ukuran" class="form-control">
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