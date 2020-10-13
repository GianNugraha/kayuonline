<div class="content">
    <div class="container-fluid">
        <?php
        if (!empty($this->session->flashdata('msg'))) {
            $message = $this->session->flashdata('msg'); ?>
                <div class="alert alert-<?php echo $message['class']?>" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <center><?php echo $message['message'] ?></center>
                </div>
                <?php } ?>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card card-plain">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title mt-0"> Daftar Produk Stok Minim</h4>
                                <!-- <p class="card-category"> </p> -->
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                    	<?php if (!empty($stokminim)) { ?>
                                        <thead>
                                            <th>No</th>
						                    <th>Produk</th>
						                    <th>Ukuran</th>
						                    <th>Stok</th>
                                        </thead>
                                        <tbody>
                                        <?php $no=1; foreach ($stokminim as $key) { ?>
                                        	<td style="background: red"><?= $no;?></td>
                                            <td style="background: red"><?= $key->product_id;?></td>
                                            <td style="background: red"><?= $key->product_size_id;?></td>
                                            <td style="background: red"><?= $key->stock;?></td>
                                        </tbody>
                                        <?php $no+=1; } ?>
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