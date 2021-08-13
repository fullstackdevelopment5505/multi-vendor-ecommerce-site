<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct(){
		parent::__construct();
	    header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
        header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
		$this->load->model('AdminModel');
	}
	public function index()
	{
		$data['category_list'] = $this->AdminModel->getCategories();
		$data['subcategory_list'] = $this->AdminModel->getSubCategories();
		$data['img_list'] = $this->AdminModel->getImageList();
		$data['product_list'] = $this->AdminModel->getProducts();
		if($data['category_list'] == 'false')
			$data['category_list'] = array();
		if($data['subcategory_list'] == 'false')
			$data['subcategory_list'] = array();
		if($data['img_list'] == 'false')
			$data['img_list'] = array();
		if($data['product_list'] == 'false')
			$data['product_list'] = array();
		$this->load->view('home',$data);
	}
}
