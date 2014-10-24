<?php
class SlideshowsController extends AppController{
	public $theme = 'Admin';
	
	public function beforeFilter(){
		parent::beforeFilter();
	}
	
	public $helpers = array('Html', 'Form', 'Session', 'Admins');
	
	public function admin_mainslideshow() {
		if($this->request->is("POST")){
			$title = '';
			$insideimage = '';
			foreach ($this->request->data['slideshows'] as $key => $value) {
				if(!empty($value)){
					switch ( substr($key, 0, -2) ) {
						case 'title':
							$title .= "~@~" . $value;
							$this->request->data['slideshows']['title'] = $title;
							unset($this->request->data['slideshows'][$key]);
							break;
						case 'subtitle':
							$title .= "~@~" . $value;
							$this->request->data['slideshows']['title'] = $title;
							unset($this->request->data['slideshows'][$key]);
							break;
						case 'insideimage':
							$insideimage .= $value . "~@~";
							$this->request->data['slideshows']['insideimage'] = $insideimage;
							unset($this->request->data['slideshows'][$key]);
							break;
						default:
							break;
					}
				} else {
					unset($this->request->data['slideshows'][$key]);
				}
			}
			if( $this->Slideshow->save($this->request->data['slideshows']) ){
				$this->redirect(array('controller' => 'admins', 'action' => 'index'));
			}else{
				$this->Session->setFlash($this->Slideshow->validationErrors, 'flash_custom', array('class' => 'alert'));
				$this->redirect(array('controller' => 'admins', 'action' => 'index'));
			}
		}
	}
}
?>
