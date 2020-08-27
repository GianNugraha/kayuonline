<?php 
 
class M_kayu_online extends CI_Model{
	public function getProduk(){
		return $this->db->get('produk');
	}

	public function getUsers(){
		return $this->db->get('users');
	}

	public function getAdmin(){
		return $this->db->get_where('users', array('role' => 'admin', 'status' => 'active'));
	}

	public function getUser(){
		return $this->db->get_where('users', array('role' => 'user'));
	}


	public function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}

	public function getUserData($table,$where){		
		return $this->db->get_where($table,$where);
	}

	public function input_data_admin($data,$table){
		$this->db->insert($table,$data);
	}

	public function update_data_admin($data,$table, $id){
		$this->db->where('id', $id);
		return $this->db->update($table,$data);
	}

	public function cek_admin($namaPengguna){		
		$sql = $this->db->query("SELECT * FROM users where username='$namaPengguna' and role='admin' and status='active' ");
		return $cek_user = $sql->num_rows();
	}

	public function cek_admin2($namaPengguna, $id){		
		$sql = $this->db->query("SELECT * FROM users where username='$namaPengguna' and role='admin' and id='$id' ");
		// return $cek_user = $sql->num_rows();
		return $hasil_query = $sql->result_array();
	}

	public function hapus_admin($id){    
		$this->db->where('id', $id);    
		return $this->db->delete('users'); // Untuk mengeksekusi perintah delete data  
	}

	public function getAdminById($id){
		$this->db->where('id', $id);
		return $this->db->get('users');
	}

	public function getDaftarAdmin(){    
		$this->db->where('status', 'disactive');    
		return $this->db->get('users'); 
	}

	public function getDaftarBlok(){    
		$this->db->where('status', 'blok');    
		return $this->db->get('users'); 
	}

	public function terima_admin($id, $param){
		$this->db->where('id', $id);
		return $this->db->update('users' ,$param);
	}
	
	public function tolak_admin($id, $param){
		$this->db->where('id', $id);
		return $this->db->update('users' ,$param);
	}

	public function getAllNotif(){
		// $sql = $this->db->query("SELECT * FROM notifikasi");
		// return $allNotif = $sql->result_array();
		return $this->db->get('notifikasi'); 
	}

	public function update_Notifikasi($nilai, $param){
		$nilai_awal = $nilai;
		$nilai_update = $nilai_awal;
		if ($param=='tambah') {
			$nilai_update+=1;
		} elseif ($param=='kurang') {
			$nilai_update = $nilai_awal - 1;
		}
		return $this->db->query("UPDATE notifikasi SET admin_reg = REPLACE(admin_reg, '$nilai_awal', '$nilai_update')");
		// return $this->db->update('users' ,$param);
	}
	// public function doLogin(){
	// 	$post = $this->input->post();
	// 	echo $post;
	// 	die();

 //        // cari user berdasarkan email dan username
	// 	$this->db->where('email', $post["userInput"])
	// 	->or_where('username', $post["userInput"]);
	// 	$user = $this->db->get($this->_table)->row();

 //        // jika user terdaftar
	// 	if($user){
 //            // periksa password-nya
	// 		$isPasswordTrue = password_verify($post["password"], $user->password);
 //            // periksa role-nya
	// 		$isAdmin = $user->role == "admin";

 //            // jika password benar dan dia admin
	// 		if($isPasswordTrue && $isAdmin){ 
 //                // login sukses yay!
	// 			$this->session->set_userdata(['user_logged' => $user]);
	// 			$this->_updateLastLogin($user->id);
	// 			return true;
	// 		}
	// 	}

 //        // login gagal
	// 	return false;
	// }

	public function isNotLogin(){
		return $this->session->userdata('user_logged') === null;
	}

	public function duatable() {
		$this->db->select('*');
		$this->db->from('product_categories');
		$this->db->join('products','products.category_id=product_categories.category_id');
		$this->db->join('product_images','product_images.product_id=products.category_id');
		$this->db->join('product_has_sizes','product_has_sizes.product_id=products.category_id');
		// $this->db->join('product_sizes','product_sizes.id=product_has_sizes.product_size_id');
		// $this->db->join('product_has_sizes','product_has_sizes.product_size_id=product_sizes.id');
		
		$query = $this->db->get();
		return $query->result();
	}
}