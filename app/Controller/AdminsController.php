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

	public function admin_addproduct(){
		$this->loadModel('Product');
	}

	function _updateslideshow() {
		$this->loadModel('Slideshow');
		$slideshowEditFormData = $this->Slideshow->find('all');
		if($slideshowEditFormData){
			$this->set('slideshowEditFormData', $slideshowEditFormData);
		}
	}

	public function products() {
		$this->layout = 'vitrin';
		$this->loadModel("Product");
		debug($this->Product->find('all'));
	}

	function _updateproduct(){
		$this->loadModel('Product');
		if($this->Product->find('all')) {
			// debug(unserialize($this->Product->find('all')[0]['Product']['images_name']));
			// debug($this->Product->find('all')[0]['Product']['images_name']	);
			$this->set('productsData', $this->Product->find('all'));
		}
	}
}

?>
