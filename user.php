<?php 
class User {
    private $firstName;
    private $lastName;
    private $studentID;
    private $password;
    private $phoneNumber;
    private $email;
    private $gender;

    function __construct($firstName, $lastName, $studentID, $password, $phoneNumber, $email, $gender)
    {
        $this->setFirstName($firstName);
        $this->setLastName($lastName);
        $this->setStudentID($studentID);
        $this->setPassword($password);
        $this->setPhoneNumber($phoneNumber);
        $this->setEmail($email);
        $this->setGender($gender);
    }

    // Setters
    function setFirstName($firstName) {
        $this->firstName = $firstName;
    }

    function setLastName($lastName) {
        $this->lastName = $lastName;
    }

    function setStudentID($studentID) {
        $this->studentID = $studentID;
    }

    function setPassword($password) {
        $this->password = $password;
    }
    
    function setPhoneNumber($phoneNumber) {
        if(!preg_match($phoneNumber, "/^(\+63|0)[1-9]\d{8}$/")) {
            return false;
        }
        $this->phoneNumber = $phoneNumber;
        return true;
    }

    function setEmail($email) {
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return false;
        }
        $this->email = $email;
        return true;
    }

    function setGender($gender) {
        if ($gender != "male" || $gender != "female" || $gender != "other") {
            return false;
        }
        $this->gender = $gender;
        return true;
    }

    // Getters
    function getFirstName() {
        return $this->firstName;
    }

    function getLastName() {
        return $this->lastName;
    }

    function getStudentID() {
        return $this->studentID;
    }

    function getPassword() {
        return $this->password;
    }
    
    function getPhoneNumber() {
        return $this->phoneNumber;
    }

    function getEmail() {
        return $this->email;
    }

    function getGender() {
        return $this->gender;
    }
}
?>