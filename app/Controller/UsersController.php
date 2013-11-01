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
class UsersController extends AppController {
    

    public $helpers = array('Html', 'Form','Session');

   // public function beforeFilter() {
   // parent::beforeFilter();
   // $this->Auth->allow('register'); 
//}





//public function isAuthorized(){
    //if ($this->Auth->user('role') == 'admin') {
//return true;
//}
//}

    protected function _setupAdminPagination() {
		$this->Paginator->settings = array(
			'limit' => 5,
                        'order' => array('id' => 'desc'),
		);
	}
    
public function admin_index() {
        $this->_setupAdminPagination();
        //$this->Paginator->settings[$this->modelClass]['conditions'] = $parsedConditions;
    $data = $this->Paginator->paginate('User');
    $this->set('users', $data);
    //$this->set('users', $this->User->find('all'));
}

public function user_index($id = null) {
    if (!$id) {
    throw new NotFoundException(__('Invalid user'));
    }
    $user = $this->User->findById($id); 
    if (!$user) {
    throw new NotFoundException(__('Invalid user'));
    }
    $this->set('user', $user);

}

public function view($id = null) {
    if (!$id) {
    throw new NotFoundException(__('Invalid user'));
    }
    $user = $this->User->findById($id); 
    if (!$user) {
    throw new NotFoundException(__('Invalid user'));
    }
    $this->set('user', $user);
}

// Only for admin
public function add() {
    if ($this->request->is('post')) {
    $this->User->create();
    if ($this->User->saveAssociated($this->request->data)) {
    $this->Session->setFlash(__('New user account has been created.'));
    return $this->redirect(array('action' => 'admin_index'));
    }
    $this->Session->setFlash(__('Unable to create new user.'));
    }

}

public function register() {
    if ($this->request->is('post')) {
    $this->User->create();
    if ($this->User->saveAssociated($this->request->data)) {
    $this->Session->setFlash(__('You has been registered.'));
    return $this->redirect(array('action' => 'login'));
    }
    $this->Session->setFlash(__('Unable to register.'));
    }

}

public function login() {
    if ($this->request->is('post')) {
        if ($this->Auth->login()) {
            //return $this->redirect($this->Auth->redirect());
            return $this->redirect(array('controller' => 'users', 'action' => 'user_index', $this->Auth->user('id')));
        }
        $this->Session->setFlash(__('Invalid username or password, try again'));
    }
}

public function logout() {
    return $this->redirect($this->Auth->logout());
}

public function admin_edit($id=NULL){
    if (!$id){
        throw new NotFoundException(__('Invalid user'));
    }
    $user = $this->User->findById($id);
    if (!$user) {
        throw new NotFoundException(__('Invalid user'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
        $this->User->id = $id;
        if ($this->User->saveAssociated($this->request->data)) {
        $this->Session->setFlash(__('Your user has been updated.'));
        return $this->redirect(array('action' => 'view', $user['User']['id']));
        }
        $this->Session->setFlash(__('Unable to update your user.'));
        }
        if (!$this->request->data) {
        $this->request->data = $user;
        }
    
}

public function delete($id) {
if ($this->request->is('get')) {
throw new MethodNotAllowedException();
}
if ($this->User->delete($id)) {
$this->Session->setFlash(__('The user with id: %s has been deleted.', h($id)));
return $this->redirect(array('action' => 'index'));
}
}

}



?>
