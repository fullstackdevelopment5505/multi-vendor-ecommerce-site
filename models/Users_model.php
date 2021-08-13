<?php
class Users_model extends CI_Model {
	private $table;
	
	public function __construct() {
		$this->load->database();
		$this->table = 'usertb';
	}
	
	public function get() {
		return $this->db->get($this->table);
	}
	
	public function getByUsername($username) {
		return $this->db->get_where($this->table, array('userName' => $username), 1)->row();
	}
	
	public function getById($id) {
		return $this->db->get_where($this->table, array('userId' => $id), 1)->row();
	}
	
	public function getCustomerService() {
		return $this->db->get($this->table);
	}
	
	public function getContactList() {
		// return $this->db->where('userId !=', $this->user->id)->get($this->table);
        return $this->db->get($this->table);
    }
	public function getChats(){
		return $this->db
		->select('*')
		->from('chats')
		->join('usertb', 'usertb.userId = chats.chatTo or usertb.userId = chats.chatBy','left')
		->order_by('chats.chatTime', 'desc')
		->group_by('usertb.userId')
		->get();
	}
	public function getChatsAdmin(){
		return $this->db
		->select('*')
		->from('chats')
		->where('chatTo = '.$this->session->userId.' or chatBy = '.$this->session->userID)
		// ->join('usertb', 'usertb.userId = chats.chatTo or usertb.userId = chats.chatBy','left')
		->order_by('chats.chatTime', 'desc')
		->limit(1)
		->get();
	}
	public function count() {
		return $this->db->count_all($this->table);
	}
	
	public function insert($data) {
		return $this->db->insert($this->table, $data);
	}
}
