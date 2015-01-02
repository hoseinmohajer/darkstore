<?php
class VitrinsController extends AppController{
	public $theme = 'Vitrin';
	
	public function beforeFilter(){
		parent::beforeFilter();
	}

	public $helpers = array('Html', 'Form', 'Session', 'Vitrins');
	
	public function index(){
		$this->layout = 'vitrin';
		$this->set('title_for_layout', 'Home');
		$this->_slideshow();
		$this->_getproduct();
	}
	private function _slideshow(){
		$this->loadModel("Slideshow");
		if($this->Slideshow->find('all')){
			$this->set('slideshowData', $this->Slideshow->find('all'));
		}
	}
	public function product_details($id) {
		$this->layout = 'vitrin';
		$this->loadModel('Product');
		if($this->request->is('GET')){
			$this->set('productDetailPageData', $this->Product->find('all', array('conditions' => array("Product.id" => $id))));
			$this->_recommendedproduct();
		}
	}
	public function products() {
		$this->index();
	}

	private function _getproduct() {
		$this->loadModel("Product");
		$this->set('productData', $this->Product->find('all'));
	}

	private function _recommendedproduct() {
		$this->loadModel("Product");
		$this->set('recommendedProductData', $this->Product->find('all', array('offset' => 1, 'limit' => 4)));
	}
}


?>