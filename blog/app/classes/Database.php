<?php
namespace App\classes;
class Database
{
    public function dbConnection(){
        $hostName = 'localhost';
        $username = 'root';
        $password = '';
        $dbName = 'blog1';
        $link = mysqli_connect( $hostName,$username,$password,$dbName);
        return $link;
    }
}