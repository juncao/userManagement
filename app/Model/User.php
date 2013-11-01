<?php

/**
 * Automated Trademark Registration Management System
 *
 * Copyright 2013, Team Barbarian
 *		   {Cao, Jun
 *		    Cheng, yue 
 *		    Jewis, Adam 
 *		    Saifullah, Mohammad 
 *		    Ding, SuFeng 
 *		    Guo, Desen }
 *                 Algonquin College - 1385 Woodroffe Avenue
 *		   Ottawa, Ontario, Canada. K2G 1V8.
 *
 * Redistributions of files must retain the above copyright notice.
 *
 * @Copyright 2013, Team Barbarian  
 */

class User extends AppModel {
    public $hasOne = 'Address';
   
    
    public $validate = array(
		'username' => array(
			'pattern' => array(
				'rule' => array('custom','/[a-zA-Z0-9\_\-]{4,30}$/i'),
				'message'=> 'Usernames must be 4 characters or longer with no spaces.'
			),
			'usernameExists' => array(
				'rule' => 'isUnique',
				'message' => 'Sorry, this username already exists'
			),
		),
		'e_mail' => array(
			'validEmail' => array(
				'rule' => array('email', true),
				'message' => 'Please supply a valid & active email address'
			),
			'emailExists' => array(
				'rule' => 'isUnique',
				'message' => 'Sorry, this email address is already in use'
			),
		),
		'password' => array(
			'too_short' => array(
				'rule' => array('minLength', '6'),
				'message' => 'The password must have at least 6 characters.'
                            ),
			'required' => array(
				'rule' => 'notEmpty',
				'message' => 'Please enter a password.')
                    ),
		'temppassword' => array(
			'rule' => 'confirmPassword',
			'message' => 'The passwords are not equal, please try again.'
                    ),
                'role' => array(
                    'valid' => array(
                        'rule' => array('inList', array('admin', 'user')),
                        'message' => 'Please enter a valid role',
                        'allowEmpty' => false
                    ),
                ),
        );
    
   public function confirmPassword($password = null) {
		if ((isset($this->data[$this->alias]['password']) && isset($password['temppassword']))
			&& !empty($password['temppassword'])
			&& ($this->data[$this->alias]['password'] === $password['temppassword'])) {
			return true;
		}
		return false;
	}
     
    //public function hash($string, $type = null, $salt = false) {
		//return Security::hash($string, $type, $salt);
	//
        //
        //public function beforeSave($options = array()) {
    public function beforeSave($options = array()) {
        if (isset($this->data[$this->alias]['password'])) {
            $this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
        }
        return true;
    }


        
}
?>
