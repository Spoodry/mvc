<?php

    class NuevoModel extends Model {
        public function __construct() {
            parent::__construct();
        }

        public function insert() {
            //Insertar datos en la BD
            echo 'Insertar datos';
        }

    }

?>