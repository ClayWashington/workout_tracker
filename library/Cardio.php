<?php

    require_once('DataHandler.php');

    /**
     * Contains information about cardio workouts.
     *
     * @author Clay Washington
     *
     */
    class Cardio {

        private $cardio_id;
        private $name;      // Name of the exercise
        private $time;      // Duration (minutes)
        private $distance;  // In miles  
        private $level;     // Typically for cardio machines
        private $date;

        /**
         * Constructor
         *
         * @param String $name
         * @param int $time
         * $param double $distance
         * @param double $level
         * $param String $date
         *
         */
        public function __construct($name, 
                                    $time, 
                                    $distance, 
                                    $level,
                                    $date) {
            $this->name = $name;
            $this->time = $time;
            $this->distance = $distance;
            $this->level = $level;
            $this->date = $date;
        }

        /**
         * Returns a Cardio object
         *
         * @param int $cardio_id
         * @return Cardio $cardio A Cardio object
         *
         */
        public function get_cardio_by_id($cardio_id) {
            $dh = new DataHandler();
            return $dh->get_cardio_by_id($cardio_id);
        }

        /**
         * Getter for cardio_id
         *
         * @return int $cardio_id
         *
         */
        public function get_cardio_id() {
            return $this->cardio_id;
        }

        /**
         * Getter for name
         *
         * @return String $name
         *
         */
        public function get_name() {
            return $this->name;
        }

        /**
         * Getter for time
         *
         * @return int $time
         *
         */
        public function get_time() {
            return $this->time;
        }

        /**
         * Getter for distance
         *
         * @return double $distance
         *
         */
        public function get_distance() {
            return $this->distance;
        }

        /**
         * Getter for level
         *
         * @return double $level
         *
         */
        public function get_level() {
            return $this->level;
        }

        /**
         * Getter for date
         *
         * @return String $date
         *
         */
        public function get_date() {
            return $this->date;
        }

        /**
         * Setter for cardio_id
         *
         * @return int $cardio_id
         *
         */
        public function set_cardio_id($cardio_id) {
            $this->cardio_id = $cardio_id;
        }

    }

?>