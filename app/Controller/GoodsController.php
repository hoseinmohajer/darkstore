<?php
class GoodsController extends AppController{
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
				$good_directory_name = preg_replace('/\s+/', '', $this->request->data['Good']['name']);
				mkdir('./files/goodimages/' . $good_directory_name, 0777, true);
				foreach ($this->request->data['Good'] as $key => $value) {
					switch ($key) {
						case 'images_name1':
							$images_name['image1']['name'] = $value['name'];
							if(isset($value['main']) && $value['main'] === '1')
								$images_name['image1']['main'] = $value['main'];
							move_uploaded_file($value['tmp_name'],'./files/goodimages/' . $good_directory_name . '/' . $value['name']);
							unset($this->request->data['Good'][$key]);
							break;
						case 'images_name2':
							$images_name['image2']['name'] = $value['name'];
							if(isset($value['main']) && $value['main'] === '1')
								$images_name['image2']['main'] = $value['main'];
							move_uploaded_file($value['tmp_name'],'./files/goodimages/' . $good_directory_name . '/' . $value['name']);
							unset($this->request->data['Good'][$key]);
							break;
						case 'images_name3':
							$images_name['image3']['name'] = $value['name'];
							if(isset($value['main']) && $value['main'] === '1')
								$images_name['image3']['main'] = $value['main'];
							move_uploaded_file($value['tmp_name'],'./files/goodimages/' . $good_directory_name . '/' . $value['name']);
							unset($this->request->data['Good'][$key]);
							break;
						case 'images_name4':
							$images_name['image4']['name'] = $value['name'];
							if(isset($value['main']) && $value['main'] === '1')
								$images_name['image4']['main'] = $value['main'];
							move_uploaded_file($value['tmp_name'],'./files/goodimages/' . $good_directory_name . '/' . $value['name']);
							unset($this->request->data['Good'][$key]);
							break;
					}
				}
				$this->request->data['Good']['images_name'] = serialize($images_name);
				if($this->Good->save($this->request->data)){
					$this->Session->setFlash("Done", 'flash_custom', array('class' => 'alert'));
					$this->redirect(array('controller' => 'admins', 'action' => 'index'));
				}
			}
		}	
	}

	public function admin_update($id){
		$this->Good->id = $id;
		if($this->request->is('GET')){
			$this->request->data = $this->Good->read();
			// foreach(unserialize($this->request->data['Good']['images_name']) as $images_name):
			// 	if(isset($images_name['main']) && $images_name['main'] === '1'){
			// 		$this->request->data['Good']['images_name'] = $images_name['name'];
			// 	}
			// endforeach;
			$this->request->data['Good']['images_name'] = unserialize($this->request->data['Good']['images_name']);
			// $this->set('product_data', $this->request->data);
		}
	}

	public function admin_delete(){

	}
}

?>
