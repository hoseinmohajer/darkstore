<?php
class PurchasesController extends AppController{
	public $theme = 'Vitrin';

	public $helpers = array('Html', 'Form', 'Session', 'Vitrins');

	public function index() {
		$this->layout = 'vitrin';
	}
	public function goods() {
		$this->layout = 'vitrin';
	}
}


?>