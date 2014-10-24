<?php
class SlideshowsController extends AppController{
	public $theme = 'Admin';
	
	public function beforeFilter(){
		parent::beforeFilter();
	}
	public $components = array('Session');
	public $helpers = array('Html', 'Form', 'Session', 'Admins');
	
	public function admin_mainslideshow() {
		$imageNames=array('png','jpeg','jpg','pjpeg');
		$imageTypes=array('image/jpeg','image/jpg','image/png','image/pjpeg');
		if($this->request->is("POST")){
			foreach ($this->request->data['slideshows'] as $key => $value) {
				switch ($key) {
					case 'backgroundimage':
						if($this->request->data['slideshows']['backgroundimage']['error'] === 0){
							if(!in_array($this->request->data['slideshows']['backgroundimage']['type'], $imageTypes) && !in_array(end((explode('.',$this->request->data['slideshows']['backgroundimage']['name']))), $imageNames)){
								$this->Session->setFlash("Your file is not image", 'flash_custom', array('class' => 'alert'));
								$this->redirect(array('controller' => 'admins', 'action' => 'index'));
							}else{
								move_uploaded_file($this->request->data['slideshows']['backgroundimage']['tmp_name'],'./files/mainslideshow/background/' . $this->request->data['slideshows']['backgroundimage']['name']);
								$this->request->data['slideshows']['backgroundimage'] = $this->request->data['slideshows']['backgroundimage']['name'];
							}
						}
					break;
					case 'insideimage1':
						if($this->request->data['slideshows']['insideimage1']['error'] === 0){
							if(!in_array($this->request->data['slideshows']['insideimage1']['type'], $imageTypes) && !in_array(end((explode('.',$this->request->data['slideshows']['insideimage1']['name']))), $imageNames)){
								$this->Session->setFlash("Your file is not image", 'flash_custom', array('class' => 'alert'));
								$this->redirect(array('controller' => 'admins', 'action' => 'index'));
							}else{
								move_uploaded_file($this->request->data['slideshows']['insideimage1']['tmp_name'],'./files/mainslideshow/insideimage/' . $this->request->data['slideshows']['insideimage1']['name']);
								$this->request->data['slideshows']['insideimage1'] = $this->request->data['slideshows']['insideimage1']['name'];
							}
						}		
					break;
					case 'insideimage2':
						if($this->request->data['slideshows']['insideimage2']['error'] === 0){
							if(!in_array($this->request->data['slideshows']['insideimage2']['type'], $imageTypes) && !in_array(end((explode('.',$this->request->data['slideshows']['insideimage2']['name']))), $imageNames)){
								$this->Session->setFlash("Your file is not image", 'flash_custom', array('class' => 'alert'));
								$this->redirect(array('controller' => 'admins', 'action' => 'index'));
							}else{
								move_uploaded_file($this->request->data['slideshows']['insideimage2']['tmp_name'],'./files/mainslideshow/insideimage/' . $this->request->data['slideshows']['insideimage2']['name']);
								$this->request->data['slideshows']['insideimage2'] = $this->request->data['slideshows']['insideimage2']['name'];
							}
						}		
					break;
					case 'insideimage3':
						if($this->request->data['slideshows']['insideimage3']['error'] === 0){
							if(!in_array($this->request->data['slideshows']['insideimage3']['type'], $imageTypes) && !in_array(end((explode('.',$this->request->data['slideshows']['insideimage3']['name']))), $imageNames)){
								$this->Session->setFlash("Your file is not image", 'flash_custom', array('class' => 'alert'));
								$this->redirect(array('controller' => 'admins', 'action' => 'index'));
							}else{
								move_uploaded_file($this->request->data['slideshows']['insideimage3']['tmp_name'],'./files/mainslideshow/insideimage/' . $this->request->data['slideshows']['insideimage3']['name']);
								$this->request->data['slideshows']['insideimage3'] = $this->request->data['slideshows']['insideimage3']['name'];
							}
						}	
					break;
				}
			}
			if($this->Slideshow->save($this->request->data['slideshows'])){
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
}
?>
