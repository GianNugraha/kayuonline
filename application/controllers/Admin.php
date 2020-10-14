<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Admin extends CI_Controller {
	
	function __construct(){
		parent::__construct();		
		$this->load->model('m_kayu_online');

	}

	public function index()
	{
		if (isset($_SESSION['logged_in']) and $_SESSION['role'] =='admin') {
			$data['produk'] = $this->m_kayu_online->getProduk();
			$data['content'] = 'admin/dashboard';
			$data['allNotif'] = $this->m_kayu_online->getAllNotif();
			$this->load->view('admin/template/layout',$data);

		} else {
			redirect('login');
		}
		
	}

	public function profil()
	{
		$data['users'] = $this->m_kayu_online->getUsers();
		// if($_POST){
		// 	$data['discipline'] = $this->toornament_model->getToornamentByCategory();
		// }else{
		// 	$data['discipline'] = $this->toornament_model->getAllGame();
		// }
		
		// $data['toko'] = $this->m_kayu_online->getAllProduk();

		// $data['users'] = $this->m_kayu_online->getUsers();
		// $data['content'] = 'daftar-tabel';
		// $this->load->view('template/layout',$data);
		$data['allNotif'] = $this->m_kayu_online->getAllNotif();
		$data['content'] = 'admin/profil';
		$this->load->view('admin/template/layout',$data);
	}

	public function tabel()
	{
		$data['allNotif'] = $this->m_kayu_online->getAllNotif();
		$data['admin'] = $this->m_kayu_online->getAdmin();
		$data['user'] = $this->m_kayu_online->getUser();
		$data['product'] = $this->m_kayu_online->getProduct();
		$data['thumbnail'] = $this->m_kayu_online->getAllThumbnail();
		$data['content'] = 'admin/daftar-tabel';
		$this->load->view('admin/template/layout',$data);
	}

	public function icon()
	{
		$data['allNotif'] = $this->m_kayu_online->getAllNotif();
		$data['produk'] = $this->m_kayu_online->getProduk();
		$data['content'] = 'admin/icon';
		$this->load->view('admin/template/layout',$data);
	}

	public function status_transaksi()
	{
		$data['allNotif'] = $this->m_kayu_online->getAllNotif();
		$data['produk'] = $this->m_kayu_online->getProduk();
		$data['buktiTf'] 	= $this->m_kayu_online->getBuktiTf('proses_3');
		$data['TFDone'] 	= $this->m_kayu_online->getBuktiTf('done');
		$data['TFTolak'] 	= $this->m_kayu_online->getBuktiTf('tolak');
		$data['content'] = 'admin/status-transaksi';
		$this->load->view('admin/template/layout',$data);
	}

	public function daftar_admin()
	{
		$data['adminDaftar'] = $this->m_kayu_online->getDaftarAdmin();
		$data['allNotif'] = $this->m_kayu_online->getAllNotif();
		$data['adminBlok'] = $this->m_kayu_online->getDaftarBlok();
		$data['content'] = 'admin/daftar-admin';
		$this->load->view('admin/template/layout',$data);
	}

	public function daftar_bukti_tf()
	{
		// $data['getOrder'] 	=
		$data['buktiTf'] 	= $this->m_kayu_online->getBuktiTf('proses_3');
		$data['TFDone'] 	= $this->m_kayu_online->getBuktiTf('done');
		$data['TFTolak'] 	= $this->m_kayu_online->getBuktiTf('tolak');
		$data['allNotif'] 	= $this->m_kayu_online->getAllNotif();
		$data['content'] 	= 'admin/daftar-transfer';
		$this->load->view('admin/template/layout',$data);
	}

	public function pemberitahuan()
	{
		$data['allNotif'] = $this->m_kayu_online->getAllNotif();
		$data['users'] = $this->m_kayu_online->getUsers();
		$data['content'] = 'admin/pemberitahuan';
		$this->load->view('admin/template/layout',$data);
	}

	public function add_admin()
	{
		$data['allNotif'] = $this->m_kayu_online->getAllNotif();
		$data['content'] = 'admin/add-admin';
		$this->load->view('admin/template/layout',$data);
	}
	public function add_produk()
	{
		$data['allNotif'] = $this->m_kayu_online->getAllNotif();
		$data['content'] = 'admin/add-produk';
		$data['allProductCategories'] = $this->m_kayu_online->getAllProductCategories();
		$data['allProductSizes'] = $this->m_kayu_online->getAllProductSizes();
		$data['allProductHasSizes'] = $this->m_kayu_online->getAllProductHasSizes();
		$data['allProductImages'] = $this->m_kayu_online->getAllProductImages();
		$this->load->view('admin/template/layout',$data);
	}

	public function add_harga_ukuran_stok()
	{
		$data['allNotif'] = $this->m_kayu_online->getAllNotif();
		$data['productsizes'] = $this->m_kayu_online->getAllProductSizes();
		$data['id'] = $this->input->get('id');
		$data['content'] = 'admin/add-harga-ukuran-stok';
		$this->load->view('admin/template/layout',$data);
	}
	public function add_thumbnail()
	{
		$data['allNotif'] = $this->m_kayu_online->getAllNotif();
		$data['id'] = $this->input->get('id');
		$data['allProductCategories'] = $this->m_kayu_online->getAllProductCategories();
		$data['allProducts'] = $this->m_kayu_online->getAllProducts();
		$data['content'] = 'admin/add-thumbnail';
		$this->load->view('admin/template/layout',$data);
	}

	public function proses_add_thumbnail()
	{
		$result = $this->m_kayu_online->thumbnail_upload_perid();
		$gambar = $result['image'];
		$product_id = $this->input->post('product_id');
		$nama = $this->input->post('nama');
		$kategori = $this->input->post('kategori');
		$kode_produk = $this->input->post('kode_produk');
		$data = [
			'kode_product' => $kategori,
			'kode_kayu' => $kode_produk,
			'name' => $nama,
			'product_id' => $product_id,
			'thumbnail' => $gambar,
		];
		$this->m_kayu_online->input_thumbnail($data);
		$this->session->set_flashdata('msg', array('class' => 'info', 'message'=> 'Tambah Berhasil'));
				redirect(base_url("admin/tabel"));
	}

	public function proses_edit_stok_harga_ukuran($product_id,$product_size_id)
	{
		$product_id = $this->dataencryption->enc_dec("decrypt", $product_id);
		$product_size_id = $this->dataencryption->enc_dec("decrypt", $product_size_id);
		$stok = $this->input->post('stok');
		$harga = $this->input->post('harga');
		$ukuran = $this->input->post('id_ukuran');
		$data_has_sizes = [
			'product_size_id' => $ukuran,
			'stock' => $stok,
			'price' => $harga,
		];
		// $data_sizes = [
		// 	'size' => $ukuran,
		// ];
		$this->m_kayu_online->update_stok_harga_ukuran($product_id,$product_size_id,$data_has_sizes);
		$this->session->set_flashdata('msg', array('class' => 'info', 'message'=> 'Edit Berhasil'));
				redirect(base_url("admin/tabel"));
	}

	public function proses_add_harga_ukuran_stok()
	{
		$stok = $this->input->post('stok');
		$harga = $this->input->post('harga');
		$ukuran = $this->input->post('ukuran');
		$product_id = $this->input->post('product_id');

		$data_has_sizes = [
			'product_id' => $product_id,
			'product_size_id' => $ukuran,
			'stock' => $stok,
			'price' => $harga,
		];
		// $data_sizes = [
		// 	'size' => $ukuran,
		// ];
		$this->m_kayu_online->input_harga_ukuran_stok($data_has_sizes);
		$this->session->set_flashdata('msg', array('class' => 'info', 'message'=> 'Tambah Ukuran Harga & Stok Berhasil'));
				redirect(base_url("admin/tabel"));
	}

	public function proses_edit_depan($param)
	{
		$id = $this->dataencryption->enc_dec("decrypt", $param);
		$sku = $this->input->post('sku');
		$kategori = $this->input->post('kategori');
		$nama = $this->input->post('nama');
		$deskripsi = $this->input->post('deskripsi');
		$detail = $this->input->post('detail');
		$data = [
			'product_code' => $sku,
			'category_id' => $kategori,
			'name' => $nama,
			'description' => $deskripsi,
			'detail' => $detail,
		];
		$this->m_kayu_online->update_produk($data, $id);
		$this->session->set_flashdata('msg', array('class' => 'info', 'message'=> 'Tambah Ukuran Harga & Stok Berhasil'));
				redirect(base_url("admin/tabel"));
	}


	public function proses_add_produk()
	{
		$result = $this->m_kayu_online->product_upload();
		$gambar = $result['image'];
		// $hasil = $this->m_kayu_online->thumbnail_upload();
			// echo "<pre>";
			// print_r($gambar);
			// echo "</pre>";
			// die();
		// $thumbnail = $hasil['thumbnail'];
		$detail = $this->input->post('detail');
		$category_code = $this->input->post('kategori');
		$namaproduk = $this->input->post('nama-produk');
		$sku = $this->input->post('sku');
		$stok = $this->input->post('stok');
		$harga = $this->input->post('harga');
		$ukuran = $this->input->post('ukuran');
		$id_ukuran = $this->input->post('id_ukuran');
		$deskripsi = $this->input->post('deskripsi');
		$data_product = [
			'detail' => $detail,
			'description' => $deskripsi,
			'category_id' => $category_code,
			'product_code' => $sku,
			'name' => $namaproduk,
		];
		if ($gambar != 'Error') {
			$dapetproduk = $this->m_kayu_online->input_product($data_product);
			$data['getIDProduct'] = $this->m_kayu_online->getIDProduct()->result_array();
			// print_r($data['getIDProduct']);
			foreach ($data['getIDProduct'] as $id) {
				$id_add = $id['id'];
			}
			$data_has_sizes = [
				'product_id' => $id_add,
				'product_size_id' => $id_ukuran,
				'stock' => $stok,
				'price' => $harga,
			];
			// $data_sizes = [
			// 	'size' => $ukuran,
			// ];

			$data_images = [
				'product_id' => $id_add,
				'image' => $gambar,
			];
			// ditulis get disini
			// print_r($data);
			// print_r($datas);
			// print_r($datass);
			// die();
			
				$simpan = $this->m_kayu_online->input_produk($data_has_sizes, $data_images);
			// $simpan = $this->m_kayu_online->input_produk($data, $datas, $datass);
				$this->session->set_flashdata('msg', array('class' => 'info', 'message'=> 'Tambah Produk Sukses'));
				redirect(base_url("admin/tabel"));
		}
		else{
		// $simpan = $this->m_kayu_online->input_produk($data, $datas, $datass);
			$this->session->set_flashdata('msg', array('class' => 'danger', 'message'=> 'Tambah Produk Gagal, Silahkan Upload Gambar yang lain'));
			redirect(base_url("admin/tabel"));
		}
	}

	public function proses_add_ukuran()
	{
		$ukuran = $this->input->post('ukuran');
		$data = [
			
			'size' => $ukuran,
		];

		$simpan = $this->m_kayu_online->input_ukuran($data);
		// $simpan = $this->m_kayu_online->input_produk($data, $datas, $datass);
		$this->session->set_flashdata('msg', array('class' => 'info', 'message'=> 'Tambah Ukuran Berhasil'));
				redirect(base_url("admin/add-produk"));
	}

	public function proses_add_admin(){
		$data['allNotif'] = $this->m_kayu_online->getAllNotif()->result_array();
		$admin_reg = ($data['allNotif'][0]['admin_reg']);

		if ($this->input->post('jenis') != 'reg') {
			$nama = $this->input->post('nama');
			$email = $this->input->post('email');
			$namaPengguna = $this->input->post('nama-pengguna');
			$sandi = $this->input->post('sandi');
			$sandi2 = $this->input->post('sandi-2');
			$hp = $this->input->post('hp');

			$data = array(
				'nama' => $nama,
				'email' => $email,
				'username' => $namaPengguna,
				'password' => $this->dataencryption->enc_dec("encrypt", $sandi),
				'no_hp' => $hp,
				'role' => 'admin',
				'status' => 'active'
			);

			$cek_user = $this->m_kayu_online->cek_admin($namaPengguna);

			if($cek_user > 0){
				$this->session->set_flashdata('msg', array('class' => 'danger', 'message'=> 'nama pengguna sudah digunakan, silahkan pilih opsi nama lain'));
				redirect(base_url("admin/add-admin"));
			}
			else {
				if ($sandi === $sandi2) {
					$this->m_kayu_online->input_data_admin($data,'users');
					$this->session->set_flashdata('msg', array('class' => 'info', 'message'=> 'Tambah Data Admin Berhasil !'));
					redirect(base_url("admin/tabel"));
				}
				else{
					$this->session->set_flashdata('msg', array('class' => 'danger', 'message'=> 'Kata Sandi dan Konfirmasi Kata Sandi Tidak Sama, Silahkan Coba Lagi'));
					redirect(base_url("admin/add-admin"));
				}
			}
		}
		else{
			$nama = $this->input->post('nama');
			$email = $this->input->post('email');
			$namaPengguna = $this->input->post('nama-pengguna');
			$sandi = $this->input->post('sandi');
			$sandi2 = $this->input->post('sandi-2');
			$hp = $this->input->post('hp');

			$data = array(
				'nama' => $nama,
				'email' => $email,
				'username' => $namaPengguna,
				'password' => $this->dataencryption->enc_dec("encrypt", $sandi),
				'no_hp' => $hp,
				'role' => 'admin',
				'status' => 'disactive'
			);

			if($cek_user > 0){
				$this->session->set_flashdata('msg', array('class' => 'danger', 'message'=> 'nama pengguna sudah digunakan, silahkan pilih opsi nama lain'));
				redirect(base_url("login"));
			}
			else {
				if ($sandi === $sandi2) {
					$this->m_kayu_online->update_Notifikasi($admin_reg, 'tambah');
					$cek_user = $this->m_kayu_online->cek_admin($namaPengguna);
					$this->m_kayu_online->input_data_admin($data,'users');
					$this->session->set_flashdata('msg', array('class' => 'info', 'message'=> 'Daftar Admin Berhasil, Sedang Menunggu di Setujui !'));
					redirect(base_url("login"));
				}
				else{
					$this->session->set_flashdata('msg', array('class' => 'danger', 'message'=> 'Kata Sandi dan Konfirmasi Kata Sandi Tidak Sama, Silahkan Coba Lagi'));
					redirect(base_url("login"));
				}
			}
		}
	}

	public function konfirmasi_admin($id, $param){
		$data['allNotif'] = $this->m_kayu_online->getAllNotif()->result_array();
		$admin_reg = ($data['allNotif'][0]['admin_reg']);
		$id = $this->dataencryption->enc_dec("decrypt", $id);
		if ($param == 'terima') {
			$data = array(
				'status' => 'active'
			);
			$this->m_kayu_online->terima_admin($id, $data);
			$this->m_kayu_online->update_Notifikasi($admin_reg, 'kurang', 'admin_reg');
			$this->session->set_flashdata('msg', array('class' => 'info', 'message'=> 'Pendaftaran Admin Di Izinkan'));
			redirect(base_url("admin/daftar-admin")); 
		}
		else{
			$data = array(
				'status' => 'blok'
			);
			$this->m_kayu_online->update_Notifikasi($admin_reg, 'kurang', 'admin_reg');
			$this->m_kayu_online->tolak_admin($id, $data );
			$this->session->set_flashdata('msg', array('class' => 'danger', 'message'=> 'Pendaftaran Admin Tidak Di izinkan'));
			redirect(base_url("admin/daftar-admin"));
		}
		
	}

	public function proses_bukti($id, $param, $id_pemesan){
		$id_pemesan = $this->dataencryption->enc_dec("decrypt", $id_pemesan);
		$data['allNotif'] = $this->m_kayu_online->getAllNotif()->result_array();
		$bukti_transfer = ($data['allNotif'][0]['bukti_transfer']);
		$id = $this->dataencryption->enc_dec("decrypt", $id);
		if ($param == 'terima') {
			$data = array(
				'status' => 'done'
			);
			$this->m_kayu_online->status_pesan($id_pemesan);
			$this->m_kayu_online->terima_transfer($id, $data);
			$this->m_kayu_online->update_Notifikasi($bukti_transfer, 'kurang', 'bukti_transfer');
			$this->session->set_flashdata('msg', array('class' => 'info', 'message'=> 'Bukti Pembayaran di Sah kan'));
			redirect(base_url("admin/daftar-bukti-tf")); 
		}
		else{
			$data = array(
				'status' => 'tolak'
			);
			$this->m_kayu_online->update_Notifikasi($bukti_transfer, 'kurang', 'bukti_transfer');
			$this->m_kayu_online->tolak_bukti($id, $data );
			$this->session->set_flashdata('msg', array('class' => 'danger', 'message'=> 'Bukti Transfer di Tolak'));
			redirect(base_url("admin/daftar-bukti-tf"));
		}
		
	}

	public function delete($id)
	{
    // Memanggil function hapus_produk dengan parameter $id di dalam ProductModel dan menampungnya di variabel hapus
    $data['allNotif'] = $this->m_kayu_online->getAllNotif($id);
    $id = $this->dataencryption->enc_dec("decrypt", $id);
    $this->m_kayu_online->hapus_produk($id);
	$this->session->set_flashdata('msg', array('class' => 'info', 'message'=> 'Hapus Data Berhasil !'));
	redirect(base_url("admin/tabel")); 
	} 

	public function edit($id){
		$data['allNotif'] = $this->m_kayu_online->getAllNotif();
		$id = $this->dataencryption->enc_dec("decrypt", $id);
		$data['admin'] = $this->m_kayu_online->getAdminById($id);
		$data['content'] = 'admin/edit-admin';
		$this->load->view('admin/template/layout',$data);
	}

	public function edit_user($id)
	{
		$data['allNotif'] = $this->m_kayu_online->getAllNotif();
		$id = $this->dataencryption->enc_dec("decrypt", $id);
		$data['user'] = $this->m_kayu_online->getUserById($id);
		$data['content'] = 'admin/edit-user';
		$this->load->view('admin/template/layout',$data);
	}
	public function edit_produk_depan($id)
	{
		$data['allNotif'] = $this->m_kayu_online->getAllNotif();
		$id = $this->dataencryption->enc_dec("decrypt", $id);
		$data ['product'] = $this->m_kayu_online->getProdukById($id);
		$data['content'] = 'admin/edit-produk-depan';
		$this->load->view('admin/template/layout', $data);
	}

	public function edit_produk($id_size, $id_product)
	{
		$data['allNotif'] = $this->m_kayu_online->getAllNotif();
		$id_size = $this->dataencryption->enc_dec("decrypt", $id_size);
		$id_product = $this->dataencryption->enc_dec("decrypt", $id_product);
		$data['allProductSizes'] = $this->m_kayu_online->getAllProductSizes();
		$data['getHasSizes'] = $this->m_kayu_online->getHasSizesById2($id_size, $id_product);
		$data['content'] = 'admin/edit-produk';
		$this->load->view('admin/template/layout',$data);
	}

	public function edit_thumbnail($id)
	{
		$data['allNotif'] = $this->m_kayu_online->getAllNotif();
		$data['thumbnailbyid'] = $this->m_kayu_online->getThumbnailById($id);
		$data['content'] = 'admin/edit-thumbnail';
		$this->load->view('admin/template/layout',$data);
	}

	public function hapus_thumbnail($id)
	{
		$data['allNotif'] = $this->m_kayu_online->getAllNotif(); 
		$data['id'] = $this->input->get('id');
		$this->m_kayu_online->hapus_thumbnail($id);
		$this->session->set_flashdata('msg', array('class' => 'info', 'message'=> 'Hapus Thumbnail Berhasil !'));
		redirect(base_url("admin/tabel"));
	}

	public function hapus($id){  
		$data['allNotif'] = $this->m_kayu_online->getAllNotif(); 
		$id = $this->dataencryption->enc_dec("decrypt", $id); 
		$this->m_kayu_online->hapus_admin($id);
		$this->session->set_flashdata('msg', array('class' => 'info', 'message'=> 'Hapus Data Berhasil !'));
		redirect(base_url("admin/tabel")); 
	}

	public function proses_edit_thumbnail()
	{
		$result = $this->m_kayu_online->thumbnail_upload_perid();
		$gambar = $result['image'];
		$data['allNotif'] = $this->m_kayu_online->getAllNotif();
		$id = $this->dataencryption->enc_dec("decrypt", $this->input->post('id'));
		$nama = $this->input->post('name');
		$product_id = $this->input->post('product_id');
		$kode_product = $this->input->post('kode_product');
		$kode_kayu = $this->input->post('kode_kayu');
		// $thumbnail = $this->input->post('thumbnail');
		$data = [
			'id' => $id,
			'name' => $nama,
			'product_id' => $product_id,
			'kode_product' => $kode_product,
			'kode_kayu' => $kode_kayu,
			'thumbnail' => $gambar,
		];
		$this->m_kayu_online->update_thumbnail($data, $id);
		$this->session->set_flashdata('msg', array('class' => 'info', 'message'=> 'Edit Berhasil'));
				redirect(base_url("admin/tabel"));

	}

	public function proses_edit_user()
	{
		$data['allNotif'] = $this->m_kayu_online->getAllNotif();
		$id = $this->dataencryption->enc_dec("decrypt", $this->input->post('id'));
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$hp = $this->input->post('hp');

		$data = [
			'id' => $id,
			'nama' => $nama,
			'email' => $email,
			'username' => $username,
			'password' => $password,
			'no_hp' => $hp,
			'role' => 'user',
		];

		$this->m_kayu_online->update_data_user($data, $id);
		$this->session->set_flashdata('msg', array('class' => 'info', 'message'=> 'Edit Berhasil'));
				redirect(base_url("admin/tabel"));
	}

	public function proses_ubah_admin(){
		$data['allNotif'] = $this->m_kayu_online->getAllNotif();
		$id = $this->dataencryption->enc_dec("decrypt", $this->input->post('id'));
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$namaPengguna = $this->input->post('nama-pengguna');
		$sandi = $this->input->post('sandi');
		$sandi2 = $this->input->post('sandi-2');
		$hp = $this->input->post('hp');
		$nama_pengguna_awal = $this->input->post('nama-pengguna-awal');
		$data = array(
			'id' => $id,
			'nama' => $nama,
			'email' => $email,
			'username' => $namaPengguna,
			'password' => $sandi,
			'no_hp' => $hp,
			'role' => 'admin',
			'status' => 'active'
			);
		$where = array(
			'username' => $namaPengguna,
			'id' => $id
			);
		$eksis = $this->m_kayu_online->cek_admin($namaPengguna);
		$cek_user = $this->m_kayu_online->cek_admin2($namaPengguna, $id);

		if($eksis > 0 and $namaPengguna != $nama_pengguna_awal){
	    	$this->session->set_flashdata('msg', array('class' => 'danger', 'message'=> 'nama pengguna sudah digunakan, silahkan pilih opsi nama lain'));
	    	redirect(base_url("admin/edit/".$this->dataencryption->enc_dec("encrypt", $id)));
	    }
	    else{
			if ($sandi === $sandi2) {
				$this->m_kayu_online->update_data_admin($data,'users', $id);
				$this->session->set_flashdata('msg', array('class' => 'info', 'message'=> 'Ubah Data Admin Berhasil !'));
				redirect(base_url("admin/edit/".$this->dataencryption->enc_dec("encrypt", $id)));
			}
			else{
				$this->session->set_flashdata('msg', array('class' => 'danger', 'message'=> 'Kata Sandi dan Konfirmasi Kata Sandi Tidak Sama, Silahkan Coba Lagi'));
				redirect(base_url("admin/edit/".$this->dataencryption->enc_dec("encrypt", $id)));
			}
		}
		// $where = array(
		// 	'username' => $namaPengguna,
		// 	'role' => 'admin',
		// 	'status' => 'active'
		// 	);

		// $cek_user = $this->m_kayu_online->cek_admin($namaPengguna);

		// if($cek_user > 0){
	 //    	$this->session->set_flashdata('msg', array('class' => 'danger', 'message'=> 'nama pengguna sudah digunakan, silahkan pilih opsi nama lain'));
	 //    	redirect(base_url("admin/add-admin"));
	 //    }
	 //    else {
	 //    	if ($sandi === $sandi2) {
		// 		$this->m_kayu_online->input_data_admin($data,'users');
		// 		$this->session->set_flashdata('msg', array('class' => 'info', 'message'=> 'Tambah Data Admin Berhasil !'));
		// 		redirect(base_url("admin/tabel"));
		// 	}
		// 	else{
		// 		$this->session->set_flashdata('msg', array('class' => 'danger', 'message'=> 'Kata Sandi dan Konfirmasi Kata Sandi Tidak Sama, Silahkan Coba Lagi'));
		// 		redirect(base_url("admin/add-admin"));
		// 	}
	 //    }


	}

	public function get_product_byCategory(){
    	$id = $this->input->get('id');
    	$sku = $this->input->get('sku');
    	$data['allNotif'] = $this->m_kayu_online->getAllNotif();
    	$data['productPerCategory'] = $this->m_kayu_online->get_product_byCategory($id, $sku);
		$data['content'] = 'admin/product-by-name';
		$this->load->view('admin/template/layout',$data);
    }

    public function get_pesanan_byIDPemesan(){
    	$id = $this->dataencryption->enc_dec("decrypt", $this->input->get('id'));
    	// echo $id; die();
    	// $sku = $this->input->get('sku');
    	$data['allNotif'] = $this->m_kayu_online->getAllNotif();
    	$data['pesananByID'] = $this->m_kayu_online->get_pesanan_byIDPemesan($id, 'pesan');
		$data['content'] = 'admin/product-by-idPemesan';
		$this->load->view('admin/template/layout',$data);
    }

    public function hapusTF($id){ 
    	$id = $this->dataencryption->enc_dec("decrypt", $id); 
		$this->m_kayu_online->hapus_tf($id);
		$this->session->set_flashdata('msg', array('class' => 'info', 'message'=> 'Hapus Data Admin Berhasil !'));
		redirect(base_url("admin/daftar-bukti-tf")); 
	}
	
	public function tabel_order()
	{
		$data['allNotif'] = $this->m_kayu_online->getAllNotif();
		$data['orderpesan'] = $this->m_kayu_online->getOrderStatusPesan();
		$data['orderdone'] = $this->m_kayu_online->getOrderStatusDone();
		$data['content'] = 'admin/tabel-order';
		$this->load->view('admin/template/layout',$data);
	}

	public function stok_minim()
	{
		$data['allNotif'] = $this->m_kayu_online->getAllNotif();
		$data['stokminim'] = $this->m_kayu_online->getStokMinim();
		$data['content'] = 'admin/stok-minim';
		$this->load->view('admin/template/layout',$data);
	}


 
}