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
		//^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^\\
		//			this method query do not work correctly					\\
		//^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^\\

		$this->layout = NULL;
		$this->autoRender = false;
		$this->Product->id = $id;
		$productFormDataArray = array();
		if($this->request->is('GET') && $this->request->data){
			$productFormDataArray['Product']['product_name'] = $this->request->data['name'];
			$productFormDataArray['Product']['product_cost'] = $this->request->data['cost'];
			$productFormDataArray['Product']['product_category'] = $this->request->data['category'];
			$productFormDataArray['Product']['product_description'] = $this->request->data['description'];
			$productFormDataArray['Product']['product_published'] = $this->request->data['published'];	
			$query = "update products set 'product_name' = " . $this->request->data['name'] . ", 'product_cost' = " . $this->request->data['cost'] . " ., 'product_category' = " . $this->request->data['category'] . ", 'product_description' = " . $this->request->data['description'] . ", 'product_published' = " . $this->request->data['published'] . " where 'id' = " . $id;
			if($this->query($query)){
				return "$query";
			}else{
				return "hello";
			}
			// if($this->Product->save($productFormDataArray)){
			// 	$this->layout = NULL;
			// 	$this->autoRender = false;
			// 	return true;
			// } else {
			// 	return false;
			// }
		}		
	}

	public function admin_edit ($id = null) {
		App::import('Controller', 'Productimages');
		$Productimages = new ProductimagesController;
		$Productimages->constructClasses();

		$this->Product->id = $id;
		if ($this->request->is('get')) {
			$this->request->data = $this->Product->read();
			$Productimages->admin_getimage($id);
		} else {
			if ($this->Product->save($this->request->data)) {
				$this->Session->setFlash('Your post has been updated.');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Unable to update your post.');
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
