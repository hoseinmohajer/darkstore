<?php
class ProductimagesController extends AppController{
	public $theme = 'Admin';
	
	public function beforeFilter(){
		parent::beforeFilter();
	}
	public $helpers = array('Html', 'Form', 'Session', 'Admins');

	public function admin_add(){
		if($this->request->is('POST')){
			$product_directory_name = preg_replace('/\s+/', '', $this->request->data['Productimages']['directoryname']);
			$product_directory_name = './files/productsimage/' . $product_directory_name;
			if(!file_exists($product_directory_name))
				mkdir($product_directory_name, 0777, true);
			$this->request->data['Productimages']['productImages_imagesDirectoryAddress'] = $product_directory_name;
			$this->request->data['Productimages']['productImages_name'] = $this->request->data['Productimages']['image']['name'];
			$this->request->data['Productimages']['productImages_isMain'] = $this->request->data['Productimages']['isMain'];
			$tmpName = $this->request->data['Productimages']['image']['tmp_name'];
			move_uploaded_file($tmpName, $product_directory_name . '/' . $this->request->data['Productimages']['image']['name']);
			unset($this->request->data['Productimages']['image']);
			unset($this->request->data['Productimages']['isMain']);
			// $this->loadModel('Productimages');
			// if($this->Productimages->save($this->request->data)){
			// 	$this->Session->setFlash("Done", 'flash_custom', array('class' => 'alert'));
			// 	$this->redirect(array('controller' => 'admins', 'action' => 'index'));
			// }		
		}
	}


}




?>