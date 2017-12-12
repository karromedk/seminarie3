<?php

namespace seminarie\View;

use Id1354fw\View\AbstractRequestHandler;
use seminarie\Controll\Account;


//Every 30 days should be anough as the first page is not often changed
// header("Cache-Control: max-age=2592000"); //30days (60sec * 60min * 24hours * 30days)

/**
 * The only purpose of this class is to show the first page of the website
 */
class CreatePage extends AbstractRequestHandler {

	private $uid = null;
	private $pwd = null;

	public function setSignup($value){
		
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

    	if($this->uid!==null && $this->pwd!==null){

    		// anropa createAccount
    		$account = new Account();
    		$result= $account ->createAccount($this->uid, $this->pwd);

    		// om svaret från den är en sträng (is_string(....)), skriv ut strängen vid registreringsformuläret

    		if(is_string($result)){
    			
    			$this->addVariable('message', $result);

    		}
    		// om svaret är true ($result === true), då har kontot skapats, och vi vill gå till inloggningsformuläret
    		/* if($result===true){
    			header("Location: LoginPage");
    			exit();
    		} */
    		elseif($result===true){
    			$this->addVariable('message', 'Your account has been created.');
    			return 'logins';
    		}
    	
    	}

        return 'createacc';
    }
}