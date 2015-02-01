<?php
class VitrinsController extends AppController{
	public $theme = 'Vitrin';
	
	public function beforeFilter(){
		parent::beforeFilter();
	}

	public $helpers = array('Html', 'Form', 'Session', 'Vitrins');
	
	public function index(){

		$uid=$this->Session->read('shopping_cart_itemes');
            debug($uid);

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

	public function shopping_cart() {
		$this->layout = NULL;
		$this->autoRender = false;
		$this->loadModel('Product');
		$shoppingCartItemes = array();
		if($this->request->is('post')){
			$ids = $this->request->data;
			$this->Session->write('shopping_cart_itemes', array($ids));
			foreach ($ids as $key => $value) {
				foreach ($value as $k => $id) {
					$data = $this->Product->find('all', array("fields" => "product_cost, product_name, product_description", "conditions" => array("Product.id" => $id)));
					foreach ($data as $kee => $valuee) {
						foreach ($valuee as $kkee => $vvalue) {
							foreach ($vvalue as $k1 => $v1) {
								$shoppingCartItemes[$id]["id"] = $id;
								if($k1 === "product_description")
									$shoppingCartItemes[$id]["productDescription"] = $v1;
								if($k1 === "product_cost")
									$shoppingCartItemes[$id]["productCost"] = $v1;
								if($k1 === "product_name")
									$shoppingCartItemes[$id]["productName"] = $v1;
								if(isset($v1["productimages_isMain"]) && $v1["productimages_isMain"] === "1"){
									$shoppingCartItemes[$id]["imgAddress"] = $v1["productimages_imagesDirectoryAddress"] . "/" . $v1["productimages_name"];
								}
							}
						}
					}
				}
			}
			return json_encode($shoppingCartItemes);
		}
	}

	private function shopping_cart_session_set() {
		$ids = $this->request->data;
		debug($ids);
	}

	private function shopping_cart_session_get() {
		$ids = $this->request->data;
		debug($ids);
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