<?php
class UsersController extends AppController {

    public function index() {
    $usuarios = $this->User->find('all');
    foreach($usuarios as $value) {

        if($value['User']['nombreUsuario'] == $this->request->data['User']['nombreUsuario'] && 
        $value['User']['contraUsuario'] == $this->request->data['User']['contraUsuario'] ) 
         {
            $this->Session->setFlash('Usuario correcto');
            $this->redirect(array('action'=>'inbox'));
  
        }
        

        // echo $value['User']['nombreUsuario'];

    }

    // $this->User->save($this->request->data); guarda datos
    // echo $this->request->data['User']['nombreUsuario'];

    }

    public function inbox() {

	}

}