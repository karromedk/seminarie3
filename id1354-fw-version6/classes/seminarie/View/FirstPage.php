<?php

namespace seminarie\View;

use Id1354fw\View\AbstractRequestHandler;

//Every 30 days should be anough as the first page is not often changed
// header("Cache-Control: max-age=2592000"); //30days (60sec * 60min * 24hours * 30days)

/**
 * The only purpose of this class is to show the first page of the website
 */
class FirstPage extends AbstractRequestHandler {

    protected function doExecute() {
    	$this->session->restart();




        return 'tasty';
    }
}
