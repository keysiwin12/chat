<?php

    class User extends AppModel {
        public $validate = array(
            'nombreUsuario'=>array('rule'=> 'notEmpty'),
            'contraUsuario' => array('rule' => 'notEmpty')
        );
    }

?>