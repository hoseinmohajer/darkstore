<?php
class UsersController extends AppController{
	public $theme = 'Admin';

	public function beforeFilter(){
		parent::beforeFilter();
		$this->Auth->allow('admin_signup');
	}

	public $helpers = array('Html', 'Form', 'Session');
	
	public function admin_index(){
		$this->layout = 'admin';
		$this->redirect(array("controller" => "admins", "action" => "index"));
	}

	public function admin_login(){
		$this->set('title_for_layout', 'Login');

		if ($this->request->is('POST')) {
			if ($this->Auth->login()) {
				$this->redirect($this->Auth->redirect());
			} else {
				$this->Session->setFlash(__('Invalid username or password, try again'));
			}
		}
	}

	public function admin_logout(){
		$this->redirect($this->Auth->logout());
	}

	public function admin_signup(){
		if($this->request->is('POST')){
			if($this->User->save($this->request->data)){
				$this->redirect(array('action' => 'admin'));
			}
		}	
	}

	public function admin_admin(){
		$this->redirect(array("controller" => "admins", "action" => "admin_index"));
	}
}


?>