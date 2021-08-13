<?php

class HomeController extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
        header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
		$this->load->helper('url_helper');
		$this->load->model('HomeModel');
		$this->load->model('AdminModel');
		$this->load->library('paypal_lib');
		$this->load->library('cart');
	}
    public function index()
    {

		$this->first();
	}
	public function first(){
		$data['category_list'] = $this->AdminModel->getCategories();
		$data['subcategory_list'] = $this->AdminModel->getSubCategories();
		$data['img_list'] = $this->AdminModel->getImageList();
		if($data['category_list'] == 'false')
			$data['category_list'] = array();
		if($data['subcategory_list'] == 'false')
			$data['subcategory_list'] = array();
		if($data['img_list'] == 'false')
			$data['img_list'] = array();
		$this->load->view('home',$data);
	}
	public function list(){
		$data['category_list'] = $this->AdminModel->getCategories();
		$data['subcategory_list'] = $this->AdminModel->getSubCategories();
		if($data['category_list'] == 'false')
			$data['category_list'] = array();
		if($data['subcategory_list'] == 'false')
			$data['subcategory_list'] = array();
		$data['category_p'] = 'false';
		$data['subcategory_p'] = 'false';
		$data['keyword_data'] = '';
		$data['subcategory_id'] = 'false';
		$this->load->view('product_list', $data);
	}
	public function detail($productId = NULL){
		$data['product_info'] = $this->AdminModel->getProduct($productId);
		$data['category_list'] = $this->AdminModel->getCategories();
		$data['subcategory_list'] = $this->AdminModel->getSubCategories();
		if($data['category_list'] == 'false')
			$data['category_list'] = array();
		if($data['subcategory_list'] == 'false')
			$data['subcategory_list'] = array();
		$data['category_p'] = 'false';
		$data['subcategory_p'] = 'false';
		$data['keyword_data'] = '';
		$data['subcategory_id'] = 'false';
		$this->load->view('product_detail', $data);
	}
	// ======================= Cart =====================================
	public function cart(){
		$data['category_list'] = $this->AdminModel->getCategories();
		$data['subcategory_list'] = $this->AdminModel->getSubCategories();
		$data['img_list'] = $this->AdminModel->getImageList();
		if($data['category_list'] == 'false')
			$data['category_list'] = array();
		if($data['subcategory_list'] == 'false')
			$data['subcategory_list'] = array();
		if($data['img_list'] == 'false')
			$data['img_list'] = array();	
		$this->load->view('shopping_cart',$data);
	}
	// =======================================================================
	public function checkout(){
		$data['category_list'] = $this->AdminModel->getCategories();
		$data['subcategory_list'] = $this->AdminModel->getSubCategories();
		$data['img_list'] = $this->AdminModel->getImageList();
		if($data['category_list'] == 'false')
			$data['category_list'] = array();
		if($data['subcategory_list'] == 'false')
			$data['subcategory_list'] = array();
		if($data['img_list'] == 'false')
			$data['img_list'] = array();
		$this->load->view('checkout',$data);
	}
	public function vendor(){
		$data['category_list'] = $this->AdminModel->getCategories();
		$data['subcategory_list'] = $this->AdminModel->getSubCategories();
		if($data['category_list'] == 'false')
			$data['category_list'] = array();
		if($data['subcategory_list'] == 'false')
			$data['subcategory_list'] = array();
		$this->load->view('become_vendor', $data);
	}
	public function login(){
		$data['category_list'] = $this->AdminModel->getCategories();
		$data['subcategory_list'] = $this->AdminModel->getSubCategories();
		if($data['category_list'] == 'false')
			$data['category_list'] = array();
		if($data['subcategory_list'] == 'false')
			$data['subcategory_list'] = array();
		$this->load->view('login', $data);
	}
	public function login_check(){
		$arr =  json_decode($this->input->raw_input_stream);
		$result = $this->AdminModel->check($arr, 'user');
		echo $result;
		// if($result == 'false')
		// 	$this->load->view('login');
		// else
		// 	$this->first();
	}
	// ================== Main Shop +++++++++++++++++++++
	public function shop($category = NULL, $subcategory = NULL){
		$data['category_list'] = $this->AdminModel->getCategories();
		$data['subcategory_list'] = $this->AdminModel->getSubCategories();
		if($data['category_list'] == 'false')
			$data['category_list'] = array();
		if($data['subcategory_list'] == 'false')
			$data['subcategory_list'] = array();
		$data['result_list'] = $this->AdminModel->searchProduct($category, $subcategory);
		if($data['result_list'] == 'false')
			$data['result_list'] = array();
		$data['result_list_length'] = count($data['result_list']);
		$data['category_p'] = 'false'; 	$data['subcategory_p'] = 'false';
		if($category)
			$data['category_p'] = $this->AdminModel->getCategory($category);
		if($subcategory)
			$data['subcategory_p'] = $this->AdminModel->getSubCategory($subcategory);
		$data['keyword_data'] = '';
		$data['subcategory_id'] = 'false';
		$this->load->view('product_list', $data);
	}
	// ============================== +++++++++++++++++++++++
	public function NRegister(){
		$config['upload_path']          ='./assets/app-assets/images/portrait/small';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 100;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;
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
		$this->first();
	}
	public function VendorRegister(){
		$res =  json_decode($this->input->raw_input_stream);
		$arr = array();
		$arr['userEmail'] = $res->email;
		$arr['userName'] = $res->fname;
		$arr['userGender'] = $res->gender;
		$arr['userBirthday'] = $res->birthday;
		$arr['userPhonenumber'] = $res->phone;
		$arr['userPassword'] = md5($res->password);
		$this->AdminModel->addUser($arr);
		echo 'true';
	}	
	public function CustomerRegister(){
		$res =  json_decode($this->input->raw_input_stream);
		$arr = array();
		$arr['customerEmail'] = $res->email;
		$arr['customerName'] = $res->fname;
		$arr['customerGender'] = $res->gender;
		$arr['customerCompany'] = $res->company;
		$arr['customerPosition'] = $res->position;
		$arr['customerPassword'] = md5($res->password);
		$result = $this->AdminModel->addCustomer($arr);
		echo $result;
	}
	public function search(){
		// $this->load->view('search');
		$type = 'all';
		// if($this->input->post('categorySelect'))
		$type = $this->input->post('categorySelect');
		$keyword = $this->input->post('keyword');
		$data['category_list'] = $this->AdminModel->getCategories();
		$data['subcategory_list'] = $this->AdminModel->getSubCategories();
		if($data['category_list'] == 'false')
			$data['category_list'] = array();
		if($data['subcategory_list'] == 'false')
			$data['subcategory_list'] = array();
		$data['result_list'] = $this->AdminModel->searchProductKeyword($type,$keyword);
		if($data['result_list'] == 'false')
			$data['result_list'] = array();
		$data['result_list_length'] = count($data['result_list']);
		$data['category_p'] = 'false';
		$data['subcategory_p'] = $this->AdminModel->getSubCategory($type);
		// if($type !='all')
		$data['subcategory_id'] =  $this->AdminModel->getSubCategory($type)->subcategoryId;
		$data['keyword_data'] = $keyword;
		$this->load->view('product_list', $data);
	}
	public function signout(){
		if($this->session->has_userdata('customerId')){
			$this->session->unset_userdata("customerName");
			$this->session->unset_userdata('customerId');
		 }
		 $this->first();
	}
	// ===================== CUSTOMER ===============================
	public function customer_check(){
		$arr =  json_decode($this->input->raw_input_stream);
		$result = $this->AdminModel->check($arr, 'customer');
		if($result == 'verify'){
			$this->load->library('email');
			$this->email->set_newline("\r\n");
			$this->email->from('superpunch727@gmail.com', "TenderSite");
			$this->email->to('superpunch727@gmail.com');  
			$this->email->subject("Email Verification");
			$message = 	"
			<html>
			<head>
			<title>Verification Code</title>
			</head>
			<body>
			<p>Your Account:</p>
			<p>Please have to copy the verify code to login form.</p>
			<h4>XyJke127hdjkf3n2k;fnklc</h4>
			</body>
			</html>
			";
			$this->email->message($message);
			$this->email->send();
			// echo 'dd';
		}
		echo $result;
	}
	// ======================= Cart ===============================
	public function cart_add(){
		$data = array(
		'id'      => $this->input->post('productId'),
		'qty'     => $this->input->post('qty'),
		'price'   => $this->input->post('price'),
		'color'   => $this->input->post('color'),
		'size'   => $this->input->post('size'),
		'name'    => $this->input->post('name'),
		'img'     => $this->input->post('image'), 
		// 'options' => array('Size' => $this->input->post('size'), 'Color' => $this->input->post('color'))
		);
		$this->cart->insert($data);
		$this->cart();
		echo 'true';
	}
	public function cart_update(){
        // Recieve post values,calcute them and update
        $cart_info = $_POST['cart'] ;
        foreach( $cart_info as $id => $cart)
        {
           $rowid = $cart['rowid'];
           $price = $cart['price'];
           $amount = $price * $cart['qty'];
           $qty = $cart['qty'];
           $data = array(
            'rowid' => $rowid,
            'price' => $price,
            'amount' => $amount,
            'qty' => $qty
            );
            $this->cart->update($data);
        }
        $this->checkout();
    }

	//  ======================= CART ============================
	public function addcart(){
		$arr =  json_decode($this->input->raw_input_stream);
		$obj = $this->AdminModel->getProduct($arr->productId);
		$data = array(
			'id' => $obj->productId,
			'qty' => $arr->qty,
			'price' => $obj->productNPrice,
			'size' => $obj->productSizeCapacity,
			'img' => $obj->productMainImg,
			'name' => $obj->productName,
			'material' => $obj->productMaterial
		);
		$this->cart->insert($data);
		echo 'true';

	}
	public function delcart(){
		$arr =  json_decode($this->input->raw_input_stream);
		$this->cart->remove($arr->id);
		echo 'true';
	}
	public function updatecart(){
		$arr =  json_decode($this->input->raw_input_stream);
		if($arr->qty != '1' || $arr->flag != '-1')
			$qty = (int)($arr->flag) + (int)($arr->qty);
		else
			$qty = (int)$arr->qty;
		$data = array(
			'rowid' => $arr->id,
			'qty'   => $qty
		);
		$this->cart->update($data);
		echo 'true';
	}
	// =============== Other ================
	public function aboutus(){
		$data['category_list'] = $this->AdminModel->getCategories();
		$data['subcategory_list'] = $this->AdminModel->getSubCategories();
		if($data['category_list'] == 'false')
			$data['category_list'] = array();
		if($data['subcategory_list'] == 'false')
			$data['subcategory_list'] = array();
		$this->load->view('aboutus',$data);
	}
	public function contactus(){
		$data['category_list'] = $this->AdminModel->getCategories();
		$data['subcategory_list'] = $this->AdminModel->getSubCategories();
		if($data['category_list'] == 'false')
			$data['category_list'] = array();
		if($data['subcategory_list'] == 'false')
			$data['subcategory_list'] = array();
		$this->load->view('contactus',$data);
	}
	public function faqs(){
		$data['category_list'] = $this->AdminModel->getCategories();
		$data['subcategory_list'] = $this->AdminModel->getSubCategories();
		if($data['category_list'] == 'false')
			$data['category_list'] = array();
		if($data['subcategory_list'] == 'false')
			$data['subcategory_list'] = array();
		$this->load->view('faqs',$data);
	}
	// Paypal
	public function buy(){
        // Set variables for paypal form
        $returnURL = base_url().'index.php/paypal/success';
        $cancelURL = base_url().'index.php/paypal/cancel';
        $notifyURL = base_url().'index.php/paypal/ipn';
        
        // Get product data from the database
        // $product = $this->product->getRows($id);
        
        // Get current user ID from the session
        $userID = $this->session->customerId;
        
		// Add fields to paypal form
		$item_name = '';
		$item_qty = 0;
		foreach ($this->cart->contents() as $items){  
			// echo $items['qty'];
			// if (is_numeric($items['qty']))
			$item_qty += intval($items['qty']);
			$item_name .= $items['name'] .' ';
		}
		// echo $item_qty ;
			$this->paypal_lib->add_field('return', $returnURL);
				$this->paypal_lib->add_field('cancel_return', $cancelURL);
				$this->paypal_lib->add_field('notify_url', $notifyURL);
				$this->paypal_lib->add_field('item_name', $item_name);
				$this->paypal_lib->add_field('custom', $userID);
				$this->paypal_lib->add_field('item_quantity', $item_qty);
				$this->paypal_lib->add_field('amount', $this->cart->total());
		 
        // Render paypal form
        $this->paypal_lib->paypal_auto_form();
	}
}
