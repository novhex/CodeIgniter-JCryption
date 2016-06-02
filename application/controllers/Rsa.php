<?php
require_once APPPATH.'third_party/jcryption/sqAES.php';
require_once APPPATH.'third_party/jcryption/JCryption.php';

defined('BASEPATH') or exit('Error!');

class Rsa extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->library(array('form_validation'));

	}
	public function index(){
	
	    $this->form_validation->set_rules('firstname','Firstname','trim|required');
		
		$this->form_validation->set_rules('pw','Password','trim|required');

		if($this->form_validation->run()==FALSE){
			$this->load->view('rsa2');
		}else{

		}
	}

	public function test2_res(){

	//store encrypted data to a variable
	$postBefore = print_r($_POST, true);

	//decrypt post data
	JCryption::decrypt();

	//show log
	header('Content-type: text/plain');
	echo "ENCRYPTED POST DATA \n======================\n";
	print_r($postBefore);
	echo "DECRYPTED POST DATA\n======================\n";
	print_r($_POST);

			 

	}

	public function jcryption(){

		if($this->input->is_ajax_request()){
		
			$jc_obj = new JCryption(APPPATH.'third_party/jcryption/keys/rsa_1024_pub.pem', APPPATH.'third_party/jcryption/keys/rsa_1024_priv.pem');
			$jc_obj->go();

		}else{
			echo 'Direct access not allowed.';
		}
	}
}