<?php
class AdminsController extends AppController{
	public $theme = 'Admin';
	public function beforeFilter(){
		parent::beforeFilter();
	}
	public $helpers = array('Html', 'Form', 'Session');
	public function admin_index(){
		$this->theme = 'Admin';
		if($this->request->is('POST')){
			debug($this->request->data['username']);
			// $this->request->data['Master']['birthdate'] = jmktime(0,0,0,$this->request->data['birthdate_month'],$this->request->data['birthdate_day'],$this->request->data['birthdate_year']);
			// if($this->Master->save($this->request->data)){
			// 	$this->Session->setFlash('مشخصات شما با موفقیت ثبت شد', 'default', array('class' => 'messagebox'));
			// 	$this->redirect(array('action' => 'index'));
			// }	
		}
	}
}

?>
