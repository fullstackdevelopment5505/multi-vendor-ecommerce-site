<?php
class VendorModel extends CI_Model{

    public function __construct() {
    }
	public function addPending($arr){
		$this->db->insert('pendingtb',$arr);
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


	// +++++++++ Category ++++++++++
	public function getCategories(){
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
		foreach(json_decode($arr->arr) as $value){
			$this->db->delete('categorytb', array('categoryId' => $value));  
		}
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
	public function addSubCategories($arr){
		$this->db->insert('subcategorytb',$arr);
	}	
	public function updateSubCategories($arr, $id){
		$this->db->set($arr);
		$this->db->where('subcategoryId', $id);
		$this->db->update('subcategorytb');
	}	
	public function delSubCategories($arr){
		foreach(json_decode($arr->arr) as $value){
			$this->db->delete('subcategorytb', array('subcategoryId' => $value));  
		}
	}
	// ++++++++++ Product ++++++++++++++
	public function getProducts(){
		$this->db->select('*');
		$this->db->from('subcategorytb');
		$this->db->join('producttb', 'producttb.subcategoryId = subcategorytb.subcategoryId');
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
	public function updateProduct($arr, $id){
		$this->db->set($arr);
		$this->db->where('productId', $id);
		$this->db->update('producttb');
	}	
	public function delProduct($arr){
		foreach(json_decode($arr->arr) as $value){
			$this->db->delete('producttb', array('productId' => $value));  
		}
	}
	// ++++++++++ Register ++++++++++++++
	public function getRegisters(){
		// $query = $this->db->query("SELECT * FROM (SELECT registertb.`registerDate` AS registerDate, registertb.`registerId` AS registerId, registertb.`registerCount` AS registerCount, registertb.`registerPrice` AS registerPrice, registertb.`registerVendorId` AS registerVendorId , producttb.`productName`as productName, producttb.`productMainImg` as productMainImg FROM producttb INNER JOIN registertb ON registertb.productId = producttb.`productId`) AS firsttb INNER JOIN usertb ON usertb.userId = firsttb.registerVendorId where registerVendorId = '1';");
		$query = $this->db->query("SELECT * FROM producttb INNER JOIN registertb ON producttb.productId = registertb.`productId` WHERE registertb.`registerVendorId` = '1'");
		// $this->db->where('registerVendorId', '1');
		// $query = $this->db->get('registertb');
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
		$this->db->from('subcategorytb');
		$this->db->join('pendingtb', 'pendingtb.subcategoryId = subcategorytb.subcategoryId');
		$this->db->where('pendingVenderId', $this->session->userId);
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
	
}
?>
