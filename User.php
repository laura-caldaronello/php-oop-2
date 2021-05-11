<?php

define('TODAY',date("d-m-Y"));

class User {
    private $id;
    public $nickname;
    private $member_from = TODAY;
    private $post_number = 0;
    public $date_of_birth;
    public $email;
    private $level = 1;

    function __construct($_nickname,$_date_of_birth,$_email) {
        $this->nickname = $_nickname;
        $this->date_of_birth = $_date_of_birth;
        $this->email = $_email;
    }



}