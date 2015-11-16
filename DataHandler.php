<?php

    require_once('library/MySQLHandler.php');

    class DataHandler {

        public function save_cardio($name, $time, $distance,
                                    $level, $date) {
            $mh = $this->create_MySQLHandler();
            $mh->save_cardio($name, $time, $distance, $level, $date);
        }

        public function save_workout($workout_id, $time, $date) {
            $mh = $this->create_MySQLHandler();
            $mh->save_workout($workout_id, $time, $date);
        }

        public function save_exercise($exercise_id, $workout_id, $exercise_name) {
            $mh = $this->create_MySQLHandler();
            $mh->save_exercise($exercise_id, $workout_id, $exercise_name);
        }

        public function save_set($set_id, $exercise_id, $reps, $weight) {            
            $mh = $this->create_MySQLHandler();
            $mh->save_set($set_id, $exercise_id, $reps, $weight);
        }

        public function update_cardio($cardio_id, $exercise, $time, 
                                      $distance, $level, $date     ) {
            $mh = $this->create_MySQLHandler();
            $mh->update_cardio($cardio_id, $exercise, $time,
                               $distance, $level, $date     );
        } 

        public function get_cardio_by_id($id) {
            $mh = $this->create_MySQLHandler();
            return $mh->get_cardio_by_id($id);
        }

        public function create_cardio_list() {
            $mh = $this->create_MySQLHandler();
            return $mh->create_cardio_list();
        }

        /** 
         * Returns the next id in the table
         * For use with tables that do not auto-increment id
         * 
         * @param String the name of the table
         * @return int
         *
         */
        public function get_next_id($table_name) {
            $mh = $this->create_MySQLHandler();
            return $mh->get_next_id($table_name);
            
        }

        // Creates a MySQLHandler object
        private function create_MySQLHandler() {
            $mh = new MySQLHandler();
            return $mh;
        }        


    }

?>