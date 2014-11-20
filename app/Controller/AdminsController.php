<?php
class AdminsController extends AppController{
	public $theme = 'Admin';
	
	public function beforeFilter(){
		parent::beforeFilter();
	}

	public $helpers = array('Html', 'Form', 'Session', 'Admins');

	public function admin_index(){
		$this->_editslideshow();
	}

	public function admin_addgood(){
		$this->loadModel('Good');
		
	}
	function _editslideshow() {
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
}

?>
