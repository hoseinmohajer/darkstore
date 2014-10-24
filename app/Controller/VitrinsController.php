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
}


?>