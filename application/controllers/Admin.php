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

	public function proses_stok_harga_ukuran($param)
	{
		$id = $this->dataencryption->enc_dec("decrypt", $param);
		$stok = $this->input->post('stok');
		$harga = $this->input->post('harga');
		$ukuran = $this->input->post('ukuran');
		$data_has_sizes = [
			'stock' => $stok,
			'price' => $harga,
		];
		$data_sizes = [
			'size' => $ukuran,
		];
		$this->m_kayu_online->update_stok_harga_ukuran($id,$data_has_sizes,$data_sizes);
	}

	public function proses_ubah_produk()
	{
		// $id = $this->dataencryption->enc_dec("decrypt", $this->input->post('id'));
		// $result = $this->m_kayu_online->product_upload();
		// $gambar = $result['iamge'];
		// $category_code = $this->input->post('kategori');
		// $id_has_sizes = $this->input->post('id_has_sizes');
		// $id_sizes = $this->input->post('id_sizes');
		// $namaproduk = $this->input->post('nama-produk');
		// $sku = $this->input->post('sku');
		// $stok = $this->input->post('stok');
		// $harga = $this->input->post('harga');
		// $ukuran = $this->input->post('ukuran');
		// $deskripsi = $this->input->post('deskripsi');
		// $data = [
		// 	'description' => $deskripsi,
		// 	'category_id' => $category_code,
		// 	// 'product_code' => $sku,
		// 	'name' => $namaproduk,
		// ];
		// $datas = [
		// 	'product_id' => $category_code,
		// 	'product_size_id' => $id_has_sizes,
		// 	// 'id' => $id_ukuran,
		// 	'stock' => $stok,
		// 	'price' => $harga,
		// ];
		// $datass = [
		// 	'size' => $ukuran,
		// ];

		// $this->m_kayu_online->update_produk($data, $datas, $datass, $id, $id_sizes, $id_has_sizes);
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
		if ($gambar != 'Error') {
			$simpan = $this->m_kayu_online->input_produk($data_product, $data_has_sizes, $data_images);
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

	public function edit_produk($id)
	{
		$data['allNotif'] = $this->m_kayu_online->getAllNotif();
		$id = $this->dataencryption->enc_dec("decrypt", $id);
		$data['produk'] = $this->m_kayu_online->getProdukById($id);
		$data['kategoriid'] = $this->m_kayu_online->getCategoriesById($id);
		$data['sizesid'] = $this->m_kayu_online->getSizesById($id);
		$data['hassizesid'] = $this->m_kayu_online->getHasSizesById($id);
		$data['content'] = 'admin/edit-produk';
		$this->load->view('admin/template/layout',$data);
	}

	public function hapus($id){  
		$data['allNotif'] = $this->m_kayu_online->getAllNotif(); 
		$id = $this->dataencryption->enc_dec("decrypt", $id); 
		$this->m_kayu_online->hapus_admin($id);
		$this->session->set_flashdata('msg', array('class' => 'info', 'message'=> 'Hapus Data Admin Berhasil !'));
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
	


 
}