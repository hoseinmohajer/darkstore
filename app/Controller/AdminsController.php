<?php
class AdminsController extends AppController{
	public $theme = 'Admin';
	public function beforeFilter(){
		parent::beforeFilter();
		// $this->Auth->allow('admin_index');
	}
	public $helpers = array('Html', 'Form', 'Session', 'Admins');
	public function admin_index(){
		$this->_editslideshow();
	}
	function _editslideshow() {
		$this->loadModel('Slideshow');
		$slideshowEditFormData = $this->Slideshow->find('all');
		if($slideshowEditFormData){
			$this->set('slideshowEditFormData', $slideshowEditFormData);
		}
	}
	function _add_goods(){

	}
}

?>
