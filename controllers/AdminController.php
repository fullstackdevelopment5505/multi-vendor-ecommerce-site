<?php

class AdminController extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
	    header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
        header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
		$this->load->helper('url_helper');
		$this->load->model('AdminModel');
 	}
    public function index()
    {
		if($this->session->has_userdata('admin')){
				$this->categories();
		}else{
			$this->load->view('Admin/login_page');
		}
	}
	public function check(){
		$arr =  json_decode($this->input->raw_input_stream);
		$result = $this->AdminModel->check($arr, 'admin');
		echo $result;
	}
	public function admin_page(){
		$this->load->view('Admin/admin_page');
	}
	public function signout(){
		if($this->session->has_userdata('admin')){
			$this->session->unset_userdata("admin");
			$this->session->unset_userdata('adminId');
		 }
		 $this->load->view('Admin/login_page');
	}
	public function user(){
		$data['user_list'] = $this->AdminModel->getUsers();
		if($data['user_list'] == 'false')
			$data['user_list'] = array();
		$this->load->view('Admin/user_page',$data);
	}
	public function user_create(){
		$this->load->view('Admin/User/create');
	}
	public function user_edit($id=NULL){
		$data['user_info'] = $this->AdminModel->getUser($id);
		$this->load->view('Admin/User/edit',$data);
	}
	public function user_del(){
		$result =  json_decode($this->input->raw_input_stream);
		$this->AdminModel->delUsers($result);
		// echo $result->arr;
	}
	public function do_upload(){
		$config['upload_path']          ='./assets/app-assets/images/portrait/small';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 0;
		$config['file_name'] = $this->input->post('fname') ;
		$this->load->library('upload', $config);
		$arr = array();
		$arr['userEmail'] = $this->input->post('email');
		$arr['userName'] = $this->input->post('fname');
		$arr['userGender'] = $this->input->post('gender');
		$arr['userBirthday'] = $this->input->post('birthday');
		$arr['userPhonenumber'] = $this->input->post('phone');
		$arr['userPassword'] = md5($this->input->post('password'));
		if ( ! $this->upload->do_upload('userfile'))
		{
			$arr['userImg'] = 'default.png';			
			// echo $this->upload->display_errors();
		}else
			$arr['userImg'] = $this->upload->data('file_name');  
		$this->AdminModel->addUser($arr);
		// $this->user();
		header("Location: ".base_url()."index.php/admin/user");

		// }
	}
	public function do_upload_update(){
		$config['upload_path']          ='./assets/app-assets/images/portrait/small';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 0;
			// $config['max_width']            = 1024;
			// $config['max_height']           = 768;
			$config['file_name'] 			= $this->input->post('fname');
		$this->load->library('upload', $config);
		$arr = array();
		$arr['userEmail'] = $this->input->post('email');
		$arr['userName'] = $this->input->post('fname');
		$arr['userGender'] = $this->input->post('gender');
		$arr['userBirthday'] = $this->input->post('birthday');
		$arr['userPhonenumber'] = $this->input->post('phone');
		$arr['userPassword'] = md5($this->input->post('password'));
		if ( ! $this->upload->do_upload('userfile'))
		{
			
		}	
		else
			$arr['userImg'] = $this->upload->data('file_name'); 
		$this->AdminModel->updateUser($arr, $this->input->post('fId'));
		$this->user();
	}
	// =================Category=====================
	public function categories(){
		$data['category_list'] = $this->AdminModel->getCategories();
		if($data['category_list'] == 'false')
			$data['category_list'] = array();
		$this->load->view('Admin/Category/categories',$data);
	}
	public function categories_create(){
		$this->load->view('Admin/Category/create');
	}
	public function categories_save(){
		$arr['categoryName'] = $this->input->post('fname');
		$this->AdminModel->addCategories($arr);
		$this->categories();
	}
	public function categories_edit($id=NULL){
		$data['categories_info'] = $this->AdminModel->getCategory($id);
		$this->load->view('Admin/Category/edit',$data);
	}
	public function categories_update(){
		$arr['categoryName'] = $this->input->post('fname');
		$id =  $this->input->post('fId');
		$this->AdminModel->updateCategories($arr, $id);
		$this->categories();
	}
	public function categories_del(){
		$result =  json_decode($this->input->raw_input_stream);
		$this->AdminModel->delCategories($result);
		// echo $result->arr;
	}
	// ========================================================
	// ==================== SubCategory =======================
	// ========================================================
	public function subcategories(){
		$data['subcategory_list'] = $this->AdminModel->getSubCategories();
		if($data['subcategory_list'] == 'false')
			$data['subcategory_list'] = array();
		$this->load->view('Admin/SubCategory/subcategories',$data);
	}
	public function subcategories_create(){
		$data['category_list'] = $this->AdminModel->getCategories();
		if($data['category_list'] == 'false')
			$data['category_list'] = array();
		$this->load->view('Admin/SubCategory/create', $data);
	}
	public function subcategories_save(){
		$arr['subcategoryName'] = $this->input->post('fname');
		$arr['categoryId'] = $this->input->post('category');
		$this->AdminModel->addSubCategories($arr);
		// $this->subcategories();
		header("Location: ".base_url()."index.php/admin/subcategory");

	}
	public function subcategories_edit($id=NULL){
		$data['category_list'] = $this->AdminModel->getCategories();
		$data['category_info'] = $this->AdminModel->getSubCategory($id);
		if($data['category_list'] == 'false')
			$data['category_list'] = array();
		$this->load->view('Admin/SubCategory/edit',$data);
	}
	public function subcategories_update(){
		$arr['subcategoryName'] = $this->input->post('fname');
		$arr['categoryId'] = $this->input->post('category');
		$id =  $this->input->post('fId');
		$this->AdminModel->updateSubCategories($arr, $id);
		$this->subcategories();
	}
	public function subcategories_del(){
		$result =  json_decode($this->input->raw_input_stream);
		$this->AdminModel->delSubCategories($result);
		// echo $result->arr;
	}	
	// ====================================================
	// ==================== Product =======================
	// ====================================================
	public function product(){
		$data['product_list'] = $this->AdminModel->getProducts();
		if($data['product_list'] == 'false')
			$data['product_list'] = array();
		$this->load->view('Admin/Product/product',$data);
	}
	public function product_create(){
		$data['user_list'] = $this->AdminModel->getUsers();
		$data['subcategory_list'] = $this->AdminModel->getSubCategories();
		if($data['user_list'] == 'false')
			$data['user_list'] = array();
		if($data['subcategory_list'] == 'false')
			$data['subcategory_list'] = array();
		$this->load->view('Admin/Product/create', $data);
	}
	public function product_save(){
		// $data = [];
		$arr = array();
		$arr['subcategoryId'] = $this->input->post('sId');
		$arr['productName'] = $this->input->post('fname');
		$arr['productCount'] = $this->input->post('count');
		$arr['productNPrice'] = $this->input->post('price');
		$arr['productPPrice'] = $arr['productNPrice'];
		$arr['productContent'] = $this->input->post('content');
		$arr['productVendorId'] = $this->input->post('vId');
		$arr['productDate'] = $this->input->post('date');
		$arr['productMaterial'] = $this->input->post('material');
		$arr['productCertifications'] = $this->input->post('certify');
		$arr['productSizeCapacity'] = $this->input->post('size');
		$arr['productMainImg'] = '';
		$arr['productImg'] = array();
		$obj = $this->AdminModel->getSubcategory($arr['subcategoryId']);
		$count = count($_FILES['files']['name']);
		$now = new DateTime('now');	
		for($i=0;$i<$count;$i++){
	  
		  if(!empty($_FILES['files']['name'][$i])){
	  
			$_FILES['file']['name'] = $_FILES['files']['name'][$i];
			$_FILES['file']['type'] = $_FILES['files']['type'][$i];
			$_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
			$_FILES['file']['error'] = $_FILES['files']['error'][$i];
			$_FILES['file']['size'] = $_FILES['files']['size'][$i];
	
			$config['upload_path'] = './assets/app-assets/images/product'; 
			$config['allowed_types'] = 'jpg|jpeg|png|gif';
			$config['max_size'] = '5000';
			// $config['file_name'] = $_FILES['files']['name'][$i];
			$temp = $obj->categoryId . '_' . $now->format('y_m_d_H_i_s') . '_' . $i;
			$config['file_name'] = $temp;
			$this->load->library('upload',$config); 
			$this->upload->initialize($config);
			if($this->upload->do_upload('file')){
				$uploadData = $this->upload->data();
				$filename = $uploadData['file_name'];
			   if($arr['productMainImg'] == '')
					  $arr['productMainImg'] = $filename;
					$arr['productImg'][]=$filename;
			}
		  }
	 
		}
		$arr['productImg'] = json_encode($arr['productImg']);
		// $this->load->view('imageUploadForm', $data); 
		$this->AdminModel->addProduct($arr);
		// $this->product();
		header("Location: ".base_url()."index.php/admin/product");

	}
	public function product_edit($id=NULL){
		$data['user_list'] = $this->AdminModel->getUsers();
		$data['subcategory_list'] = $this->AdminModel->getSubCategories();
		$data['product_info'] = $this->AdminModel->getProduct($id);
		if($data['user_list'] == 'false')
			$data['user_list'] = array();
		if($data['subcategory_list'] == 'false')
			$data['subcategory_list'] = array();
		$this->load->view('Admin/Product/edit',$data);
	}
	public function product_update(){
		$arr = array();
		$arr['subcategoryId'] = $this->input->post('sId');
		$arr['productName'] = $this->input->post('fname');
		$arr['productCount'] = $this->input->post('count');
		$arr['productNPrice'] = $this->input->post('price');
		$arr['productPPrice'] = $arr['productNPrice'];
		$arr['productContent'] = $this->input->post('content');
		$arr['productVendorId'] = $this->input->post('vId');
		$arr['productDate'] = $this->input->post('date');
		$id =  $this->input->post('fId');
		$arr['productMaterial'] = $this->input->post('material');	
		$arr['productSizeCapacity'] = $this->input->post('size');
		$arr['productCertifications'] = $this->input->post('certify');
		$arr['productMainImg'] ='';
		$count = count($_FILES['files']['name']);
		if($count > 0)
			$arr['productImg'] = '';
	
		for($i=0;$i<$count;$i++){
	  
		  if(!empty($_FILES['files']['name'][$i])){
	  
			$_FILES['file']['name'] = $_FILES['files']['name'][$i];
			$_FILES['file']['type'] = $_FILES['files']['type'][$i];
			$_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
			$_FILES['file']['error'] = $_FILES['files']['error'][$i];
			$_FILES['file']['size'] = $_FILES['files']['size'][$i];
	
			$config['upload_path'] = './assets/app-assets/images/product'; 
			$config['allowed_types'] = 'jpg|jpeg|png|gif';
			$config['max_size'] = '5000';
			$config['file_name'] = $_FILES['files']['name'][$i];

			$this->load->library('upload',$config); 
	  
			if($this->upload->do_upload('file')){
			  $uploadData = $this->upload->data();
			  $filename = $uploadData['file_name'];
			   if($arr['productMainImg'] =='')
			  		$arr['productMainImg'] = $config['file_name'] ;

			}
		  }
	 
		}
		$this->AdminModel->updateProduct($arr, $id);
		$this->product();
	}
	public function product_del(){
		$result =  json_decode($this->input->raw_input_stream);
		$this->AdminModel->delProduct($result);
		// echo $result->arr;
	}	
	// ==================== ======== ================================
	// ==================== Register ================================
	// ==================== ======== ================================
	public function register(){
		$data['register_list'] = $this->AdminModel->getRegisters();
		if($data['register_list'] == 'false')
			$data['register_list'] = array();

		$this->load->view('Admin/Register/register',$data);
	}
	// ==================== ======= ================================
	// ==================== Pending ================================
	// ==================== ======= ================================
	public function pending(){
		if($this->AdminModel->getPendings() != 'false')
			$data['pending_list'] = $this->AdminModel->getPendings();
		else
			$data['pending_list'] = array();
		$this->load->view('Admin/Pending/pending', $data);
	}
	public function pending_status($status= NULL, $id = NULL){
		$this->AdminModel->setStatusPending($status, $id);
		$this->pending();
	}
    // 	=================         Payment       =====================
	public function payment()
	{
		//check whether stripe token is not empty
		if(!empty($_POST['stripeToken']))
		{
			//get token, card and user info from the form
			$token  = $_POST['stripeToken'];
			$name = $_POST['name'];
			$email = $_POST['email'];
			$card_num = $_POST['card_num'];
			$card_cvc = $_POST['cvc'];
			$card_exp_month = $_POST['exp_month'];
			$card_exp_year = $_POST['exp_year'];
			
			//include Stripe PHP library
			require_once APPPATH."third_party/stripe/init.php";
			
			//set api key
			$stripe = array(
			  "secret_key"      => "YOUR_SECRET_KEY",
			  "publishable_key" => "YOUR_PUBLISHABLE_KEY"
			);
			
			\Stripe\Stripe::setApiKey($stripe['secret_key']);
			
			//add customer to stripe
			$customer = \Stripe\Customer::create(array(
				'email' => $email,
				'source'  => $token
			));
			
			//item information
			$itemName = "Stripe Donation";
			$itemNumber = "PS123456";
			$itemPrice = 50;
			$currency = "usd";
			$orderID = "SKA92712382139";
			
			//charge a credit or a debit card
			$charge = \Stripe\Charge::create(array(
				'customer' => $customer->id,
				'amount'   => $itemPrice,
				'currency' => $currency,
				'description' => $itemNumber,
				'metadata' => array(
					'item_id' => $itemNumber
				)
			));
			
			//retrieve charge details
			$chargeJson = $charge->jsonSerialize();

			//check whether the charge is successful
			if($chargeJson['amount_refunded'] == 0 && empty($chargeJson['failure_code']) && $chargeJson['paid'] == 1 && $chargeJson['captured'] == 1)
			{
				//order details 
				$amount = $chargeJson['amount'];
				$balance_transaction = $chargeJson['balance_transaction'];
				$currency = $chargeJson['currency'];
				$status = $chargeJson['status'];
				$date = date("Y-m-d H:i:s");
			
				
				//insert tansaction data into the database
				$dataDB = array(
					'name' => $name,
					'email' => $email, 
					'card_num' => $card_num, 
					'card_cvc' => $card_cvc, 
					'card_exp_month' => $card_exp_month, 
					'card_exp_year' => $card_exp_year, 
					'item_name' => $itemName, 
					'item_number' => $itemNumber, 
					'item_price' => $itemPrice, 
					'item_price_currency' => $currency, 
					'paid_amount' => $amount, 
					'paid_amount_currency' => $currency, 
					'txn_id' => $balance_transaction, 
					'payment_status' => $status,
					'created' => $date,
					'modified' => $date
				);

				if ($this->db->insert('orders', $dataDB)) {
					if($this->db->insert_id() && $status == 'succeeded'){
						$data['insertID'] = $this->db->insert_id();
						$this->load->view('payment_success', $data);
					}else{
						echo "Transaction has been failed";
					}
				}
				else
				{
					echo "not inserted. Transaction has been failed";
				}

			}
			else
			{
				echo "Invalid Token";
				$statusMsg = "";
			}
		}
	}
	public function payment_success()
	{
		$this->load->view('payment_success');
	}

	public function payment_error()
	{
		$this->load->view('payment_error');
	}
	//  chat
	public function chat(){
		$this->load->view('Admin/chat');
	}
	//  ================= Customer =====================
	public function customer(){
		$data['user_list'] = $this->AdminModel->getCustomers();
		if($data['user_list'] == 'false')
			$data['user_list'] = array();
		$this->load->view('Admin/customer',$data);
	}
	public function customer_create(){
		$this->load->view('Admin/Customer/create');
	}
	public function customer_edit($id=NULL){
		$data['user_info'] = $this->AdminModel->getCustomer($id);
		$this->load->view('Admin/Customer/edit',$data);
	}
	public function customer_del(){
		$result =  json_decode($this->input->raw_input_stream);
		$this->AdminModel->delCustomer($result);
		// echo $result->arr;
	}
	public function customer_save(){
		$arr = array();
		$arr['customerEmail'] = $this->input->post('email');
		$arr['customerName'] = $this->input->post('fname');
		$arr['customerGender'] = $this->input->post('gender');
		$arr['customerPosition'] = $this->input->post('position');
		$arr['customerCompany'] = $this->input->post('company');
		$arr['customerPassword'] = md5($this->input->post('password'));
		$this->AdminModel->addCustomer($arr);
		header("Location: ".base_url()."index.php/admin/customer");

		// }
	}
	public function customer_update(){
		$arr = array();
		$arr['customerEmail'] = $this->input->post('email');
		$arr['customerName'] = $this->input->post('fname');
		$arr['customerGender'] = $this->input->post('gender');
		$arr['customerPosition'] = $this->input->post('position');
		$arr['customerCompany'] = $this->input->post('company');
		$arr['customerPassword'] = md5($this->input->post('password'));
		$this->AdminModel->updateCustomer($arr, $this->input->post('fId'));
		$this->customer();
	}
	public function edit(){
		$this->load->view('Admin/edit_admin');
	}
	public function update(){
		$arr = array();
		$arr['adminPassword'] = md5($this->input->post('password'));
		$this->AdminModel->update($arr);
		$this->index();
	}
}
