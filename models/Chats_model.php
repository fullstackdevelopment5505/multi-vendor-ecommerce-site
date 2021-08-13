<?php
class Chats_model extends CI_Model {
	private $table;
	
	public function __construct() {
		$this->load->database();
		$this->table = 'chats';
	}
	
	public function get() {
		return $this->db->get($this->table);
	}
		
	public function getById($id) {
		return $this->db->get_where($this->table, array('chatId' => $id), 1)->row();
	}
	
	public function getChats($user, $friend) {
		return $this->db
                ->select('*')
                ->from('chats')
                ->join('usertb', 'usertb.userId = chats.chatTo or usertb.userId = chats.chatBy')
                ->where('(chatBy = '. $user .' AND chatTo = '. $friend .')')
                ->or_where('(chatTo = '. $user .' AND chatBy = '. $friend .')')
                ->order_by('chatTime', 'desc')
                ->limit(100)
                ->get()
                ->result();
	}
	public function getChatsVendor($user, $friend) {
		return $this->db
                ->select('*')
                ->from('chats')
                ->where('(chatBy = '. $user .' AND chatTo = '. $friend .')')
                ->or_where('(chatTo = '. $user .' AND chatBy = '. $friend .')')
                ->order_by('chatTime', 'desc')
                ->limit(100)
                ->get()
                ->result();
	}	
	public function count() {
		return $this->db->count_all($this->table);
	}
	
	public function insert($data) {
		return $this->db->insert($this->table, $data);
	}
}
