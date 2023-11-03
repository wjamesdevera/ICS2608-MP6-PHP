<?php 
    include("birthdate.php");
    include("address.php");

    class Student {
        private $first_name;
        private $last_name;
        private $gender;
        private $student_id;
        private $year_level;
        private $degree;
        private $email;
        private $dob;
        private $phone;
        private $address;

        function __construct($first_name, $last_name)
        {
            $this->first_name = $first_name;
            $this->last_name = $last_name;
        }

        function setFirstName($first_name) {
            $this->first_name = $first_name;
        }

        function setLastName($last_name) {
            $this->last_name = $last_name;
        }

        function setGender($gender) {
            $this->gender = $gender;
        }

        function setStudentID($student_id) {
            $this->student_id = $student_id;
        }

        function setYearLevel($year_level) {
            $this->year_level = $year_level;
        }

        function setDegree($degree) {
            $this->degree = $degree;
        }

        function setEmail($email) {
            $this->email = $email;
        }

        function setBirthDate($year, $month, $day) {
            $this->dob = new BirthDate($year, $month, $day);
        }

        function setPhone($phone) {
            $this->phone = $phone;
        }

        function setAddress($street, $city, $state, $postal, $country) {
            $this->address = new Address($street, $city, $state, $postal, $country);
        }

        function getFirstName() {
            return $this->first_name;
        }

        function getLastName() {
            return $this->last_name;
        }

        function getGender() {
            return $this->gender;
        }

        function getStudentID() {
            return $this->student_id;
        }

        function getYearLevel() {
            return $this->year_level;
        }

        function getDegree() {
            return $this->degree;
        }

        function getEmail() {
            return $this->email;
        }

        function getBirthDate() {
            return $this->dob->getYear() . "-" . $this->dob->getMonth() . "-" . $this->dob->getDay();
        }

        function getPhone() {
            return $this->phone;
        }

        function getAddress() {
            return $this->address->getStreet() . ", " . $this->address->getCity() . ", " . $this->address->getState() . ", " . $this->address->getCountry() . ", " . $this->address->getpostal();
        }
    }
?>