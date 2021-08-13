<?php

class VendorController extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
        header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
		$this->load->helper('url_helper');
		$this->load->model('VendorModel');
		$this->load->model('AdminModel');
 	}
    public function index()
    {
		if($this->session->has_userdata('userId')){
			$this->pending();
		}else{
			$this->load->view('Admin/vendor_login_page');
		}
	}
	public function check(){
		$arr =  json_decode($this->input->raw_input_stream);
		$result = $this->AdminModel->check($arr,'user');
		echo $result;
	}
	public function signout(){
		if($this->session->has_userdata('userId')){
			$this->session->unset_userdata("userId");
			$this->session->unset_userdata("userImg");
			$this->session->unset_userdata("userName");
		 }
		//  $this->load->view('Admin/vendor_login_page');
		header("Location: ".base_url());
		
	}
	public function pending(){
		$data['sName'] = $this->session->userName;
		$data['sImg'] = $this->session->userImg;
		$data['sId'] = $this->session->userId;
		$data['pending_list'] = $this->VendorModel->getPendings();
		if($data['pending_list'] == 'false')
			$data['pending_list'] = array();
		$this->load->view('Vendor/pending/pending',$data);
	}
	public function pending_create(){
		$data['sName'] = $this->session->userName;
		$data['sImg'] = $this->session->userImg;
		$data['sId'] = $this->session->userId;
		$data['subcategory_list'] = $this->VendorModel->getSubCategories();
		$this->load->view('Vendor/pending/create',$data);
	}
	public function pending_save(){
		$arr = array();
		$arr['subcategoryId'] = $this->input->post('sId');
		$arr['pendingName'] = $this->input->post('fname');
		$arr['pendingCount'] = $this->input->post('count');
		$arr['pendingPrice'] = $this->input->post('price');
		$arr['pendingContent'] = $this->input->post('content');
		$arr['pendingVenderId'] = $this->session->userId;
		$arr['pendingDate'] = $this->input->post('date');

		if($this->input->post('gender'))
			$arr['pendingGender'] = $this->input->post('gender');
		if($this->input->post('color'))
			$arr['pendingColor'] = $this->input->post('color');
		if($this->input->post('size'))
			$arr['pendingSize'] = $this->input->post('size');
			// $arr['pendingMainImg'] = '';
		
		$arr['pendingImg'] =  array();
		$count = count($_FILES['files']['name']);
		$arr['pendingMainImg'] = '';
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
			$this->upload->initialize($config);
			if($this->upload->do_upload('file')){
			  $uploadData = $this->upload->data();
			  $filename = $uploadData['file_name'];
			   if($arr['pendingMainImg'] == '')
					  $arr['pendingMainImg'] = 	$config['file_name'] ;
			  $arr['pendingImg'][]=$filename;
		}}}
		$arr['pendingImg'] = json_encode($arr['pendingImg']);
		$this->VendorModel->addPending($arr);
		$this->pending();
	}
	public function pending_update(){
		// $this->load->view('Vendor/pending/update');
	}
	public function pending_del(){
		// $this->load->view('Vendor/pending/del');
	}
	// ======== Register ===========
	public function register(){
		$data['sName'] = $this->session->userName;
		$data['sImg'] = $this->session->userImg;
		$data['sId'] = $this->session->userId;
		if($this->VendorModel->getRegisters() != 'false')
			$data['register_list'] = $this->VendorModel->getRegisters();
		else
			$data['register_list'] = array();
		$this->load->view('Vendor/Register/register',$data);
	}
	// chat
	public function chat(){
		$data['sName'] = $this->session->userName;
		$data['sImg'] = $this->session->userImg;
		$data['sId'] = $this->session->userId;
		$this->load->view('Vendor/chat', $data);
	}
	// profile
	public function edit(){
		$data['user_info'] = $this->AdminModel->getUser($this->session->userId);
		$this->load->view('Vendor/edit_vendor',$data);
	}
	public function update(){
		$config['upload_path']          ='./assets/app-assets/images/portrait/small';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 0;
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
			$this->session->set_userdata('userName',$arr['userName']);
			$this->session->set_userdata('userImg', $arr['userImg']);
		$this->AdminModel->updateUser($arr, $this->input->post('fId'));
		$this->index();
	}
}
