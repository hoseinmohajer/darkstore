<?php
class UsersController extends AppController{

	public $theme = 'Admin';
	public function beforeFilter(){
		parent::beforeFilter();
	}
	public $helpers = array('Html', 'Form', 'Session');
	public function admin_index(){
	}
	public function admin_login(){
		if($this->request->is('POST')){
			
		}
	}
	public function admin_signup(){
		if($this->request->is('POST')){
			if($this->User->save($this->request->data)){
				$this->redirect(array('action' => 'admin'));
			}
		}	
	}
	public function admin_admin(){

	}
}


?>