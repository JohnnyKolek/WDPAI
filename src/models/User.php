<?php

class User {
    private $email;
    private $password;
    private $name;
    private $surname;

    /**
     * @param $email
     * @param $password
     * @param $name
     * @param $surname
     */
    public function __construct($email, $password, $name, $surname)
    {
        $this->email = $email;
        $this->password = $password;
        $this->name = $name;
        $this->surname = $surname;
    }


    public function getEmail(): string 
    {
        return $this->email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSurname(): string
    {
        return $this->surname;
    }

    public function setPhone($phone)
    {
    }


}