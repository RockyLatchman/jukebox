<?php


class User {
    public $email;
    public $password;

    public function __construct($email, $password) {
        $this->$email = $email;
        $this->password = $password;
    }

    public function create_account() {

    }

    public function edit_account() {

    }

    public function deactivate_account() {

    }

    private function check_account() {

    }

}
