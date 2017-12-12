<?php

namespace seminarie\View;

use Id1354fw\View\AbstractRequestHandler;
//use seminarie\Controll\createaccount;
//use seminarie\Controll\comments.inc;
use seminarie\Controll\Comment;



//Every 30 days should be anough as the first page is not often changed
// header("Cache-Control: max-age=2592000"); //30days (60sec * 60min * 24hours * 30days)

/**
 * The only purpose of this class is to show the first page of the website
 */
class PanncakesPage extends AbstractRequestHandler {


	private $message= null;
	private $recipe = null;
	private $delete= null;
	public function setDelete($delete){
		$this->delete=$delete;
	}

	public function setMessage($message){
		$this->message=$message;
	}
	public function setRecipe($recipe){
		$this->recipe=$recipe;
	}
	public function setComment($comment){
	}


	protected function doExecute() {
		$this->session->restart();

		$comments = new \seminarie\Controll\Comment();

		if ($this->message!==null && $this->recipe==='panncakes'){
			$comments->saveComment($this->session->get('uid'), date('Y-m-d H:i:s'), $this->message, $this->recipe);
		}

		if($this->delete!==null && preg_match('/^[0-9]{1,10}$/', $this->delete)){
			$comments->deleteComment($this->session->get('uid'), $this->delete);
		}

		$list_of_comments = $comments->getComments('panncakes');

		//Setting the title name for the page
		$this->addVariable('title', 'TastyRecipes - Panncakes');
		$this->addVariable('comments', $list_of_comments);

		return 'panncakes';
	}
}