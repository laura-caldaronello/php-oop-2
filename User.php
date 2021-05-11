<?php

require __DIR__ . '/traits.php';

define('TODAY',date("d-m-Y"));

class User {

    use PersonalData;

    private $id;
    public $nickname;
    private $member_from = TODAY;
    private $post_number = 0;
    private $level = 1;

    function __construct($_nickname,$_date_of_birth,$_email) {
        $this->nickname = $_nickname;
        $this->date_of_birth = $_date_of_birth;
        $this->email = $_email;
    }

    /* function getId() {
        return $this->id;
    }
    function getMemberFrom() {
        return $this->member_from;
    }
    function getPostNumber() {
        return $this->post_number;
    }
    function getLevel() {
        return $this->level;
    } */

}