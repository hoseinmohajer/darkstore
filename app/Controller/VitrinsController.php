<?php
class VitrinsController extends AppController{
	public $theme = 'Vitrin';
	// public function beforeFilter(){
	// 	parent::beforeFilter();
	// }

	public $helpers = array('Html', 'Form', 'Session', 'Vitrins');

	public function index(){
		$this->layout = 'vitrin';
		$this->set('title_for_layout', 'Welcom');
		
	}
}


?>