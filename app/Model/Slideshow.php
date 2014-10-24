<?php
class Slideshow extends AppModel{
	
	public $validate = array(
		"backgroundimage" => array(
            'notEmpty' => array(
				'rule' => 'notEmpty',
				'message' => 'Background Image is required'
			),
			'isUnique' => array(
				'rule' => 'isUnique',
				'message' => 'The Background Image is already exist'
			)
		),
		"insideimage" => array(
			'notEmpty' => array(
				'rule' => 'notEmpty',
				'message' => 'The image is required'
			),
			'isUnique' => array(
				'rule' => 'isUnique',
				'message' => 'This image is already exist'
			)
		),
		"title" => array(
			'notEmpty' => array(
				'rule' => 'notEmpty',
				'message' => 'Title is required'
			),
			'isUnique' => array(
				'rule' => 'isUnique',
				'message' => 'This title is already exist'
			)	
		)
	);
}



?>