<?php

    /**
     * This class contains information about
     * a Set, which belongs to an Exercise
     *
     * @author Clay Washington
     *
     */
    class Set {
        private $set_id;
        private $rank;
        private $reps;    // Number of repitions
        private $weight;  // In lbs

        /**
         * Constructor
         *
         * @param int $reps
         * @param int $weight
         *
         */
        public function __construct($reps, $weight) {
            $this->reps = $reps;
            $this->weight = $weight;
        }

        public function get_rank() {
            return $this->rank;
        }

        /**
         * Getter for reps
         *
         * @return int $reps
         *
         */
        public function get_reps() {
            return $this->reps;
        }

        /**
         * Getter for weight
         *
         * @return int $weight
         *
         */
        public function get_weight() {
            return $this->weight;
        }

    }


?>