<?php
class VitrinsController extends AppController{
	public $theme = 'Vitrin';
	// public function beforeFilter(){
	// 	parent::beforeFilter();
	// }

	public $helpers = array('Html', 'Form', 'Session', 'Vitrins');

	public function index(){
		$this->layout = 'vitrin';
		$this->set('title_for_layout', 'Home');
		$this->_slideshow();
		
	}
	function _slideshow(){
		$this->loadModel("Slideshow");
		if($this->Slideshow->find('all')){
			$this->set('slideshowData', $this->Slideshow->find('all'));
		}
	}
	public function good_ditails() {
		$this->layout = 'vitrin';
	}
	public function goods() {
		$this->layout = 'vitrin';
<<<<<<< HEAD
		$this->loadModel("Good");
		debug($this->Good->find('all'));
=======
>>>>>>> ea91ce450503ad2bb9b8af7d3a856067b56c4561
	}
}


?>