<?php

    class Helper {
        private $first_name;
        private $middle_name;
        private $last_name;

        public function __construct() {
            $this->first_name = "Generic";
            $this->middle_name = "P";
            $this->last_name = "Wilson";
        }

        public function __construct($first_name, $last_name) {
            $this->first_name = $first_name;
            $this->middle_name = "P";
            $this->last_name = $last_name;
        }

        public function __construct($first_name, $middle_name, $last_name) {
            $this->first_name = $first_name;
            $this->middle_name = $middle_name;
            $this->last_name = $last_name;
        }





        public function write_name($name) {
            echo "$first_name $middle_name $last_name<br>";            
        }

    }


?>