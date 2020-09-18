<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Home extends CI_Controller {
	
	function __construct(){
		parent::__construct();		
		$this->load->model('m_kayu_online');
		$this->load->library('session');
	}
 
	// public function index(){
	// 	$data['produk'] = $this->m_kayu_online->getProduk()->result();
	// 	// $this->load->view('v_user.php',$data);
	// 	$data['content'] = 'public/index';
	// 	$this->load->view('public/template/layout',$data);

	// }

	public function index()
	{
		$data['productDK'] = $this->m_kayu_online->getProductCategory(1);
		$data['productKO'] = $this->m_kayu_online->getProductCategory(2);
		$data['productPT'] = $this->m_kayu_online->getProductCategory(3);
		$data['productTG'] = $this->m_kayu_online->getProductCategory(4);
		$data['productKS'] = $this->m_kayu_online->getProductCategory(5);
		$data['productLP'] = $this->m_kayu_online->getProductCategory(6);
		// $data['productKO'] = $this->m_kayu_online->getProductCategory(2);
		$data['produk'] = $this->m_kayu_online->getProduk();
		$data['kayu_olahan'] = $this->m_kayu_online->getProdukByCategoryName('KO');
		$data['decking'] = $this->m_kayu_online->getProdukByCategoryName('DK');
		$data['content'] = 'public/index';
		$this->load->view('public/template/layout',$data);
	}

	public function user_login()
	{
		$data['content'] = 'login/login';
		$this->load->view('login/template/layout',$data);
		 
	}

	public function user_registration()
	{
		$data['content'] = 'login/registration';
		$this->load->view('login/template/layout',$data);
	}

	public function user_forgot_pass()
	{
		$data['content'] = 'login/forgot';
		$this->load->view('login/template/layout',$data);
	}

	public function toko()
	{
		$data['produk'] = $this->m_kayu_online->getProduk();
		$data['content'] = 'public/toko';
		$this->load->view('public/template/layout',$data);
	}

	public function tentang_kami()
	{
		$data['produk'] = $this->m_kayu_online->getProduk();
		$data['content'] = 'public/tentang-kami';
		$this->load->view('public/template/layout',$data);
	}

	public function gudang_kami()
	{
		// if($_POST){
		// 	$data['discipline'] = $this->toornament_model->getToornamentByCategory();
		// }else{
		// 	$data['discipline'] = $this->toornament_model->getAllGame();
		// }
		
		// $data['toko'] = $this->m_kayu_online->getAllProduk();
		$data['produk'] = $this->m_kayu_online->getProduk();
		$data['content'] = 'public/gudang-kami';
		$this->load->view('public/template/layout',$data);
	}

	public function produk()
	{
		$param = $this->input->get('nama');
		$category = $this->input->get('kategori');
		$data['productDK'] = $this->m_kayu_online->getProductCategory(1);
		$data['productKO'] = $this->m_kayu_online->getProductCategory(2);
		$data['productPT'] = $this->m_kayu_online->getProductCategory(3);
		$data['productTG'] = $this->m_kayu_online->getProductCategory(4);
		$data['productKS'] = $this->m_kayu_online->getProductCategory(5);
		$data['productLP'] = $this->m_kayu_online->getProductCategory(6);
		$data['tampil'] = $this->m_kayu_online->getProductByCategory($param, $category);
		$data['kayu_olahan'] = $this->m_kayu_online->getProdukByCategoryName('KO');
		$data['decking'] = $this->m_kayu_online->getProdukByCategoryName('DK');
		$data['produk'] = $this->m_kayu_online->getUkuran($param, $category);
		$data['maks'] = $this->m_kayu_online->getPriceMax($param, $category);
		$data['min'] = $this->m_kayu_online->getPriceMin($param, $category);
		$data['thumbnail'] = $this->m_kayu_online->getThumbnail($param, $category);

		//print_r(json_encode($data['produk']));exit();
		// echo "<pre>";
		// print_r($data['produk']);
		// echo "</pre>";
		// die();
		$data['content'] = 'public/produk';
		$this->load->view('public/template/layout',$data);
	}

	public function faq()
	{
		// if($_POST){
		// 	$data['discipline'] = $this->toornament_model->getToornamentByCategory();
		// }else{
		// 	$data['discipline'] = $this->toornament_model->getAllGame();
		// }
		
		// $data['toko'] = $this->m_kayu_online->getAllProduk();
		$data['content'] = 'public/faq';
		$this->load->view('public/template/layout',$data);
	}

	public function kebijakan_privasi()
	{
		// if($_POST){
		// 	$data['discipline'] = $this->toornament_model->getToornamentByCategory();
		// }else{
		// 	$data['discipline'] = $this->toornament_model->getAllGame();
		// }
		
		// $data['toko'] = $this->m_kayu_online->getAllProduk();
		$data['content'] = 'public/kebijakan-privasi';
		$this->load->view('public/template/layout',$data);
	}

	public function layanan_pelanggan()
	{
		$data['content'] = 'public/layanan-pelanggan';
		$this->load->view('public/template/layout',$data);
	}

	public function wishlist()
	{
		$data['content'] = 'public/wishlist';
		$this->load->view('public/template/layout',$data);
	}

	public function checkout()
	{
		$data['content'] = 'public/checkout';
		$this->load->view('public/template/layout',$data);
	}

	public function order_complete()
	{
		$data['content'] = 'public/order-complete';
		$this->load->view('public/template/layout',$data);
	}

	public function join() {
		$data['join2'] = $this->m_kayu_online->duatable(); 
		$data['content'] = 'public/coba-data';
		$this->load->view('public/template/layout',$data);
	}

	public function kayu_olahan() {
		$data['produk_category'] = $this->m_kayu_online->getProdukByCategoryName(); 
		// echo "<pre>";
  //       print_r($data['produk_category']);
  //       echo "</pre>";
  //       die();
		$data['content'] = 'public/coba-data';
		$this->load->view('public/template/layout',$data);
	}

	public function proses_add_user(){
		$data['allNotif'] = $this->m_kayu_online->getAllNotif()->result_array();
		// echo "<pre>";
		// print_r($data['allNotif']);
		// echo "</pre>";
		// die();
		$user_reg = ($data['allNotif'][0]['admin_reg']);
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
				'password' =>  $this->dataencryption->enc_dec("encrypt", $sandi),
				'no_hp' => $hp,
				'role' => 'user'
			);

			$cek_user = $this->m_kayu_online->cek_user($namaPengguna);

			if($cek_user > 0){
				$this->session->set_flashdata('msg', array('class' => 'danger', 'message'=> 'nama pengguna sudah digunakan, silahkan pilih opsi nama lain'));
				redirect(base_url("user-registration"));
			}
			else {
				if ($sandi === $sandi2) {
					$this->m_kayu_online->input_data_admin($data,'users');
					$this->session->set_flashdata('msg', array('class' => 'info', 'message'=> 'Daftar User Berhasil !'));
					redirect(base_url("user-registration"));
				}
				else{
					$this->session->set_flashdata('msg', array('class' => 'danger', 'message'=> 'Kata Sandi dan Konfirmasi Kata Sandi Tidak Sama, Silahkan Coba Lagi'));
					redirect(base_url("user-registration"));
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

	function aksi_login(){
        $username = $this->input->post('userInput');
        $password = $this->input->post('password');
        // echo $username;
        // echo $password;
        $where = array(
            'username' => $username,
            'password' => $this->dataencryption->enc_dec("encrypt", $password),
            'role' => 'user'
            );
        $cek = $this->m_kayu_online->cek_login("users",$where)->num_rows();
        $getUser = $this->m_kayu_online->getUserData("users",$where)->result_array();

        foreach ($getUser as $key):
            $idUser = $key['id'];
            $namaUser = $key['nama'];
        endforeach;
        
        if($cek > 0){
            $data_session = array(
                'idUser' => $idUser,
                'namaUser' => $namaUser,
                'status' => "login",
                'role' => 'user',
                'logged_in' => TRUE
                );
            // session_start();
 
            $this->session->set_userdata($data_session);
 
            redirect(base_url());
 
        }else{
           $this->session->set_flashdata('msg', array('class' => 'danger', 'message'=> 'Login Gagal, Silahkan Coba Lagi'));
            redirect(base_url("user-login"));

        }
    }
 
    function logout(){
        $this->session->sess_destroy();
        redirect(base_url('home/user_login'));
    }

    public function forgotPassword(){
    	$email = $this->input->post('email');
    	$user = $this->db->get_where('users', ['email' => $email, 'role' => 'user'])->row_array();
    	if ($user) {
    		$token = base64_encode(random_bytes(32));
    		$user_token = [
    			'email' => $email,
    			'token' => $token,
    			'date_created' => date('Y-m-d')
    		];

    		$this->db->insert('user_token', $user_token);
    		$this->_sendEmail($token, 'forgot');

    		$this->session->set_flashdata('msg', array('class' => 'info', 'message'=> 'Mohon Periksa Email Anda Untuk Mereset Password'));
            redirect(base_url("forgot"));
    	}
    	else{
    		$this->session->set_flashdata('msg', array('class' => 'danger', 'message'=> 'Email Tidak Terdaftar, Silahkan Periksa Kembali'));
            redirect(base_url("forgot"));
    	}
    	
    }

    private function _sendEmail($token, $type){
    	$config = [
    		'protocol' => 'smtp',
    		'smtp_host' => 'ssl://smtp.googlemail.com',
    		'smtp_user' => 'gianzolla9@gmail.com',
    		'smtp_pass' => 'Pesat.muda9',
    		'smtp_port' => 465,
    		'mailtype' => 'html',
    		'charset' => 'utf-8',
    		'newline' => "\r\n"
    	];

    	$this->load->library('email', $config);

    	// $this->email->initialize($config);
    	$this->email->from('gianzolla9@gmail.com', 'Web Developer Kayu Online');
    	$this->email->to($this->input->post('email'));

    	if ($type == 'verify') {
    		$this->email->subject('Verifikasi Akun');
    		$this->email->message('Klik Link Berikut untuk Aktivasi Akun Anda : <a href="'. base_url() . 'home/verify?email='.$this->input->post('email'). '&token=' .urlencode($token).'">Aktivasi</a>');

    	}
    	elseif ($type == 'forgot') {
    		$this->email->subject('Reset Password');
    		$this->email->message('Klik Link Berikut untuk Reset Password Anda : <a href="'. base_url() . 'home/resetPassword?email='.$this->input->post('email'). '&token=' .urlencode($token).'">Reset</a>');
    	}

    	if ($this->email->send()) {
    		return TRUE;
    	}
    	else {
    		echo $this->email->print_debugger();
    		die();
    	}
    }

    public function resetPassword(){
    	$email = $this->input->get('email');
    	$token = $this->input->get('token');
    	$user = $this->db->get_where('users', ['email' => $email, 'role' => 'user'])->row_array();

    	if ($user) {
    		$user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();
    		if ($user_token) {
    			$this->session->set_userdata('reset_email', $email);
    			$this->changePassword();

    		}
    		else{
    			$this->session->set_flashdata('msg', array('class' => 'danger', 'message'=> 'Reset Password Gagal, Token Salah, Silahkan periksa Kembali'));
    			redirect(base_url("home/user_login"));
    		}
    	}
    	else
    	{
    		$this->session->set_flashdata('msg', array('class' => 'danger', 'message'=> 'Reset Password Gagal, Email yang di tuju tidak Tersedia'));
            redirect(base_url("home/user_login"));
    	}
    }

    public function changePassword(){
    	$data['content'] = 'login/change-password';
		$this->load->view('login/template/layout',$data);
    }

    public function prossesChangePassword(){
    	if (!$this->session->userdata('reset_email')) {
    		redirect(base_url("home/user_login"));
    	}

    	$password = $this->dataencryption->enc_dec("encrypt", $this->input->post('sandi'));
    	// $password = $this->input->post('sandi');
    	$email = $this->session->userdata('reset_email');

    	$this->db->set('password', $password);
    	$this->db->where('email', $email);
    	$this->db->update('users');
    	$this->session->unset_userdata('reset_email');

    	$this->session->set_flashdata('msg', array('class' => 'info', 'message'=> 'Password Berhasil di ganti, silahkan Login'));
            redirect(base_url("home/user_login"));

    }

 
}