<?php
class User {
    private $email;
    private $firstName;
    private $lastName;
    private $age;

    public function __construct($email, $firstName, $lastName, $age) {
        $this->email = $email;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getFirstName() {
        return $this->firstName;
    }

    public function getLastName() {
        return $this->lastName;
    }

    public function getAge() {
        return $this->age;
    }

    public function isValid() {
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            return false;
        }

        if (empty($this->firstName) || empty($this->lastName)) {
            return false;
        }

        if ($this->age < 13) {
            return false;
        }

        return true;
    }
}


?>