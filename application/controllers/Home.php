<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Home extends CI_Controller {
	
	function __construct(){
		parent::__construct();		
		$this->load->model('m_kayu_online');
	}
 
	// public function index(){
	// 	$data['produk'] = $this->m_kayu_online->getProduk()->result();
	// 	// $this->load->view('v_user.php',$data);
	// 	$data['content'] = 'public/index';
	// 	$this->load->view('public/template/layout',$data);

	// }

	public function index()
	{
		$data['produk'] = $this->m_kayu_online->getProduk();
		$data['content'] = 'public/index';
		$this->load->view('public/template/layout',$data);
		// $data['produk'] = $this->m_kayu_online->getProduk();
		// $data['content'] = 'public/toko';
		// $this->load->view('public/template/layout',$data);
	}

	public function toko()
	{
		// if($_POST){
		// 	$data['discipline'] = $this->toornament_model->getToornamentByCategory();
		// }else{
		// 	$data['discipline'] = $this->toornament_model->getAllGame();
		// }
		
		// $data['toko'] = $this->m_kayu_online->getAllProduk();
		$data['produk'] = $this->m_kayu_online->getProduk();
		$data['content'] = 'public/toko';
		$this->load->view('public/template/layout',$data);
	}

	public function tentang_kami()
	{
		// if($_POST){
		// 	$data['discipline'] = $this->toornament_model->getToornamentByCategory();
		// }else{
		// 	$data['discipline'] = $this->toornament_model->getAllGame();
		// }
		
		// $data['toko'] = $this->m_kayu_online->getAllProduk();
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
		// if($_POST){
		// 	$data['discipline'] = $this->toornament_model->getToornamentByCategory();
		// }else{
		// 	$data['discipline'] = $this->toornament_model->getAllGame();
		// }
		
		// $data['toko'] = $this->m_kayu_online->getAllProduk();
		$data['produk'] = $this->m_kayu_online->getProduk();
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

 
}