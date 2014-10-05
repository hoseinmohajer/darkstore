<?php
class UsersController extends AppController{

	public $theme = 'Admin';
	public function beforeFilter(){
		parent::beforeFilter();
		$this->Auth->allow('admin_admin');
	}
	public $helpers = array('Html', 'Form', 'Session');
	public $components = array('Auth');
	public function admin_index(){
		$this->layout = 'admin';
	}
	public function admin_login(){
		$this->set('title_for_layout', 'Login');
		if ($this->request->is('post')) {
			if ($this->Auth->login()) {
				return $this->redirect($this->Auth->redirect());
			}
			$this->Session->setFlash(__('Invalid username or password, try again'));
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
	public function admin_logout(){
		return $this->redirect($this->Auth->logout());
	}
}


?>