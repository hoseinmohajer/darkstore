<?php
App::uses('SimplePasswordHasher', 'Controller/Component/Auth');
class User extends AppModel{

	public $validate = array(
		"username" => array(
			'alphaNumeric' => array(
                'rule'     => 'alphaNumeric',
                'required' => true,
                'message'  => 'Letters and numbers only'
            ),
            'between' => array(
                'rule'    => array('between', 6, 12),
                'message' => 'Between 6 to 12 characters'
            ),
            'notEmpty' => array(
				'rule' => 'notEmpty',
				'message' => 'Username is required'
			),
			'isUnique' => array(
				'rule' => 'isUnique',
				'message' => 'The username is already exist'
			)
		),
		"password" => array(
			'between' => array(
                'rule'    => array('between', 6, 12),
                'message' => 'Between 6 to 12 characters'
            ),
			'notEmpty' => array(
				'rule' => 'notEmpty',
				'message' => 'Password is required'
			)
		),
		"confirmpassword" => array(
			'confirmpassword' => array(
				'rule' => array('_confirmpassword', 'password'),
				'message' => 'Require the same value to password.'
			),
			'between' => array(
                'rule'    => array('between', 6, 12),
                'message' => 'Between 6 to 12 characters'
            ),
			'notEmpty' => array(
				'rule' => 'notEmpty',
				'message' => 'Confirm password is required'
			)	
		)
	);
	public function _confirmpassword($password){
		return (isset($this->data['User']['password']) && isset($password) && $this->data['User']['password'] === $password['confirmpassword']) ? true : false;
	}

	public function beforeSave($options = array()) {
        if (isset($this->data['User']['password'])) {
            $this->data['User']['password'] = AuthComponent::password($this->data['User']['password']);
        }
        return true;
    }
}


?>