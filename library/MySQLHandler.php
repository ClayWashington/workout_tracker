<?php

    require('connect.php');
    require_once('Cardio.php');

    /**
     * Provides an interface between Workout Tracker's
     * DataManager and the MySQL database
     *
     * @author Clay Washington
     *
     */
    class MySQLHandler {

        /** 
         * Saves cardio data
         * 
         * @param Sring $name Name of the exercise
         * @param int $time Time in minutes
         * @param double $distance Distance in miles
         * @param double $level Represents intensity
         * @param String $date
         *
         */  
        public function save_cardio($name, $time, $distance, 
                                    $level, $date) {
            $query = "INSERT INTO cardio
                      VALUES('', '$name', '$time', 
                             '$distance', '$level', '$date')";
            MYSQL_query($query) or die ('Problem inserting cardio.'
                                        . MYSQL_error());
        }

        /** 
         * Saves workout metadata
         * 
         * @param int $time Time in minutes
         * @param String $date
         * @return int $workout_id
         *
         */  
        public function save_workout_meta($time, $date) {
            $query = "INSERT INTO workout
                      VALUES('', '$date', '$time')";
            MYSQL_query($query) or die ('Problem inserting workout.'
                                        . MYSQL_error());
            return $this->get_last_id('workout');          
        }

        /** 
         * Saves exercise metadata
         * 
         * @param int $workout_id
         * @param String $exercise_name
         * @return int $exercise_id
         *
         */  
        public function save_exercise_meta($workout_id, $exercise_name) {
            $query = "INSERT INTO exercise
                      VALUES('', '$workout_id', '$exercise_name')";
            MYSQL_query($query) or die ('Problem inserting exercise.'
                                        . MYSQL_error());
            return $this->get_last_id('exercise');          
        }

        /** 
         * Saves set data to the database
         * 
         * @param int $exercise_id
         * @param int $reps Number of reps performed
         * @param int $weight Weight lifted
         *
         */        
        public function save_set($exercise_id, $reps, $weight) {            
            $query = "INSERT INTO sets
                      VALUES('', '$exercise_id', '$reps', '$weight')";
            MYSQL_query($query) or die ('Problem inserting set.'
                                        . MYSQL_error());
        }

        /** 
         * Updates a row in table cardio by id
         * 
         * @param int $cardio_id
         * @param String $exercise The name of the exercise
         * @param int $time Time in minutes
         * @param double $distance Distance in miles
         * @param double $level Represents intensity
         * @param String $date
         *
         */
        public function update_cardio($cardio_id, $exercise, $time, 
                                      $distance, $level, $date     ) {
            $query = "UPDATE cardio
                      SET exercise = '$exercise', time = '$time',
                          distance = '$distance', level = '$level', date = '$date'
                      WHERE cardio_id = '$cardio_id' ";
            MYSQL_query($query) or die ('Problem updating cardio.' . MYSQL_error());
        }

        /** 
         * Retrieves a row from table cardio by id
         * 
         * @param int id of desired field
         * @return Cardio object
         *
         */
        public function get_cardio_by_id($id) {
            $query = "SELECT exercise, time, distance, level, date
                      FROM cardio
                      WHERE cardio_id = $id";
            $result = MYSQL_query($query);
            $row = MYSQL_fetch_array($result, MYSQL_ASSOC);
            $exercise = $row['exercise'];
            $time = $row['time'];
            $distance = $row['distance'];
            $level = $row['level'];
            $date = $row['date'];

            $cardio_id = $id;

            $cardio = new Cardio($exercise, $time, $distance,
                                 $level, $date               );
            $cardio->set_cardio_id($cardio_id);
            return $cardio;
        }

        /** 
         * Returns the full Cardio table
         * 
         * @return Cardio[] An array of cardio objects
         *
         */
        public function create_cardio_list() {   
            $counter = 0;

            $query = "SELECT cardio_id, exercise, time, distance, level, date
                      FROM cardio
                      ORDER BY cardio_id DESC";
            $result = MYSQL_query($query);
            while ($row = MYSQL_fetch_array($result, MYSQL_ASSOC)) {
                $cardio_id = $row['cardio_id'];
                $exercise = $row['exercise'];
                $time = $row['time'];
                $distance = $row['distance'];
                $level = $row['level'];
                $date = $row['date'];

                $cardio = new Cardio($exercise, $time, $distance,
                                     $level, $date               );
                $cardio->set_cardio_id($cardio_id);
                $cardio_list[$counter] = $cardio;  
                $counter++;      
            }
            return $cardio_list;
        }

        public function get_workout_by_id($id) {
                   
        } 

        // Returns the last id in the table, which
        // corresponds to the last object created
        private function get_last_id($table_name) {      
            $id = $table_name . '_id';
            $query = "SELECT $id
                      FROM $table_name
                      ORDER BY $id DESC";
            $result = MYSQL_query($query);
            $row = MYSQL_fetch_array($result, MYSQL_ASSOC);
            $last_id = $row[$id];
            if ($last_id == '') {
                $last_id = 1;
            }
            return $last_id;
         }

    }

?>