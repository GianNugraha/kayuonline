<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Admin extends CI_Controller {
	
	function __construct(){
		parent::__construct();		
		$this->load->model('m_kayu_online');

	}

	// public function index()
	// {
	// 	if (isset($_SESSION['logged_in'])) {
	// 		$data['produk'] = $this->m_kayu_online->getUsers();
	// 		$data['content'] = 'admin/index';
	// 		$this->load->view('admin/template/layout',$data);
	// 	} else {
	// 		redirect('admin/login');
	// 	}
	// }

	public function index()
	{
		// echo $_SESSION['nama']; 
		if (isset($_SESSION['logged_in']) and $_SESSION['role'] =='admin') {
			$data['produk'] = $this->m_kayu_online->getProduk();
			$data['content'] = 'admin/dashboard';
			$data['allNotif'] = $this->m_kayu_online->getAllNotif();
			$this->load->view('admin/template/layout',$data);

		} else {
			redirect('login');
		}
		
	}

	// public function login()
	// {
	// 	// $data['produk'] = $this->m_kayu_online->getProduk();
	// 	$data['content'] = 'login';
	// 	$this->load->view('login',$data);
	// }

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
		
		// if($_POST){
		// 	$data['discipline'] = $this->toornament_model->getToornamentByCategory();
		// }else{
		// 	$data['discipline'] = $this->toornament_model->getAllGame();
		// }
		
		// $data['toko'] = $this->m_kayu_online->getAllProduk();
		$data['allNotif'] = $this->m_kayu_online->getAllNotif();
		$data['admin'] = $this->m_kayu_online->getAdmin();
		$data['user'] = $this->m_kayu_online->getUser();
		$data['content'] = 'admin/daftar-tabel';
		$this->load->view('admin/template/layout',$data);
	}

	public function icon()
	{
		// if($_POST){
		// 	$data['discipline'] = $this->toornament_model->getToornamentByCategory();
		// }else{
		// 	$data['discipline'] = $this->toornament_model->getAllGame();
		// }
		
		// $data['toko'] = $this->m_kayu_online->getAllProduk();
		$data['allNotif'] = $this->m_kayu_online->getAllNotif();
		$data['produk'] = $this->m_kayu_online->getProduk();
		$data['content'] = 'admin/icon';
		$this->load->view('admin/template/layout',$data);
	}

	public function status_transaksi()
	{
		// if($_POST){
		// 	$data['discipline'] = $this->toornament_model->getToornamentByCategory();
		// }else{
		// 	$data['discipline'] = $this->toornament_model->getAllGame();
		// }
		
		// $data['toko'] = $this->m_kayu_online->getAllProduk();
		$data['allNotif'] = $this->m_kayu_online->getAllNotif();
		$data['produk'] = $this->m_kayu_online->getProduk();
		$data['content'] = 'admin/status-transaksi';
		$this->load->view('admin/template/layout',$data);
	}

	public function daftar_admin()
	{
		// if($_POST){
		// 	$data['discipline'] = $this->toornament_model->getToornamentByCategory();
		// }else{
		// 	$data['discipline'] = $this->toornament_model->getAllGame();
		// }
		
		// $data['toko'] = $this->m_kayu_online->getAllProduk();
		$data['adminDaftar'] = $this->m_kayu_online->getDaftarAdmin();
		$data['allNotif'] = $this->m_kayu_online->getAllNotif();
		// $data['allNotif'] = $this->m_kayu_online->getAllNotif();
		// echo "<pre>";
		// print_r($data['allNotif']);
		// echo "<pre>";
		// die();
		$data['adminBlok'] = $this->m_kayu_online->getDaftarBlok();
		$data['content'] = 'admin/daftar-admin';
		$this->load->view('admin/template/layout',$data);
	}

	public function pemberitahuan()
	{
		// $urlEnc = $this->dataencryption->enc_dec("decrypt", $this->uri->segment('2'));
		// $url =  $this->uri->segment('2');
		// $urlEnc = $this->dataencryption->enc_dec("encrypt",$url);
		// $urlDec = $this->dataencryption->enc_dec("decrypt",$urlEnc);
		// echo $urlDec;
		// die();
		// if($_POST){
		// 	$data['discipline'] = $this->toornament_model->getToornamentByCategory();
		// }else{
		// 	$data['discipline'] = $this->toornament_model->getAllGame();
		// }
		
		// $data['toko'] = $this->m_kayu_online->getAllProduk();
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

	public function proses_add_admin(){
		$data['allNotif'] = $this->m_kayu_online->getAllNotif()->result_array();
		$admin_reg = ($data['allNotif'][0]['admin_reg']);
		// die();
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
				'password' => $sandi,
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
				'password' => $sandi,
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
			$this->m_kayu_online->update_Notifikasi($admin_reg, 'kurang');
			$this->session->set_flashdata('msg', array('class' => 'info', 'message'=> 'Pendaftaran Admin Di Izinkan'));
			redirect(base_url("admin/daftar-admin")); 
		}
		else{
			$data = array(
				'status' => 'blok'
			);
			$this->m_kayu_online->update_Notifikasi($admin_reg, 'kurang');
			$this->m_kayu_online->tolak_admin($id, $data );
			$this->session->set_flashdata('msg', array('class' => 'danger', 'message'=> 'Pendaftaran Admin Tidak Di izinkan'));
			redirect(base_url("admin/daftar-admin"));
		}
		
	}

	public function edit($id){
		$data['allNotif'] = $this->m_kayu_online->getAllNotif();
		$id = $this->dataencryption->enc_dec("decrypt", $id);
		$data['admin'] = $this->m_kayu_online->getAdminById($id);
		$data['content'] = 'admin/edit-admin';
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
		// echo "<pre>";
		// print_r($cek_user);
		// echo "</pre>";
		// die();

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
	


 
}