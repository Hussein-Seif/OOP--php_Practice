<?php

// include the wanted files
include 'namespaces.php';
include 'namespaces1.php';

// use key word "use " and set new name for user class from 
//1- namespaces.php   ---> as OUser
//2- namespaces1.php   ---> as TUser

use one\User as OUser;
use two\User as TUser;
use two\login;


$mon=new TUser("A7A ");
for ($i=0; $i <10 ; $i++) { 
    
    $l=new login($i);
    $hello=new TUser("Hussein");
}