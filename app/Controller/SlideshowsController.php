<?php
class SlideshowsController extends AppController{
	public $theme = 'Admin';
	public function beforeFilter(){
		parent::beforeFilter();
		// $this->Auth->allow('admin_index');
	}
	public $helpers = array('Html', 'Form', 'Session', 'Admins');
	public function admin_mainslideshow() {
		
	}
}

?>
