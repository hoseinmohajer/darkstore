<?php
class ProductsController extends AppController{
	public $theme = 'Admin';
	
	public function beforeFilter(){
		parent::beforeFilter();
	}

	public $helpers = array('Html', 'Form', 'Session', 'Admins');

	public function admin_add(){
		$images_name = array();
		if($this->request->is('POST')){
			if($this->request->data){
				//create directory for GOOD with it name
				$products_directory_name = preg_replace('/\s+/', '', $this->request->data['Product']['name']);
				if(!file_exists('./files/productsimage/' . $products_directory_name)){
					mkdir('./files/goodimages/' . $products_directory_name, 0777, true);
				}
				debug($this->request->data);
			}
		}



		// $images_name = array();
		// if($this->request->is('POST')){
		// 	if($this->request->data){
		// 		//create directory for GOOD with it name
		// 		$good_directory_name = preg_replace('/\s+/', '', $this->request->data['Good']['name']);
		// 		mkdir('./files/goodimages/' . $good_directory_name, 0777, true);
		// 		foreach ($this->request->data['Good'] as $key => $value) {
		// 			switch ($key) {
		// 				case 'images_name1':
		// 					$images_name['image1']['name'] = $value['name'];
		// 					if(isset($value['main']) && $value['main'] === '1')
		// 						$images_name['image1']['main'] = $value['main'];
		// 					move_uploaded_file($value['tmp_name'],'./files/goodimages/' . $good_directory_name . '/' . $value['name']);
		// 					unset($this->request->data['Good'][$key]);
		// 					break;
		// 				case 'images_name2':
		// 					$images_name['image2']['name'] = $value['name'];
		// 					if(isset($value['main']) && $value['main'] === '1')
		// 						$images_name['image2']['main'] = $value['main'];
		// 					move_uploaded_file($value['tmp_name'],'./files/goodimages/' . $good_directory_name . '/' . $value['name']);
		// 					unset($this->request->data['Good'][$key]);
		// 					break;
		// 				case 'images_name3':
		// 					$images_name['image3']['name'] = $value['name'];
		// 					if(isset($value['main']) && $value['main'] === '1')
		// 						$images_name['image3']['main'] = $value['main'];
		// 					move_uploaded_file($value['tmp_name'],'./files/goodimages/' . $good_directory_name . '/' . $value['name']);
		// 					unset($this->request->data['Good'][$key]);
		// 					break;
		// 				case 'images_name4':
		// 					$images_name['image4']['name'] = $value['name'];
		// 					if(isset($value['main']) && $value['main'] === '1')
		// 						$images_name['image4']['main'] = $value['main'];
		// 					move_uploaded_file($value['tmp_name'],'./files/goodimages/' . $good_directory_name . '/' . $value['name']);
		// 					unset($this->request->data['Good'][$key]);
		// 					break;
		// 			}
		// 		}
		// 		$this->request->data['Good']['images_name'] = serialize($images_name);
		// 		if($this->Good->save($this->request->data)){
		// 			$this->Session->setFlash("Done", 'flash_custom', array('class' => 'alert'));
		// 			$this->redirect(array('controller' => 'admins', 'action' => 'index'));
		// 		}
		// 	}
		// }
	}

	public function admin_update($id){
		// $this->Good->id = $id;
		// if($this->request->is('GET')){
		// 	$this->request->data = $this->Good->read();
		// 	$this->request->data['Good']['images_name'] = unserialize($this->request->data['Good']['images_name']);
		// } else{
		// 	if($this->request->data){
		// 		//create directory for GOOD with it name
		// 		$good_directory_name = preg_replace('/\s+/', '', $this->request->data['Good']['name']);
		// 		$good_directory_name = './files/goodimages/' . $good_directory_name;
		// 		foreach ($this->request->data['Good'] as $key => $value):
		// 			switch ($key) {
		// 				case 'images_name1':
		// 				case 'old_image_name1':
		// 					if(file_exists($good_directory_name . '/' . $value))
		// 						unlink($good_directory_name . '/' . $value);
		// 					$images_name['image1']['name'] = $value['name'];
		// 					if(isset($value['main']) && $value['main'] === '1')
		// 						$images_name['image1']['main'] = $value['main'];
		// 					move_uploaded_file($value['tmp_name'], $good_directory_name . '/' . $value['name']);
		// 					unset($this->request->data['Good'][$key]);
		// 					break;
		// 				case 'images_name2':
		// 				case 'old_image_name2':
		// 					if(file_exists($good_directory_name . '/' . $value))
		// 						unlink($good_directory_name . '/' . $value);
		// 					$images_name['image2']['name'] = $value['name'];
		// 					if(isset($value['main']) && $value['main'] === '1')
		// 						$images_name['image2']['main'] = $value['main'];
		// 					move_uploaded_file($value['tmp_name'], $good_directory_name . '/' . $value['name']);
		// 					unset($this->request->data['Good'][$key]);
		// 					break;
		// 				case 'images_name3':
		// 				case 'old_image_name3':
		// 					if(file_exists($good_directory_name . '/' . $value))
		// 						unlink($good_directory_name . '/' . $value);
		// 					$images_name['image3']['name'] = $value['name'];
		// 					if(isset($value['main']) && $value['main'] === '1')
		// 						$images_name['image3']['main'] = $value['main'];
		// 					move_uploaded_file($value['tmp_name'], $good_directory_name . '/' . $value['name']);
		// 					unset($this->request->data['Good'][$key]);
		// 					break;
		// 				case 'images_name4':
		// 				case 'old_image_name4':
		// 					if(file_exists($good_directory_name . '/' . $value))
		// 						unlink($good_directory_name . '/' . $value);
		// 					$images_name['image4']['name'] = $value['name'];
		// 					if(isset($value['main']) && $value['main'] === '1')
		// 						$images_name['image4']['main'] = $value['main'];
		// 					move_uploaded_file($value['tmp_name'], $good_directory_name . '/' . $value['name']);
		// 					unset($this->request->data['Good'][$key]);
		// 					break;
		// 			}
		// 		endforeach;
		// 		$this->request->data['Good']['images_name'] = serialize($images_name);
		// 		die("STOP DONT SAVE IT");
		// 		if($this->Good->save($this->request->data)){
		// 			$this->Session->setFlash("Done", 'flash_custom', array('class' => 'alert'));
		// 			$this->redirect(array('controller' => 'admins', 'action' => 'index'));
		// 		}
		// 	}
		// }
	}

	public function admin_delete(){

	}
}

?>
