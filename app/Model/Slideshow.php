<?php
class Slideshow extends AppModel{
	
	public $validate = array(
		"backgroundimage" => array(
			'notEmpty' => array(
				'rule' => 'notEmpty',
				'message' => 'Background Image is required.'
			),
			'isUnique' => array(
				'rule' => 'isUnique',
				'message' => 'The Background Image is already exist.'
			),
			'uploadError' => array(
				'rule' => 'uploadError',
				'message' => 'Something went wrong with the upload.'
			),
			'_imageValidation' => array(
				'rule' => array('_imageValidation', 'backgroundimage'),
				'message' => 'Your file is not image.'
			)
		),
		"insideimage1" => array(
			'notEmpty' => array(
				'rule' => 'notEmpty',
				'message' => 'The image is required.'
			),
			'isUnique' => array(
				'rule' => 'isUnique',
				'message' => 'This image is already exist'
			),
			'uploadError' => array(
				'rule' => 'uploadError',
				'message' => 'Something went wrong with the upload.'
			)
		),
		"insideimage2" => array(
			'notEmpty' => array(
				'rule' => 'notEmpty',
				'message' => 'The image is required.'
			),
			'isUnique' => array(
				'rule' => 'isUnique',
				'message' => 'This image is already exist.'
			),
			'uploadError' => array(
				'rule' => 'uploadError',
				'message' => 'Something went wrong with the upload.'
			)
		),
		"insideimage3" => array(
			'notEmpty' => array(
				'rule' => 'notEmpty',
				'message' => 'The image is required.'
			),
			'isUnique' => array(
				'rule' => 'isUnique',
				'message' => 'This image is already exist.'
			),
			'uploadError' => array(
				'rule' => 'uploadError',
				'message' => 'Something went wrong with the upload.'
			)
		),
		"title" => array(
			'notEmpty' => array(
				'rule' => 'notEmpty',
				'message' => 'Title is required.'
			),
			'isUnique' => array(
				'rule' => 'isUnique',
				'message' => 'This title is already exist.'
			)	
		),
		"subtitle" => array(
			'notEmpty' => array(
				'rule' => 'notEmpty',
				'message' => 'SubTitle is required'
			),
			'isUnique' => array(
				'rule' => 'isUnique',
				'message' => 'This subtitle is already exist.'
			)	
		)
	);
	public function _imageValidation($key){
		return true;
		// debug($this->data);
		// debug($key);
		// $imageNames=array('png','jpeg','jpg','pjpeg');
		// $imageTypes=array('image/jpeg','image/jpg','image/png','image/pjpeg');
		// if(in_array($this->data['Slideshow'][$key], $imageTypes) && in_array(end(explode('.',$this->data['Slideshow'][$key]['name'])), $imageNames))
		// 	return true;
		// return false;
	}
}



?>