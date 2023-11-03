<?php
    class BirthDate {
        private $day;
        private $month;
        private $year;

        function __construct($year, $month, $day)
        {
            $this->year = $year;
            $this->month = $month;
            $this->day = $day;
        }

        function getYear() {
            return $this->year;
        }

        function getMonth() {
            return $this->month;
        }

        function getDay() {
            return $this->day;
        }
    }
?>