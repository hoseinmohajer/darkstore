<?php
class ProductsController extends AppController{
	public $theme = 'Admin';
	public function beforeFilter(){
		parent::beforeFilter();
	}

	public $helpers = array('Html', 'Form', 'Session', 'Admins');

	public function admin_add(){
		$productFormDataArray = array();
		if($this->request->is('POST') && $this->request->data){
			$productFormDataArray['Product']['product_name'] = $this->request->data['name'];
			$productFormDataArray['Product']['product_cost'] = $this->request->data['cost'];
			$productFormDataArray['Product']['product_category'] = $this->request->data['category'];
			$productFormDataArray['Product']['product_description'] = $this->request->data['description'];
			$productFormDataArray['Product']['product_published'] = $this->request->data['published'];
			if($this->Product->save($productFormDataArray)){
				$this->layout = NULL;
				$this->autoRender = false;
				return $this->Product->getLastInsertId();
			} else{
				return false;
			}
		}
	}

	public function admin_update($id){
		$this->layout = NULL;
		$this->autoRender = false;
		$this->Product->id = $id;
		$productFormDataArray = array();
		if($this->request->is('POST') && $this->request->data){
			$productFormDataArray['Product']['product_name'] = $this->request->data['name'];
			$productFormDataArray['Product']['product_cost'] = $this->request->data['cost'];
			$productFormDataArray['Product']['product_category'] = $this->request->data['category'];
			$productFormDataArray['Product']['product_description'] = $this->request->data['description'];
			$productFormDataArray['Product']['product_published'] = $this->request->data['published'];	
			$query = "update products set `product_name` = '" . $this->request->data['name'] . "', `product_cost` = '" . $this->request->data['cost'] . "' , `product_category` = '" . $this->request->data['category'] . "', `product_description` = '" . $this->request->data['description'] . "', `product_published` = '" . $this->request->data['published'] . "' where `id` = " . $id;
			if($this->Product->query($query)){
				return true;
			}else{
				return false;
			}
		}		
	}

	public function admin_edit ($id = null) {
		$this->layout = NULL;
		$this->autoRender = false;
		$this->Product->id = $id;
		if ($this->request->is('get')) {
			$this->loadModel('Productimage');
			$imageinfo = $this->Productimage->find('all', array('conditions' => array("Productimage.productimages_productId" => $id)));
			$this->Product->recursive = -1;
			$_return['editData'] = json_encode($this->Product->read());
			$_return['imageInfo'] = json_encode($imageinfo);
			return json_encode($_return);
		} else {
			if ($this->Product->save($this->request->data)) {
				return true;
			} else {
				return false;
			}
		}
	}

	public function admin_delete($id){
		$this->loadModel('Productimage');
		if($this->request->is('GET') && isset($id)) {
			if($this->Product->delete($id)){
				if($this->Productimage->deleteAll(array('productimages_productId' => $id), $cascade = true, $callbacks = false)){
					$this->Session->setFlash("Product '". $id ."' Deleted.", 'flash_custom', array('class' => 'alert'));
					$this->redirect(array('controller' => 'admins', 'action' => 'index'));
				}
			}
		}
	}
}

?>
