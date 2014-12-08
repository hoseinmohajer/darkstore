<?php
class ProductimagesController extends AppController{
	public $theme = 'Admin';
	
	public function beforeFilter(){
		parent::beforeFilter();
	}
	public $helpers = array('Html', 'Form', 'Session', 'Admins');

	public function admin_add(){
			$request_body = file_get_contents('php://input');
			debug($request_body);
		
			die("jasdlfjalsd");

		if($this->request->is('POST')){
			$product_directory_name = preg_replace('/\s+/', '', $this->request->data['Productimage']['directoryname']);
			$product_directory_address = './files/productsimage/' . $product_directory_name;
			if(!file_exists($product_directory_address))
				mkdir($product_directory_address, 0777, true);
			$this->request->data['Productimage']['productimages_imagesDirectoryAddress'] = $product_directory_address;
			$this->request->data['Productimage']['productimages_directoryName'] = $product_directory_name;
			$this->request->data['Productimage']['productimages_name'] = $this->request->data['Productimage']['image']['name'];
			$this->request->data['Productimage']['productimages_isMain'] = $this->request->data['Productimage']['isMain'];
			$tmpName = $this->request->data['Productimage']['image']['tmp_name'];
			move_uploaded_file($tmpName, $product_directory_address . '/' . $this->request->data['Productimage']['image']['name']);
			unset($this->request->data['Productimage']['image']);
			unset($this->request->data['Productimage']['isMain']);
			$this->loadModel('Productimage');
			if($this->Productimage->save($this->request->data)){
				// $this->Session->setFlash("Done", 'flash_custom', array('class' => 'alert'));
				$this->redirect(array('controller' => 'productimages', 'action' => 'admin_getimage', 'id' => $product_directory_name));
			}
		}
	}

	public function admin_getimage($id){

		$this->loadModel('Productimage');
		// $imagename = $this->Productimage->find('all', array('conditions' => array("Productimage.productimages_directoryName" => 'directoryname')));
		$data = array('name'=>'hosein', 'family'=>'mohajer', 'age'=>25);
		echo '<script>window.parent.danial(\''.json_encode($data).'\'); </script>';
	}


}




?>