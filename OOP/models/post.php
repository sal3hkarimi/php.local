<?php

require_once "../db.php";

class Post extends DB{
    public function __construct()
    {
        $this->table = 'posts';
    }
}
