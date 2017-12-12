<?php

namespace seminarie\View;

use Id1354fw\View\AbstractRequestHandler;

class LogoutPage extends AbstractRequestHandler {

    protected function doExecute() {
    	$this->session->restart();

    	$this->session->invalidate();

 
    		header("Location: FirstPage");
			exit();

    }
}