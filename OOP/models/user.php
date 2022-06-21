<?php
require_once "../db.php";

define('AGE',24);
//echo AGE;



class User extends DB
{
    public $table;

    public function __construct()
    {
        $this->table = 'users';
    }

}


$person = new User();
dd($person);


const FNAME = "Azim Karimi";
//echo FNAME;
