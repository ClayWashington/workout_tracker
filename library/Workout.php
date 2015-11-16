<?php

    /**
     * Contains information about a Workout.
     * A Workout is made up of metadata, and 
     * one or more Exercises and Sets.
     *
     * @author Clay Washington
     *
     */
    class Workout {

        private $workout_id;
        private $time;       // Duration of workout (minutes)
        private $date;
        private $exercises;  // Array of Exercise objects

        /**
         * Constructor
         *
         * @param int $time
         * @param String $date
         *
         */
        public function __construct($time, $date) {
            $this->time = $time;
            $this->date = $date;
            $this->exercises = array();
        }

        /**
         * Getter for workout_id
         *
         * @return int $workout_id
         *
         */
        public function get_workout_id() {
            return $this->workout_id;
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
         * Getter for date
         *
         * @return String $date
         *
         */
        public function get_date() {
            return $this->date;
        }        

        /**
         * Getter for Exercises
         *
         * @return Exercises[] $exercise
         *
         */
        public function get_exercises() {
            return $this->exercises;
        }

        /**
         * Setter for workout_id
         *
         * @param int $workout_id
         *
         */
        public function set_workout_id($workout_id) {
            $this->workout_id = $workout_id;
        }

        /**
         * Adds an Exercise to exercises[]
         *
         * @param Exercise $exercise
         *
         */
        public function add_exercise($exercise) {
            $index = count($exercises);
            $exercises[$index] = $exercise;
        }

    }

?>