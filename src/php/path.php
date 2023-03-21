<?php

define('BASE_URL', 'http://mysite/');

function userSession($userArrayData){
    $_SESSION['id'] = $userArrayData['id'];
    $_SESSION['username'] = $userArrayData['username'];
    $_SESSION['admin'] = $userArrayData['admin'];
    if($_SESSION['admin']){
        header('location: '. BASE_URL);
    }
}