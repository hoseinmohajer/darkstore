<?php
class ProductimagesController extends AppController{
	public $theme = 'Admin';
	
	public function beforeFilter(){
		parent::beforeFilter();
	}
	public $helpers = array('Html', 'Form', 'Session', 'Admins');

	public function admin_add(){
		if($this->request->is('POST')){
			$product_directory_name = preg_replace('/\s+/', '', $this->request->data['Productimage']['directoryname']);
			$product_directory_address = './files/productsimage/' . $product_directory_name;
			if(!file_exists($product_directory_address))
				mkdir($product_directory_address, 0777, true);
			$this->request->data['Productimage']['productimages_imagesDirectoryAddress'] = '.' . $product_directory_address;
			$this->request->data['Productimage']['productimages_directoryName'] = $product_directory_name;
			$this->request->data['Productimage']['productimages_name'] = $this->request->data['Productimage']['image']['name'];
			$this->request->data['Productimage']['productimages_isMain'] = $this->request->data['Productimage']['isMain'];
			$this->request->data['Productimage']['productimages_productId'] = $this->request->data['Productimage']['productid'];
			$tmpName = $this->request->data['Productimage']['image']['tmp_name'];
			move_uploaded_file($tmpName, $product_directory_address . '/' . $this->request->data['Productimage']['image']['name']);
			unset($this->request->data['Productimage']['image']);
			unset($this->request->data['Productimage']['isMain']);
			$this->loadModel('Productimage');
			if($this->Productimage->save($this->request->data)){
				// $this->Session->setFlash("Done", 'flash_custom', array('class' => 'alert'));
				$this->redirect(array('controller' => 'productimages', 'action' => 'admin_getimage', $this->request->data['Productimage']['productid']));
			}
		}
	}

	public function admin_getimage($id){
		$this->loadModel('Productimage');
		$imageinfo = $this->Productimage->find('all', array('conditions' => array("Productimage.productimages_productId" => $id)));
		echo '<script>window.parent.showImages(\''.json_encode($imageinfo).'\'); </script>';
	}

	public function admin_deleteimage($id) {
		$this->layout = NULL;
		$this->autoRender = false;
		if($this->Productimage->delete($id)){
			return true;
		} else{
			return false;
		}
	}


}




?>