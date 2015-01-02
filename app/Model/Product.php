<?php
class Product extends AppModel{
	public $hasMany = array(
		'Productimage' => array(
			'className' => 'Productimage',
			'foreignKey' => 'productimages_productId',
			'conditions' => '',
			'order' => ''
		)
	);
}


?>