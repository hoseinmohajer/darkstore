<?php
class AdminsController extends AppController{
	public $theme = 'Admin';
	public function beforeFilter(){
		parent::beforeFilter();
		$this->Auth->allow('admin_index');
	}
	public $helpers = array('Html', 'Form', 'Session');
	public function admin_index(){
	}
}

?>
