<?php
class AdminsController extends AppController{
	public $theme = 'Admin';
	
	public function beforeFilter(){
		parent::beforeFilter();
	}

	public $helpers = array('Html', 'Form', 'Session', 'Admins');

	public function admin_index(){
		$this->_updateslideshow();
		$this->_updateproduct();
	}

	public function admin_addgood(){
		$this->loadModel('Good');
	}

	function _updateslideshow() {
		$this->loadModel('Slideshow');
		$slideshowEditFormData = $this->Slideshow->find('all');
		if($slideshowEditFormData){
			$this->set('slideshowEditFormData', $slideshowEditFormData);
		}
	}

	public function goods() {
		$this->layout = 'vitrin';
		$this->loadModel("Good");
		debug($this->Good->find('all'));
	}

	function _updateproduct(){
		$this->loadModel('Good');
		if($this->Good->find('all')) {
			// debug(unserialize($this->Good->find('all')[0]['Good']['images_name']));
			// debug($this->Good->find('all')[0]['Good']['images_name']	);
			$this->set('productsData', $this->Good->find('all'));
		}
	}
}

?>
