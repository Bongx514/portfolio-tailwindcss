<?php
class User {
    private $name;
    private $email;
    private $message;

    private $dateCreated;

    public function __construct($name, $email, $message, $dateCreated) {
        $this->name = $name;
        $this->email = $email;
        $this->message = $message;
        $this->dateCreated = $dateCreated;
    }

    public function getName() {
        return $this->name;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getMessage() {
        return $this->message;
    }

    public function getDateCreated() {
        return $this->dateCreated;
    }
}
?>
