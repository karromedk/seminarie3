<?php

namespace seminarie\View;

use Id1354fw\View\AbstractRequestHandler;
use seminarie\Controll\Account;

/**
 * The only purpose of this class is to show the first page of the website
 */
class LoginPage extends AbstractRequestHandler {

	private $uid = null;
	private $pwd = null;

	public function setLogin($value){
		
	}

	public function setUid($uid){
		$this->uid = $uid;
	}

	public function setPwd($pwd){
		$this->pwd = $pwd;
	}

    protected function doExecute() {

    	$this->session->restart();

    	if($this->session->get('uid')!==false){
    		header("Location: FirstPage");
			exit();
    	}

    	if($this->uid !== null && $this->pwd !== null){

    		$account = new Account();
    		$result= $account ->getLogin($this->uid, $this->pwd);
    		if($result!=null){
    			$this->session->set('uid', $result['uid']);

    			header("Location: FirstPage");
    			exit();
    		}else{
    			$this->addVariable('message', 'Wrong username/password');
    		}
    	}
    	return 'logins';
    }
}