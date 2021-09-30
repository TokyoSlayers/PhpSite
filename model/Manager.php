<?php

namespace TokyoSlayer\phpTokyo\model;

class Manager
{
    protected function dbConnect()
    {
        $db = new \PDO('mysql:host=localhost;dbname=s2_WebGestion;charset=utf8', 'root', '');
        return $db;
    }
}

?>