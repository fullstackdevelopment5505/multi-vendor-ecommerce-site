<?php
class AdminModel extends CI_Model{

    public function __construct() {
    }
	public function check($arr,$user){

		// $this->db->where(array('adminId' => $id));
		if($user == 'admin')
			$sql = "select * from admintb where adminId = '".$arr->userId."' AND adminPassword = '".md5($arr->password)."'";
		else if($user == 'customer')
			$sql = "select * from customertb where customerEmail = '".$arr->userId."' AND customerPassword = '".md5($arr->password)."'";
		else
			$sql = "select * from usertb where userEmail = '".$arr->userId."' AND userPassword = '".md5($arr->password)."'";

		$query = $this->db->query($sql);
		if($query -> num_rows() > 0){
			$record = $query->result();
			foreach($record as $row){
				if($user =='admin'){
					$this->session->set_userdata('admin', 'true');
				}
				else if($user=='customer'){
					if($row->customerVerify == 1){
					$this->session->set_userdata('customerName', $row->customerName);
					$this->session->set_userdata('customerId', $row->customerId);
					}else if($arr->code == 'XyJke127hdjkf3n2k;fnklc'){
						$arr_update = array();
						$arr_update['customerEmail'] = $row->customerEmail;
						$arr_update['customerName'] = $row->customerName;
						$arr_update['customerGender'] = $row->customerGender;
						$arr_update['customerPosition'] = $row->customerPosition;
						$arr_update['customerCompany'] = $row->customerCompany;
						$arr_update['customerPassword'] = $row->customerPassword;
						$arr_update['customerVerify'] = 1;
						$this->db->set($arr_update);
						$this->db->where('customerEmail', $arr->userId);
						$this->db->update('customertb');
						$this->session->set_userdata('customerName', $row->customerName);
						$this->session->set_userdata('customerId', $row->customerId);
						return 'true';
					}
						else{
						return'verify';
					}
				}
				else{
					$this->session->set_userdata('userId', $row->userId);
					$this->session->set_userdata('userName',$row->userName);
					$this->session->set_userdata('userImg',$row->userImg);
				}
				return 'true';
			}
			// $this->session->set_userdata('adminId',$record[0]->adminId);
			return 'true';
		}
		return 'false';
	}
	public function getUsers(){
		$query= $this->db->get('usertb');
		if($query -> num_rows() > 0){
			foreach($query->result() as $row){
				$data[] = $row;
			}
			return $data;
		}
		return 'false';
	}
	public function getUser($id){
		$this->db->where('userId', $id);
		$query= $this->db->get('usertb');
		if($query -> num_rows() > 0){
			foreach($query->result() as $row){
				return  $row;
			}
		}
		return 'false';
	}
	public function addUser($arr){
		$this->db->insert('usertb',$arr);
		
	}	
	public function updateUser($arr,$id){
		$this->db->set($arr);
		$this->db->where('userId', $id);
		$this->db->update('usertb');
	}	
	public function delUsers($arr){
		// foreach(json_decode($arr->arr) as $value){
			$this->db->delete('usertb', array('userId' => $arr->arr));  
		// }
	}

	// +++++++++ Category ++++++++++
	public function getCategories(){
		$this->db->order_by('categoryId', 'ASC');
		$query= $this->db->get('categorytb');
		if($query -> num_rows() > 0){
			foreach($query->result() as $row){
				$data[] = $row;
			}
			return $data;
		}
		return 'false';		
	}
	public function getCategory($id){
		$this->db->where('categoryId', $id);
		$query= $this->db->get('categorytb');
		if($query -> num_rows() > 0){
			foreach($query->result() as $row){
				return  $row;
			}
		}
		return 'false';
	}
	public function addCategories($arr){
		$this->db->insert('categorytb',$arr);
	}	
	public function updateCategories($arr, $id){
		$this->db->set($arr);
		$this->db->where('categoryId', $id);
		$this->db->update('categorytb');
	}	
	public function delCategories($arr){
		// foreach(json_decode($arr->arr) as $value){
		// 	$this->db->delete('categorytb', array('categoryId' => $value));  
		// }
		$this->db->delete('categorytb', array('categoryId' => json_decode($arr->arr)));  
	}
	// ++++++++++ SubCategory ++++++++++++++
	public function getSubCategories(){
		$this->db->select('*');
		$this->db->from('categorytb');
		$this->db->join('subcategorytb', 'categorytb.categoryId = subcategorytb.categoryId');
		$query= $this->db->get();
		if($query -> num_rows() > 0){
			foreach($query->result() as $row){
				$data[] = $row;
			}
			return $data;
		}
		return 'false';		
	}
	public function getSubCategory($id){
		$this->db->select('*');
		$this->db->from('categorytb');
		$this->db->join('subcategorytb','categorytb.categoryId = subcategorytb.categoryId');
		$this->db->where('subcategoryId', $id);
		$query= $this->db->get();
		if($query -> num_rows() > 0){
			foreach($query->result() as $row){
				return  $row;
			}
		}
		return 'false';
	}
	// public function getSubCategoryName($name){
	// 	$this->db->select('*');
	// 	$this->db->from('subcategorytb');
	// 	$this->db->where('subcategoryName', $name);
	// 	$query= $this->db->get();
	// 	if($query -> num_rows() > 0){
	// 		foreach($query->result() as $row){
	// 			return  $row->subcategoryId;
	// 		}
	// 	}
	// 	return 'false';
	// }
	public function addSubCategories($arr){
		$this->db->insert('subcategorytb',$arr);
	}	
	public function updateSubCategories($arr, $id){
		$this->db->set($arr);
		$this->db->where('subcategoryId', $id);
		$this->db->update('subcategorytb');
	}	
	public function delSubCategories($arr){
		// foreach(json_decode($arr->arr) as $value){
			$this->db->delete('subcategorytb', array('subcategoryId' => json_decode($arr->arr)));  
		// }
	}
	// ++++++++++ Product ++++++++++++++
	public function getProducts(){
		$this->db->select('*');
		$this->db->from('subcategorytb');
		$this->db->join('producttb', 'producttb.subcategoryId = subcategorytb.subcategoryId');
		$this->db->order_by('productRate','DESC');
		$query= $this->db->get();
		if($query -> num_rows() > 0){
			foreach($query->result() as $row){
				$data[] = $row;
			}
			return $data;
		}
		return 'false';		
	}
	
	public function getProduct($id){
		$this->db->select('*');
		$this->db->from('subcategorytb');
		$this->db->join('producttb', 'producttb.subcategoryId = subcategorytb.subcategoryId');
		$this->db->where('productId', $id);
		$query= $this->db->get();
		if($query -> num_rows() > 0){
			foreach($query->result() as $row){
				return  $row;
			}
		}
		return 'false';
	}
	public function addProduct($arr){
		$this->db->insert('producttb',$arr);
		$num = $this->db->insert_id();
		$obj = $this->getSubCategory($arr['subcategoryId']);
		// $prev = $obj->categoryName.'_'.$obj->subcategoryName;
		$result = str_replace(' ', '', strtolower($obj->categoryName)).'_'.$this->SKU_gen($obj->subcategoryName, 2);
		$result .= '_'.$this->SKU_gen($arr['productMaterial'], 1);
		$result .= '_'. str_pad($num, 4, 0, STR_PAD_LEFT);
		$this->db->set(array('productSKU' => $result));
		$this->db->where('productId', $num);
		$this->db->update('producttb');		
	}	
	function SKU_gen($string, $id = null, $l = 1){
		$results = ''; // empty string
		$vowels = array('a', 'e', 'i', 'o', 'u', 'y'); // vowels
		preg_match_all('/[A-Z][a-z]*/', ucfirst($string), $m); // Match every word that begins with a capital letter, added ucfirst() in case there is no uppercase letter
		foreach($m[0] as $substring){
				$substring = str_replace($vowels, '', strtolower($substring)); // String to lower case and remove all vowels
				$results .= preg_replace('/([a-z]{'.$l.'})(.*)/', '$1', $substring); // Extract the first N letters.
		}
		// $results .= $prev.'_'. str_pad($id, 4, 0, STR_PAD_LEFT); // Add the ID
		return $results;
	}
	public function updateProduct($arr, $id){
		$obj = $this->getSubCategory($arr['subcategoryId']);
		// $prev = $obj->categoryName.'_'.$obj->subcategoryName;
		$result = str_replace(' ', '', strtolower($obj->categoryName)).'_'.$this->SKU_gen($obj->subcategoryName, 2);
		$result .= '_'.$this->SKU_gen($arr['productMaterial'], 1);
		$result .= '_'. str_pad($id, 4, 0, STR_PAD_LEFT);
		$arr['productSKU'] = $result;
		$this->db->set($arr);
		$this->db->where('productId', $id);
		$this->db->update('producttb');
	}	
	public function delProduct($arr){
		// foreach(json_decode($arr->arr) as $value){
			$this->db->delete('producttb', array('productId' => json_decode($arr->arr)));  
		// }
	}
	// ++++++++++ Register ++++++++++++++
	public function getRegisters(){
		// $query = $this->db->query("SELECT * FROM (SELECT registertb.`registerDate` AS registerDate, registertb.`registerId` AS registerId, registertb.`registerCount` AS registerCount, registertb.`registerPrice` AS registerPrice, registertb.`registerVendorId` AS registerVendorId , producttb.`productName`as productName, producttb.`productMainImg` as productMainImg FROM producttb INNER JOIN registertb ON registertb.productId = producttb.`productId`) AS firsttb INNER JOIN usertb ON usertb.userId = firsttb.registerVendorId;");
		$this->db->select('*');
		$this->db->from('customertb');
		$this->db->join('payments', 'payments.user_Id = customertb.customerId');
		$query = $this->db->get();
		if($query -> num_rows() > 0){
			foreach($query->result() as $row){
				$data[] = $row;
			}
			return $data;
		}
		return 'false';
	}
	// ++++++++++ Pending ++++++++++++++
	public function getPendings(){
		$this->db->select('*');
		$this->db->from('usertb');
		$this->db->join('pendingtb', 'pendingtb.pendingVenderId = usertb.userId');
		$this->db->where('pendingStatus','pending');
		$query = $this->db->get();
		if($query -> num_rows() > 0){
			foreach($query->result() as $row){
				$data[] = $row;
			}
			return $data;
		}
		return 'false';
	}
	public function getPending($id){
		$this->db->where('pendingId', $id);
		$query = $this->db->get('pendingtb');
		if($query->num_rows() > 0){
			foreach($query->result() as $row){
				return $row;
			}
		}
		return 'false';
	}
	public function setStatusPending($status, $id){
		$arr = array(); 
		if($status == '1'){
			$this->db->set('pendingStatus', 'accept');
		}else{
			$this->db->set('pendingStatus', 'reject');
		}
		$this->db->where('pendingId', $id);
		$this->db->update('pendingtb');
		$row = $this->getPending($id);
		$arr['subcategoryId'] = $row->subcategoryId;
		$arr['productName'] = $row->pendingName;
		$arr['productCount'] = $row->pendingCount;
		$arr['productNPrice'] = $row->pendingPrice;
		$arr['productPPrice'] = $row->pendingPrice;
		$arr['productContent'] = $row->pendingContent;
		$arr['productVendorId'] = $row->pendingVenderId;
		$arr['productDate'] = $row->pendingVenderId;
		$arr['productMainImg'] = $row->pendingMainImg;
		$arr['productImg'] = $row->pendingImg;
		if($row->pendingGender)
			$arr['productGender'] = $row->pendingGender;
		if($row->pendingSize)
			$arr['productSize'] = $row->pendingSize;
		if($row->pendingColor)
			$arr['productColor'] = $row->pendingColor;
		$this->db->insert('producttb',$arr);
		
	}
	// Search category Shop (normal)
	public function searchProduct($temp_categoryId = NULL, $temp_subcategoryId = NULL){
		if($temp_categoryId == NULL){
			$sql = 'select * from producttb';
		}else if($temp_subcategoryId == NULL){
			$sql = 'select * from producttb inner join subcategorytb on producttb.subcategoryId = subcategorytb.subcategoryId where categoryId="'.$temp_categoryId.'"';
		}else{
			$sql = 'select * from producttb where producttb.subcategoryId = "'.$temp_subcategoryId.'"';
		}
		$query = $this->db->query($sql);
		if($query->num_rows() > 0){
			foreach($query->result() as $row){
				$data[] = $row;
			}
			return $data;
		}
		return 'false';
		
	}
	// +++++++++=     Search category Shop (keyword)   =++++++++++
		public function searchProductKeyword($type, $keyword){
			// $sId = $this->getSubCategoryName($type);
			if($type == 'all'){
				if($keyword != '')
					$sql = 'select * from producttb where productName LIKE "%'.$keyword.'%"';
				else
					$sql = 'select * from producttb';
			}else{
				if($keyword != '')
					$sql = 'select * from producttb where subcategoryId="'.$type.'" and producttb.productName LIKE "%'.$keyword.'%"';
				else
					$sql = 'select * from producttb where subcategoryId="'.$type.'"';
			}
			$data = array();
			$query = $this->db->query($sql);
			if($query->num_rows() > 0){
				foreach($query->result() as $row){
					$data[] = $row;
				}
				return $data;
			}
			return 'false';
			
		}
	// ================= GetImage ===================
	public function getImageList(){
		$this->db->select('*');
		$this->db->from('subcategorytb');
		$this->db->join('producttb', 'producttb.subcategoryId = subcategorytb.subcategoryId');
		$this->db->group_by('categoryId');
		$query= $this->db->get();
		if($query->num_rows() > 0){
			foreach($query->result() as $row){
				$data[] = $row;
			}
			return $data;
		}		
		return 'false';
	}
	// ========================= Customer ===================
	public function addCustomer($arr){
		
		$query = $this->db->get_where('customertb',array('customerEmail' => $arr['customerEmail']));
		if($query->num_rows() > 0){
			return 'false';
		}
		$this->db->insert('customertb',$arr);
		return 'true';
	}
	public function getCustomers(){
		$query= $this->db->get('customertb');
		if($query -> num_rows() > 0){
			foreach($query->result() as $row){
				$data[] = $row;
			}
			return $data;
		}
		return 'false';
	}
	public function getCustomer($id){
		$this->db->where('customerId', $id);
		$query= $this->db->get('customertb');
		if($query -> num_rows() > 0){
			foreach($query->result() as $row){
				return  $row;
			}
		}
		return 'false';
	}
	public function updateCustomer($arr,$id){
		$this->db->set($arr);
		$this->db->where('customerId', $id);
		$this->db->update('customertb');
	}	
	public function delCustomer($arr){
		// foreach(json_decode($arr->arr) as $value){
			$this->db->delete('customertb', array('customerId' => $arr->arr));  
		// }
	}
	public function update($arr){
		$this->db->set($arr);
		$this->db->where('adminId', 'admin');
		$this->db->update('admintb');
	}

}
?>
