<?php
class Chat extends CI_Controller {
    public $user;

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('Users_model');
		$this->load->model('Chats_model');
        $this->load->helper(array('url', 'form'));
        $this->load->library('user_agent');
		$this->load->library('CryptoChat');

		// If this controller accessed before login, redirect it back.
        // if (!isset($this->session->userdata['logged_in']) || $this->session->userdata['logged_in'] === false) {
        //     redirect('welcome');
        // }

        // Save current user data
		// $this->user = $this->Users_model->getById($this->session->userdata['id']);
    }

    public function index() {
		// If user is customer service, get all another user. Otherwise, just get customer service
		// if ($this->user->customer_service == 1) {
			// $contact = $this->Users_model->getContactList();
            $contact = $this->Users_model->getChats();
            // } else {
			// $contact = $this->Users_model->getCustomerService();
        // }
            $this->load->view('Admin/chat', array(
            'contact' => $contact
            ));
    }
    public function vendor(){
        $contact = $this->Users_model->getChatsAdmin();
        $this->load->view('Vendor/chat', array(
            'contact' => $contact,
            'sName' => $this->session->userName,
            'sImg' => $this->session->userImg,
            'sId' => $this->session->userId
            ));

    }
    public function getChats() {
        header('Content-Type: application/json');
        if ($this->input->is_ajax_request()) {
            // Find friend
            
			$friend = $this->Users_model->getById($this->input->post('chatWith'));
            // echo json_encode($friend);
            // Get Chats
            if($this->session->has_userdata('admin'))
    			$chats = $this->Chats_model->getChats(-1, $friend->userId);
            else
                 $chats = $this->Chats_model->getChats($this->session->userId, -1);

                // $chats = $this->Chats_model->getChatsVendor($this->session->userId, -1);
            // Decode all messages first
			/*foreach($chats as &$chat) { // Compatibility issue persist
				if ($chat->send_to == $this->user->id) {
					$chat->messages = $this->cryptochat->decrypt($chat->messages, $this->user->priv);
				} else {
					$chat->messages = $this->cryptochat->decrypt($chat->messages, $friend->priv);
				}
			}*/
            // Compatibly decode all messages
            $priv = `-----BEGIN ENCRYPTED PRIVATE KEY-----
            MIIFHDBOBgkqhkiG9w0BBQ0wQTApBgkqhkiG9w0BBQwwHAQIvmeSjr0DwWkCAggA
            MAwGCCqGSIb3DQIJBQAwFAYIKoZIhvcNAwcECNgp8fIjv96YBIIEyPB91L8rQ8SF
            ZG9XaI0mnnPTkC6znWjxpWr+ewfQz44QfjsSVna0UqtOBWO8ydUz27yQph/cIK14
            QHUHY1MYtlSC3m8Rs9UOyZKnVB4LPgRMVjx/38nxtGu1gdihN75QbRmo4o+5SkLf
            HfaJiwFcTKXwu8i5TFcAbsHxqHDm5cyfe1vLKFB4H5gNZQds6CYPwDgK2MpTy8uP
            CMECRGxrIEr9aQK8+w6mTHKFe36spoA0xkJy/h8kZhM/qG1kPPzf/ukkYpYATGYX
            mjnCxmBMCFchNJBlVwUWYV8KrXS7/PGRx0BYRRHbZfqjCQSvQH/o6g9ri20pDDdY
            6lQJ4NMpMJDcUkd13pB0uppT2KJdl9NNqXT0C2bFSa5NXV81rzSyt7QdUQBjWp/y
            ioEtBLVomqHzE8CzsfehhJzJdJL80RpoEpRlOJM7JgROAyxSriKV7fIMkRpfBN0U
            SQCBToFPZIr9nllZSfZxJJAr5roKFNnx5btdqmIUUcM46BwnjG+Vb8Yn+XEv4Md0
            35ukSgcV7tE/lGuwoyDhBiLpt+lmtMquhGvBBM/8ER1xUGhMMG6DauoL6/aZFHyp
            efr/4R7ZM91R9GKARinjHBGJmZxFqKKe+2FbhSpFpCVwBaiEuY9zVXN0HL/+0JRd
            dHVZe2Q0GOjt3VFcdjoAl58ve/n10pB+5X2FA1DlLWTz90WEOXFDhRPd/3TMK3F0
            +Aux0OvHKMswr8hqwShiNmLEJgTeZSjpDAt59jQlv7ltazRb/nHXPz/fW1+olAuK
            2QhSDFWhWu/QIM3X3D1nnrsqH8Khms8Bda4ilYiIrrupZsNl2AgSKlqanRYcAldh
            bQcYjDwSX+02e/W9R5Tm/rIUU4R3zHV9FeUHZzrbaENZypWQn+0xGHGjwbqnoCWC
            0kJTuGxYtJ0AzBCv6IPpdZ7iVWzqxVlF/T49u9oY1fzq8hBLtIF9lVZcoISXDOJ/
            yOMT8NpAcPXSROpXdNA9z8Tms/4377rHcXvl7TGvSY1gg+IFZjWACOCYL8Gi3aWK
            fZNGgnq5Cii7V9szR5G5sf9Vi8cVRNCehlgCUsATRRDwJvxt7Flzb6E8452ZnwKV
            laAQSmFX135II9+B/l5IcfhUnq83HoP3JDKLwUNM0sWJ5Eje8nhg/2lZhM9k0Nv0
            BjRMnqV6Eh3KjmEbhNqOuha/LkZqkTVpqCuVGEAyvb4yW1OTn+IYlbviPMr01hiu
            woFt0RPA6u9MgjYGi+4gRro6W+XbchMRuHT+LAskXHCmvPOPhxLx6hzC40+bNxMS
            8TY8y9GPDAVierNe43ntl1cEqAD4/Mam2hDEfXD77w/YCQt+fwbmWcxTzewDPNGZ
            /BHvV+HfAlD2BuvJl61L7/h6UZDXh9OyTUEduYwpbbp8V0JJZlDOKHTVB5TWWZhn
            Iwqu4E2UfbyFx4hB3AKKdDACekq9cdwyyyBbTFpftb/V25F0uRty/NyR33QYOxSb
            zcrawshrqNREHzaduFoZK/P/Gf0dZc86MBjWT99X6Dz6I62vrM1RW/atuFBUOCng
            f+hUcFKgcfcLKaYZUms5rY9rRbZ02zr9ycFIyYBpW2Q0/VQ1P8WgtoXwinx2Xk9G
            rM8XMtUZ39a+VCFseG2hzA==
            -----END ENCRYPTED PRIVATE KEY-----
            `;
			// $keys = array_keys($chats); // Deals with both numeric and associative keys
			// foreach($keys as $k) {
			// 	if ($chats[$k]->chatTo == -1) {
			// 		$chats[$k]->chatMessages = $this->cryptochat->decrypt($chats[$k]->chatMessages,$priv);
			// 	} else {
			// 		$chats[$k]->chatMessages = $this->cryptochat->decrypt($chats[$k]->chatMessages, $friend->priv);
			// 	}
			// }
            $result = array(
                'name' => $this->session->userName,
                'chats' => $chats
            );
            echo json_encode($result);
        }
    }

    public function sendMessage() {
		// Get send_to (receiver) public key
		$pub = $this->Users_model->getById($this->input->post('chatWith'))->pub;
		// Encrypt the messages
		// $ciphertext = $this->cryptochat->encrypt(htmlentities($this->input->post('messages', true)), $pub);
        // Add to db
        if($this->session->has_userdata('admin')){
            $to = $this->input->post('chatWith');
            $by = -1;
        }else{
            $to = -1;
            $by = $this->session->userId;
        }
         $this->Chats_model->insert(array(
             'chatMessages' => $this->input->post('messages', true),
             'chatTo' => $to,
             'chatBy' => $by));
    }
}
