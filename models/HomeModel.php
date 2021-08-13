<?php
class HomeModel extends CI_Model{

    public function __construct() {
        $this->transTable = 'payments';
    }
    // for paypal 
    public function insertTransaction($data){
        $insert = $this->db->insert($this->transTable,$data);
        return $insert?true:false;
    }
}
?>
