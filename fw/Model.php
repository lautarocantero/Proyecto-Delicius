<?php

    //fw/Model.php

    abstract class Model{   //esta clase abstracta existe para que el miembro db sea protected, y ademas permitirle a los hijos hacer consultas   

        protected $db;

        public function __construct()
        {
            $this->db = Database::getInstance();
        }

    }


?>