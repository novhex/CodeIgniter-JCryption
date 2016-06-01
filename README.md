# CodeIgniter-JCryption
Simple implementation of JCryption plugin for JQuery (Encrypting form data values)

Instruction

1. Generate your own private and public key here: http://travistidwell.com/jsencrypt/demo/index.html
2. Goto applications/third_party/jcryption/keys/
3. modify  the contents of the 2 pem files with the one you have generated 
4. Open the jquery.jcryption.3.1.0.js and set the getKeyControllerURL with the correct CI project url and default controller eg(http://localhost/rsa/rsa/) where the second rsa is the default controller
5. Controller PART:

in the top of your controller file paste this following code

<?php
require_once APPPATH.'third_party/jcryption/sqAES.php';
require_once APPPATH.'third_party/jcryption/JCryption.php';

and also paste this method in your controller

	public function jcryption(){

		if($this->input->is_ajax_request()){
		
			$jc_obj = new JCryption(APPPATH.'third_party/jcryption/keys/rsa_1024_pub.pem', APPPATH.'third_party/jcryption/keys/rsa_1024_priv.pem');
			$jc_obj->go();

		}else{
			echo 'Direct access not allowed.';
		}
	}
