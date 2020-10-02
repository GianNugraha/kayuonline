<?php 
 
class M_kayu_online extends CI_Model{
	function __construct() {
        $this->tableName = 'fb_users';
        $this->primaryKey = 'id';
    }

	public function getProduk(){
		return $this->db->get('products');
		// $this->db->select('*')
		// ->from('products')
		// ->join('product_has_sizes','product_has_sizes.price = products.category_id');
		// $query = $this->db->get();
		// return $query->result();
	}

	public function getUsers(){
		return $this->db->get('users');
	}

	public function getProduct()
	{
		return $this->db->from('product_categories')
		->join('products','products.category_id = product_categories.id')
		// ->join('product_sizes','product_sizes.size = product_has_sizes.product_size_id')
		->get()
		->result();
	}

	// public function getProduct()
	// {
	// 	return $this->db->from('products')
	// 	->join('product_categories','product_categories.id = products.category_id')
	// 	->join('product_has_sizes','product_has_sizes.product_id = products.id')
	// 	->join('product_sizes','product_sizes.id = product_has_sizes.product_id')
	// 	->join('product_images','product_images.product_id = products.id')

	// 	->get()
	// 	->result();
	// }

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

	public function input_product($data)
	{
		$this->db->insert('products',$data);
	}

	public function input_produk($datas, $datass)
	{
		
		$this->db->insert('product_has_sizes',$datas);
		// $this->db->insert('product_sizes',$datass);
		$this->db->insert('product_images',$datass);
	}

	public function input_ukuran($data)
	{
		$this->db->insert('product_sizes',$data);
	}

	public function getIDProduct(){
		return $this->db->get('products');
	}

	public function update_stok_harga_ukuran($id,$data_has_sizes,$data_sizes)
	{
		$this->db->where('id',$id);
		$this->db->update('product_has_sizes', $data_has_sizes);
		$this->db->where('id',$id);
		$this->db->update('product_sizes', $data_sizes);
	}

	// public function update_produk($data, $datas, $datass, $id, $id_has_sizes, $id_sizes)
	// {	
	// 	$this->db->where('id',$id);
	// 	$this->db->update('products',$data);
	// 	$this->db->where('id',$id_sizes);
	// 	$this->db->update('product_has_sizes',$datas);
	// 	$this->db->where('id',$id_has_sizes);
	// 	$this->db->update('product_sizes',$datass);
	// }

	public function update_data_admin($data,$table, $id){
		$this->db->where('id', $id);
		return $this->db->update($table,$data);
	}

	public function cek_admin($namaPengguna){		
		$sql = $this->db->query("SELECT * FROM users where username='$namaPengguna' and role='admin' and status='active' ");
		return $cek_user = $sql->num_rows();
	}

	public function getAllProductCategories()
	{
		$query = $this->db->query("SELECT * FROM product_categories");
		return $query->result_array();
	}

	public function getAllProductImages()
	{
		$query = $this->db->query("SELECT * FROM product_images");
		return $query->result_array();
	}

	public function getAllProductSizes()
	{
		$query = $this->db->query("SELECT * FROM product_sizes");
		return $query->result_array();
	}
	public function getAllProductHasSizes()
	{
		$query = $this->db->query("SELECT * FROM product_has_sizes");
		return $query->result_array();
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

	public function hapus_tf($id){    
		$this->db->where('id', $id);    
		// return $this->db->delete('reservasi'); // Untuk mengeksekusi perintah delete data  
	}
	public function hapus_produk($id)
	{
		$this->db->where('id', $id);    
		return $this->db->delete('products'); 
	}

	public function getProdukById($id)
	{
		$this->db->where('id',$id);
		return $this->db->get('products');
	}

	public function getAdminById($id){
		$this->db->where('id', $id);
		return $this->db->get('users');
	}
	public function getCategoriesById($id)
	{
		$this->db->where('id', $id);
		return $this->db->get('product_categories');
	}
	public function getSizesById($id)
	{
		$this->db->where('id', $id);
		return $this->db->get('product_sizes');
	}
	public function getHasSizesById($id)
	{
		$this->db->where('id', $id);
		return $this->db->get('product_has_sizes');
	}

	public function getDaftarAdmin(){    
		$this->db->where('status', 'disactive');    
		return $this->db->get('users'); 
	}

	public function getBuktiTf($param){    
		$this->db->where('status', $param);    
		return $this->db->get('reservasi'); 
	}

	public function getDaftarBlok(){    
		$this->db->where('status', 'blok');    
		return $this->db->get('users'); 
	}

	public function terima_admin($id, $param){
		$this->db->where('id', $id);
		return $this->db->update('users' ,$param);
	}
	
	public function terima_transfer($id, $param){
		$this->db->where('id', $id);
		return $this->db->update('reservasi' ,$param);
	}

	public function tolak_admin($id, $param){
		$this->db->where('id', $id);
		return $this->db->update('users' ,$param);
	}

	public function tolak_bukti($id, $param){
		$this->db->where('id', $id);
		return $this->db->update('reservasi' ,$param);
	}

	public function getAllNotif(){
		return $this->db->get('notifikasi'); 
	}

	public function update_Notifikasi($nilai, $param, $table){
		$nilai_awal = $nilai;
		$nilai_update = $nilai_awal;
		if ($param=='tambah') {
			$nilai_update+=1;
		} elseif ($param=='kurang') {
			$nilai_update = $nilai_awal - 1;
		}
		if ($table == 'admin_reg') {
			return $this->db->query("UPDATE notifikasi SET admin_reg = REPLACE(admin_reg, '$nilai_awal', '$nilai_update')");
		}
		elseif ($table == 'bukti_transfer') {
			return $this->db->query("UPDATE notifikasi SET bukti_transfer = REPLACE(bukti_transfer, '$nilai_awal', '$nilai_update')");
		}
		elseif ($table == 'stock') {
			return $this->db->query("UPDATE notifikasi SET stock = REPLACE(stock, '$nilai_awal', '$nilai_update')");
		}
		
		// return $this->db->update('users' ,$param);
	}

	public function update_notif_tf($param){
		$nilai_awal = $param;
		$nilai_update = $nilai_awal+1;
		return $data['update'] = $this->db->query("UPDATE notifikasi SET bukti_transfer = REPLACE(bukti_transfer, '$nilai_awal', '$nilai_update')");
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
		$this->db->select("p.*")->from("products p");
		// $this->db->select("c.category_code")->from("product_categories c");
		$this->db->select("s.product_id, MAX(s.price) AS max_price, MIN(s.price) AS min_price")->from("product_has_sizes s");
		$this->db->select("i.image, i.first")->from("product_images i");
		$this->db->group_by("s.product_id")->where("s.product_id = p.id");
		$this->db->where("i.product_id = p.id");
		$this->db->where("p.category_id = ".$param);
		$data = $this->db->get();

		return $data->result();
	}

	public function getProductByCategory($param, $category) {
		$this->db->select("p.*")->from("products p");
		$this->db->select("c.category_code")->from("product_categories c");
		$this->db->select("s.product_id, MAX(s.price) AS max_price, MIN(s.price) AS min_price")->from("product_has_sizes s");
		$this->db->select("i.image, i.first")->from("product_images i");
		$this->db->group_by("s.product_id")->where("s.product_id = p.id");
		$this->db->where("i.product_id = p.id");
		$this->db->where("p.name = '$param'");
		$this->db->where("c.id = p.category_id");
		$this->db->where("c.category_code = '$category'");
		$data = $this->db->get();

		return $data->result();
	}

	public function getAllProduct() {
		$this->db->select("p.*")->from("products p");
		$this->db->select("c.category_code, c.category_name")->from("product_categories c");
		$this->db->select("s.product_id, MAX(s.price) AS max_price, MIN(s.price) AS min_price")->from("product_has_sizes s");
		$this->db->select("i.image, i.first")->from("product_images i");
		$this->db->group_by("s.product_id")->where("s.product_id = p.id");
		$this->db->where("p.category_id = c.id");
		$this->db->where("i.product_id = p.id");
		$data = $this->db->get();

		return $data->result();
	}

	public function getUkuran($param, $category) {
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
		$sql = $this->db->query("SELECT * FROM orders where id_pemesan='$id_pemesan' and sku_product='$sku' and ukuran='$ukuran' and status ='pesan' ");
		return $sql->result_array();
	}

    public function input_data_orders($data,$table){
    	// echo "<pre>";
    	// print_r($data);
    	// echo "</pre>";
    	// die();
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
   		// return $sql = "SELECT * FROM orders WHERE id_pemesan='$param' and status='proses_3";
		return $this->db->get_where('orders', array('id_pemesan' => $param, 'status' => 'pesan'));
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
		$sql = $this->db->query("SELECT SUM(total) as total FROM orders WHERE id_pemesan = '$id' and status = 'pesan'");
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
		$id = $this->dataencryption->enc_dec("decrypt", $param);
		return $this->db->get_where('orders', array('id' => $id));
	}

	public function input_data_reservasi($data,$table){
    	$this->db->insert($table,$data);
	}

	public function getReservasi($param){
		$id = $param;	
		return $this->db->get_where('reservasi', array('id_pemesan' => $id, 'status' => 'proses_3'))->result_array();
	}

	public function lihatReservasi($param){
		$id = $param;	
		return $this->db->get_where('reservasi', array('id_pemesan' => $id))->result_array();
	}

	public function do_upload($images, $path)
	{
		$config['overwrite']            = true;


		$config['upload_path'] = 'assets/img/'.$path;
		// $config['upload_path'] = 'assets/img/bukti_tf/';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size']	= '10000';
		$config['max_width']  = '10024';
		$config['max_height']  = '10000';



		$this->load->library('upload');
		$this->upload->initialize($config);

		if ( ! $this->upload->do_upload($images))
		{
			$data = array(
				'data' => '',
				'resp_msg' => $this->upload->display_errors(),
				'resp_code' => "99"
			);
		}
		else
		{
			$data = array(
				'data' => $this->upload->data(),
				'upload_path' => $config['upload_path'],
				'resp_msg' =>'Upload Sukses',
				'resp_code' => "00"
			);

		}

		return $data;

	}

	public function upload_trf($id, $id_pemesan){

		if (!empty($_FILES['gambar']['name'])) {
			$image = $this->do_upload('gambar', 'bukti_tf/');
			if($image['resp_code']=='00'){
				$img = $image['upload_path'].$image['data']['file_name'];
			}else{
				$img="Error";
			}
		} else {
			$img = $this->input->post('gambar');
		}

		$data = array(
			'bukti_transaksi'=>$img,
			'status' => 'proses_3'
		);
		$id_pemesan = $this->dataencryption->enc_dec("decrypt", $id_pemesan);
		$this->db->where('id', $id);
		$this->db->where('id_pemesan', $id_pemesan);
		$this->db->update('reservasi',$data);
		return $data;
	}

	public function product_upload()
	{
		if (!empty($_FILES['gambar']['name'])) {
			$image = $this->do_upload('gambar', 'product/');
			if($image['resp_code']=='00'){
				$img = $image['upload_path'].$image['data']['file_name'];
			}else{
				$img="Error";
			}
		} else {
			$img = $this->input->post('gambar');
		}

		$data = array(
			'image'=>$img
		);
		return $data;

	}

	public function thumbnail_upload()
	{
		var_dump(($_FILES['mygambar[]']['name'])); die();
		if (!empty($_FILES['mygambar[]']['name'])) {
			echo "masuuuuukkk";
			die();
			$image = $this->do_upload('gambar', 'product/');
			if($image['resp_code']=='00'){
				$img = $image['upload_path'].$image['data']['file_name'];
			}else{
				$img="Error";
			}
		} else {
			echo "tidak masuuuuuk"; die();
			$img = $this->input->post('gambar');
		}

		$data = array(
			'image'=>$img
		);
		return $data;

	}

	public function get_product_byCategory($param, $condition){

		return $this->db->from('products')
		->join('product_categories','product_categories.id = products.category_id')
		->join('product_has_sizes','product_has_sizes.product_id = products.id')
		->join('product_sizes','product_sizes.id = product_has_sizes.product_size_id')
		->join('product_images','product_images.product_id = products.id')
		->where('product_has_sizes.product_id = products.id')
		// ->where('product_sizes.id = product_has_sizes.product_size_id')
		->where('products.category_id', $param)
		->where('products.product_code', $condition)
		->get()
		->result();
	}

	public function get_pesanan_byIDPemesan($param, $condition){

		return $this->db->from('orders')
		// ->join('product_categories','product_categories.id = products.category_id')
		// ->join('product_has_sizes','product_has_sizes.product_id = products.id')
		// ->join('product_sizes','product_sizes.id = product_has_sizes.product_size_id')
		// ->join('product_images','product_images.product_id = products.id')
		// ->where('product_has_sizes.product_id = products.id')
		// ->where('product_sizes.id = product_has_sizes.product_size_id')
		->where('orders.id_pemesan', $param)
		->where('orders.status', $condition)
		->get()
		->result();
	}	

	public function status_pesan( $id_pemesan){
		$this->db->where('id_pemesan',$id_pemesan);
		$this->db->where('status','pesan');
		$data = array(
			'status' => 'done'
		);
		return $this->db->update('orders',$data);
	}
	

}