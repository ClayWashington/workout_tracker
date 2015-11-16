<?php

    /**
     * Contains information about an Exercise,
     * which belongs to a Workout.
     * An Exercise is made up of metadata and
     * one or more Sets.
     *
     * @author Clay Washington
     *
     */
    class Exercise {
        private $exercise_id;
        private $name;        // Name of the workout

        /**
         * Constructor
         *
         * @param String $name
         *
         */
        public function __construct($name) {
            $this->name = $name;
        }

        /**
         * Getter for exercise_id
         *
         * @return int $exercise_id
         *
         */
        public function get_exercise_id() {
            return $this->exercise_id;
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

    }

?>