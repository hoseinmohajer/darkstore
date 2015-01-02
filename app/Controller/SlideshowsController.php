<?php
class SlideshowsController extends AppController{
	public $theme = 'Admin';
	
	public function beforeFilter(){
		parent::beforeFilter();
	}
	public $helpers = array('Html', 'Form', 'Session', 'Admins');
	
	private	$imageNames=array('png','jpeg','jpg','pjpeg');
	private	$imageTypes=array('image/jpeg','image/jpg','image/png','image/pjpeg');

	public function admin_add() {
		if($this->request->is("POST")){
			$slideshowsData = $this->request->data['slideshows'];
			foreach ($slideshowsData as $key => $value) {
				switch ($key) {
					case 'backgroundimage':
						if($slideshowsData['backgroundimage']['error'] === 0){
							if(!in_array($slideshowsData['backgroundimage']['type'], $this->imageTypes) && !in_array(end((explode('.',$slideshowsData['backgroundimage']['name']))), $this->imageNames)){
								$this->Session->setFlash("Your file is not image", 'flash_custom', array('class' => 'alert'));
								$this->redirect(array('controller' => 'admins', 'action' => 'index'));
							}else{
								move_uploaded_file($slideshowsData['backgroundimage']['tmp_name'],'./files/mainslideshow/background/' . $slideshowsData['backgroundimage']['name']);
								$slideshowsData['backgroundimage'] = $slideshowsData['backgroundimage']['name'];
							}
						}
					break;
					case 'insideimage1':
						if($slideshowsData['insideimage1']['error'] === 0){
							if(!in_array($slideshowsData['insideimage1']['type'], $this->imageTypes) && !in_array(end((explode('.',$slideshowsData['insideimage1']['name']))), $this->imageNames)){
								$this->Session->setFlash("Your file is not image", 'flash_custom', array('class' => 'alert'));
								$this->redirect(array('controller' => 'admins', 'action' => 'index'));
							}else{
								move_uploaded_file($slideshowsData['insideimage1']['tmp_name'],'./files/mainslideshow/insideimage/' . $slideshowsData['insideimage1']['name']);
								$slideshowsData['insideimage1'] = $slideshowsData['insideimage1']['name'];
							}
						}		
					break;
					case 'insideimage2':
						if($slideshowsData['insideimage2']['error'] === 0){
							if(!in_array($slideshowsData['insideimage2']['type'], $this->imageTypes) && !in_array(end((explode('.',$slideshowsData['insideimage2']['name']))), $this->imageNames)){
								$this->Session->setFlash("Your file is not image", 'flash_custom', array('class' => 'alert'));
								$this->redirect(array('controller' => 'admins', 'action' => 'index'));
							}else{
								move_uploaded_file($slideshowsData['insideimage2']['tmp_name'],'./files/mainslideshow/insideimage/' . $slideshowsData['insideimage2']['name']);
								$slideshowsData['insideimage2'] = $slideshowsData['insideimage2']['name'];
							}
						}		
					break;
					case 'insideimage3':
						if($slideshowsData['insideimage3']['error'] === 0){
							if(!in_array($slideshowsData['insideimage3']['type'], $this->imageTypes) && !in_array(end((explode('.',$slideshowsData['insideimage3']['name']))), $imageNames)){
								$this->Session->setFlash("Your file is not image", 'flash_custom', array('class' => 'alert'));
								$this->redirect(array('controller' => 'admins', 'action' => 'index'));
							}else{
								move_uploaded_file($slideshowsData['insideimage3']['tmp_name'],'./files/mainslideshow/insideimage/' . $slideshowsData['insideimage3']['name']);
								$slideshowsData['insideimage3'] = $slideshowsData['insideimage3']['name'];
							}
						}	
					break;
				}
			}
			if($this->Slideshow->save($slideshowsData)){
				$this->Session->setFlash("Done", 'flash_custom', array('class' => 'alert'));
				$this->redirect(array('controller' => 'admins', 'action' => 'index'));
			}else{
				debug($this->Slideshow->validationErrors);
				$message = '';
				$i = 1;
				foreach ($this->Slideshow->validationErrors as $key => $value) {
					$message .= $i++ . "." . $value[0] . "  ";
				}
				$this->Session->setFlash($message, 'flash_custom', array('class' => 'alert'));
				$this->redirect(array('controller' => 'admins', 'action' => 'index'));
			}
		}
	}

	public function admin_update($id) {
		$this->layout = NULL;
		$this->autoRender = false;
		$this->Slideshow->id = $id;
		if($this->request->is('get')){
			$slideshowdata = $this->Slideshow->find('all', array('conditions' => array("Slideshow.id" => $id)));
			if($slideshowdata){
				return json_encode($slideshowdata);
			}
		} else {
			debug($this->request->data);
			$slideshowsData = $this->request->data['slideshows'];

			foreach ($slideshowsData as $key => $value) {
				switch ($key) {
					case 'backgroundimage':
						if($slideshowsData['backgroundimage']['error'] === 0){
							if(!in_array($slideshowsData['backgroundimage']['type'], $this->imageTypes) && !in_array(end((explode('.',$slideshowsData['backgroundimage']['name']))), $this->imageNames)){
								$this->Session->setFlash("Your file is not image", 'flash_custom', array('class' => 'alert'));
								$this->redirect(array('controller' => 'admins', 'action' => 'index'));
							}else{
								move_uploaded_file($slideshowsData['backgroundimage']['tmp_name'],'./files/mainslideshow/background/' . $slideshowsData['backgroundimage']['name']);
								$slideshowsData['backgroundimage'] = $slideshowsData['backgroundimage']['name'];
							}
						}
					break;
					case 'insideimage1':
						if($slideshowsData['insideimage1']['error'] === 0){
							if(!in_array($slideshowsData['insideimage1']['type'], $this->imageTypes) && !in_array(end((explode('.',$slideshowsData['insideimage1']['name']))), $this->imageNames)){
								$this->Session->setFlash("Your file is not image", 'flash_custom', array('class' => 'alert'));
								$this->redirect(array('controller' => 'admins', 'action' => 'index'));
							}else{
								move_uploaded_file($slideshowsData['insideimage1']['tmp_name'],'./files/mainslideshow/insideimage/' . $slideshowsData['insideimage1']['name']);
								$slideshowsData['insideimage1'] = $slideshowsData['insideimage1']['name'];
							}
						}		
					break;
					case 'insideimage2':
						if($slideshowsData['insideimage2']['error'] === 0){
							if(!in_array($slideshowsData['insideimage2']['type'], $this->imageTypes) && !in_array(end((explode('.',$slideshowsData['insideimage2']['name']))), $this->imageNames)){
								$this->Session->setFlash("Your file is not image", 'flash_custom', array('class' => 'alert'));
								$this->redirect(array('controller' => 'admins', 'action' => 'index'));
							}else{
								move_uploaded_file($slideshowsData['insideimage2']['tmp_name'],'./files/mainslideshow/insideimage/' . $slideshowsData['insideimage2']['name']);
								$slideshowsData['insideimage2'] = $slideshowsData['insideimage2']['name'];
							}
						}		
					break;
					case 'insideimage3':
						if($slideshowsData['insideimage3']['error'] === 0){
							if(!in_array($slideshowsData['insideimage3']['type'], $this->imageTypes) && !in_array(end((explode('.',$slideshowsData['insideimage3']['name']))), $imageNames)){
								$this->Session->setFlash("Your file is not image", 'flash_custom', array('class' => 'alert'));
								$this->redirect(array('controller' => 'admins', 'action' => 'index'));
							}else{
								move_uploaded_file($slideshowsData['insideimage3']['tmp_name'],'./files/mainslideshow/insideimage/' . $slideshowsData['insideimage3']['name']);
								$slideshowsData['insideimage3'] = $slideshowsData['insideimage3']['name'];
							}
						}	
					break;
				}
			}
			if($this->Slideshow->save($slideshowsData)){
				return true;
			}else{
				return false;
			}
		}
	}

	public function admin_delete($id) {
		if($this->request->is('post')){
			$this->layout = NULL;
			$this->autoRender = false;
			if($this->Slideshow->delete($id)){
				return true;
			} else{
				return false;
			}
		}
	}
	
}
?>
