<?php

    require_once('MySQLHandler.php');

    /**
     * Provides an interface between Workout Tracker
     * and the Database Handler.
     * Contains functions for saving and retrieving data.
     *
     * @author Clay Washington
     *
     */
    class DataManager {
    
        /**
         * Passes data from a Cardio object to the
         * database handler.
         *
         * @param Cardio $cardio
         *
         */
        public function save_cardio($cardio) {
            $mh = $this->create_MySQLHandler();
            $mh->save_cardio($cardio->get_name(),
                             $cardio->get_time(),
                             $cardio->get_distance(),
                             $cardio->get_level(),
                             $cardio->get_date()     );                 
        }

        /**
         * Passes data from a Workout object to the
         * database handler to save
         *
         * @param Workout $workout
         * @return int $workout_id 
         */        
         public function save_workout_meta($workout) {
            $mh = $this->create_MySQLHandler();
            return $mh->save_workout_meta($workout->get_time(),
                                          $workout->get_date() );
        }

        /**
         * Passes data from an Exercise object to the
         * database handler to save
         *
         * @param int $workout_id (The id associated with the exercise)
         * @param Exercise $exercise
         * @return int $workout_id 
         */     
        public function save_exercise_meta($workout_id, $exercise) {
            $mh = $this->create_MySQLHandler();
            return $mh->save_exercise_meta($workout_id,
                                           $exercise->get_name());   
        }

        /**
         * Passes data from a Set object to the
         * database handler to save
         *
         * @param int $workout_id (The id associated with the set)
         * @param Set $set
         * @return int $set_id 
         */         
         public function save_set($exercise_id, $set) {
            $mh = $this->create_MySQLHandler();
            $mh->save_set($exercise_id,
                           $set->get_reps(),
                           $set->get_weight());   
        }

        /**
         * Passes data from a Cardio object to the
         * database handler to update in storage
         *
         * @param Cardio $cardio
         */  
        public function update_cardio($cardio) {
            $mh = $this->create_MySQLHandler();
            $mh->update_cardio($cardio->get_cardio_id(),
                               $cardio->get_name(),
                               $cardio->get_time(),
                               $cardio->get_distance(),
                               $cardio->get_level(),
                               $cardio->get_date()      );
        }

        /** 
         * Calls create_cardio_list() in MySQLHandler
         * 
         * @return Cardio[] An array of cardio objects
         *
         */
        public function create_cardio_list() {
            $mh = $this->create_MySQLHandler();
            return $mh->create_cardio_list();
        }

        public function get_workout_by_id($workout_id) {
            $mh = $this->create_MySQLHandler();
            $mh->get_workout_by_id($workout_id);
        }


        // Creates a MySQLHandler object
        private function create_MySQLHandler() {
            $mh = new MySQLHandler();
            return $mh;
        } 
    }

?>