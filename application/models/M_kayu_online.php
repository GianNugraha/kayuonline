<?php 
 
class M_kayu_online extends CI_Model{
	function __construct() {
        $this->tableName = 'fb_users';
        $this->primaryKey = 'id';
    }

	public function getProduk(){
		// return $this->db->get('produk');
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

	public function input_data_user($data,$table){
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

	public function cek_user($namaPengguna){		
		$sql = $this->db->query("SELECT * FROM users where username='$namaPengguna' and role='user'  ");

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

	public function isNotLogin(){
		return $this->session->userdata('user_logged') === null;
	}

	public function duatable() {
		$this->db->select('*');
		$this->db->from('product_categories');
		$this->db->join('products','products.category_id=product_categories.category_id');
		$this->db->join('product_images','product_images.product_id=products.category_id');
		$this->db->join('product_has_sizes','product_has_sizes.product_id=product_categories.kode_kayu');	
		$this->db->join('product_sizes','product_sizes.id=product_has_sizes.product_size_id');
		
		$query = $this->db->get();
		return $query->result();
	}

	public function getProductCategory($param) {
		// $db = $this->load->database('second', TRUE);
		$this->db->select("p.*")->from("products p");
		// $this->db->select("c.category_code")->from("product_categories c");
		$this->db->select("s.product_id, MAX(s.price) AS max_price, MIN(s.price) AS min_price")->from("product_has_sizes s");
		$this->db->select("i.image, i.thumbnail_image, i.first")->from("product_images i");
		$this->db->group_by("s.product_id")->where("s.product_id = p.id");
		$this->db->where("i.product_id = p.id");
		$this->db->where("p.category_id = ".$param);
		$data = $this->db->get();

		return $data->result();
	}

	public function getProductByCategory($param, $category) {
		// $db = $this->load->database('second', TRUE);
		$this->db->select("p.*")->from("products p");
		$this->db->select("c.category_code")->from("product_categories c");
		$this->db->select("s.product_id, MAX(s.price) AS max_price, MIN(s.price) AS min_price")->from("product_has_sizes s");
		$this->db->select("i.image, i.thumbnail_image, i.first")->from("product_images i");
		$this->db->group_by("s.product_id")->where("s.product_id = p.id");
		$this->db->where("i.product_id = p.id");
		$this->db->where("p.name = '$param'");
		$this->db->where("c.id = p.category_id");
		$this->db->where("c.category_code = '$category'");
		$data = $this->db->get();

		return $data->result();
	}

	public function getAllProduct() {
		// $db = $this->load->database('second', TRUE);
		$this->db->select("p.*")->from("products p");
		$this->db->select("c.category_code, c.category_name")->from("product_categories c");
		$this->db->select("s.product_id, MAX(s.price) AS max_price, MIN(s.price) AS min_price")->from("product_has_sizes s");
		$this->db->select("i.image, i.thumbnail_image, i.first")->from("product_images i");
		$this->db->group_by("s.product_id")->where("s.product_id = p.id");
		$this->db->where("p.category_id = c.id");
		$this->db->where("i.product_id = p.id");
		// $this->db->where("p.name = '$param'");
		// $this->db->where("c.id = p.category_id");
		// $this->db->where("c.category_code = '$category'");
		$data = $this->db->get();

		return $data->result();
	}

	public function getUkuran($param, $category) {
		// $this->db->select("p.*")->from("products p");
		$this->db->select("p.*")->from("products p");
		$this->db->select("c.category_code")->from("product_categories c");
		$this->db->select("s.product_id, s.price, s.stock, s.sold")->from("product_has_sizes s");
		$this->db->select("ps.size")->from("product_sizes ps");
		$this->db->group_by("s.price")->where("s.product_id = p.id");
		$this->db->where("p.name = '$param'");
		$this->db->where("c.id = p.category_id");
		$this->db->where("ps.id = s.product_size_id");
		$this->db->where("c.category_code = '$category'");

		$data = $this->db->get();
		return $data->result();
	}

	public function getProdukByCategoryName($param) {
		// $this->db->select('*');
		// $this->db->from('product_categories2');
		// // $this->db->join('products','products.category_id=product_categories.category_id');
		// $this->db->join('product_images2','product_images2.category_id=product_categories2.kode_kayu');
		// // $this->db->join('product_has_sizes','product_has_sizes.product_id=product_categories.kode_kayu');	
		
		// // $this->db->join('product_sizes','product_sizes.id=product_has_sizes.product_size_id');
		// $this->db->where('product_categories2.category_id', $param);
		// // $this->db->join('product_has_sizes','product_has_sizes.product_size_id=product_sizes.id');
		
		// $query = $this->db->get();
		// return $query->result();
	}

	public function getCategoryName($param, $category) {
		// $this->db->select('*');
		// $this->db->from('product_categories2');
		// // $this->db->join('products','products.category_id=product_categories.category_id');
		// $this->db->join('product_images2','product_images2.category_id=product_categories2.kode_kayu');
		// $this->db->join('product_has_sizes2','product_has_sizes2.product_id=product_categories2.kode_kayu');	
		
		// $this->db->join('product_sizes2','product_sizes2.id=product_has_sizes2.product_size_id');
		// $this->db->where('product_categories2.name', $param);
		// $this->db->where('product_categories2.category_id', $category);
		
		// $query = $this->db->get();
		// return $query->result();
	}

	public function getPriceMax($param, $category) {
		// $this->db->select_max('price');
		// $this->db->from('product_categories2');
		// // $this->db->join('products','products.category_id=product_categories.category_id');
		// $this->db->join('product_images2','product_images2.category_id=product_categories2.kode_kayu');
		// $this->db->join('product_has_sizes2','product_has_sizes2.product_id=product_categories2.kode_kayu');	
		
		// $this->db->join('product_sizes2','product_sizes2.id=product_has_sizes2.product_size_id');
		// $this->db->where('product_categories2.name', $param);
		// $this->db->where('product_categories2.category_id', $category);
		
		// $query = $this->db->get();
		// return $query->result();
	}

	public function getPriceMin($param, $category) {
		// $this->db->select_min('price');
		// $this->db->from('product_categories2');
		// // $this->db->join('products','products.category_id=product_categories.category_id');
		// $this->db->join('product_images2','product_images2.category_id=product_categories2.kode_kayu');
		// $this->db->join('product_has_sizes2','product_has_sizes2.product_id=product_categories2.kode_kayu');	
		
		// $this->db->join('product_sizes2','product_sizes2.id=product_has_sizes2.product_size_id');
		// $this->db->where('product_categories2.name', $param);
		// $this->db->where('product_categories2.category_id', $category);
		
		// $query = $this->db->get();
		// return $query->result();
	}

	public function getThumbnail($category, $param) {
		$this->db->select('thumbnail');
		$this->db->from('product_thumbnail');
		$this->db->where('product_thumbnail.name', $param);
		$this->db->where('product_thumbnail.kode_product', $category);
		$query = $this->db->get();
		return $query->result();
	}


	//login fb //
	/*
     * Insert / Update facebook profile data into the database
     * @param array the data for inserting into the table
     */
    public function checkUser($userData = array()){
        if(!empty($userData)){
            //check whether user data already exists in database with same oauth info
            $this->db->select($this->primaryKey);
            $this->db->from($this->tableName);
            $this->db->where(array('oauth_provider'=>$userData['oauth_provider'], 'oauth_uid'=>$userData['oauth_uid']));
            $prevQuery = $this->db->get();
            $prevCheck = $prevQuery->num_rows();
            
            if($prevCheck > 0){
                $prevResult = $prevQuery->row_array();
                
                //update user data
                $userData['modified'] = date("Y-m-d H:i:s");
                $update = $this->db->update($this->tableName, $userData, array('id' => $prevResult['id']));
                
                //get user ID
                $userID = $prevResult['id'];
            }else{
                //insert user data
                $userData['created']  = date("Y-m-d H:i:s");
                $userData['modified'] = date("Y-m-d H:i:s");
                $insert = $this->db->insert($this->tableName, $userData);
                
                //get user ID
                $userID = $this->db->insert_id();
            }
        }
        
        //return user ID
        return $userID?$userID:FALSE;
    }

    public function cek_orderStatus($id_pemesan, $sku, $ukuran){		
		$sql = $this->db->query("SELECT * FROM orders where id_pemesan='$id_pemesan' and sku_product='$sku' and ukuran='$ukuran' ");
		return $sql->result_array();
	}

    public function input_data_orders($data,$table){
    	$id_pemesan = $this->session->userdata('idUser');
    	$id_pemesan = $this->session->userdata('idUser');
    	$update_product = $this->m_kayu_online->cek_orderStatus($data['id_pemesan'], $data['sku_product'], $data['ukuran']);
    	if (!empty($update_product)) {
    		foreach ($update_product as $key ) {
	    		$jumlahBayar = $key['total'] + $data['total'];
	    		$jumlahProduk = $key['jumlah'] + $data['jumlah'];
	    		$dataUpdate = array(
	    			'jumlah' => $jumlahProduk,
	    			'total' => $jumlahBayar
	    		);
	    		$this->db->where('id_pemesan', $id_pemesan);
	    		$this->db->where('sku_product', $data['sku_product']);
	    		$this->db->where('ukuran', $data['ukuran']);
	    		return $this->db->update($table,$dataUpdate);

    		}
    	}
    	else{
    		$this->db->insert($table,$data);
    	}
	}

   	public function getOrders($param){
		return $this->db->get_where('orders', array('id_pemesan' => $param));
	}	

	public function cek_order($id_pemesan, $sku, $ukuran){	;
		$sql = $this->db->query("SELECT * FROM orders where id_pemesan='$id_pemesan' and sku_product='$sku' and ukuran='$ukuran' ");
		return $sql->num_rows();
	}

	public function hapus_order($id){    
		$this->db->where('id', $id);    
		return $this->db->delete('orders'); // Untuk mengeksekusi perintah delete data  
	}

	public function get_total_biaya($id){
		// echo $id; die();
		$sql = $this->db->query("SELECT SUM(total) as total FROM orders WHERE id_pemesan = '$id'");
		return $sql->result();
	}

	public function getCountWishlist($param){
		if ($param != 'NULL') {
			$this->db->select('COUNT(id) as total');
			$this->db->group_by('id_pemesan'); 
			$this->db->where('id_pemesan', $param);
			$this->db->order_by('total'); 
			$hasil = $this->db->get('orders');
			return $hasil;
		}else{
			$hasil = 0;
			return $hasil;
		}
	}

	public function edit_order($param){
		// echo $id; die();
		$id = $this->dataencryption->enc_dec("decrypt", $param);
		return $this->db->get_where('orders', array('id' => $id));
		// return $sql->result();
	}
	

}