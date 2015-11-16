<?php

    require_once('DataManager.php');

    class Display {
        
        private $cardio_list;
        private $workout_list;

        public function display_cardio_list() {
            $cardio_list = $this->get_cardio_list();
            
            foreach ($cardio_list as $value) {
                $exercise = $value->get_name();
                $date = $value->get_date();
                $id = $value->get_cardio_id();

                echo "
                      <br>$exercise:  $date 
                      <a href=\"index.php?content=includes/edit_cardio&&header=header&&id=$id\" >
                      Edit
                      </a> 
                      &nbsp
                      <a href=\"index.php?content=includes/edit_cardio&&header=header&&id=$id\" >
                      Delete
                      </a> 
                    ";  
            }
        }

        private function get_cardio_list() {
            $dm = $this->create_DataManager();
            $this->cardio_list = $dm->create_cardio_list();
            return $this->cardio_list;
        }

        // Creates a DataManager object
        private function create_DataManager() {
            return new DataManager();
        }



    }


?>