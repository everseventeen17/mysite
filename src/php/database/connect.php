<?php

$driver = 'mysql';
$host = 'localhost';
$db_name = 'mysite';
$charset = 'utf8';
$user = 'root';
$password = '';
$options = [PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE=> PDO::FETCH_ASSOC];

try{
  $pdo=new PDO("$driver:host=$host;dbname=$db_name; chraset=$charset", $user, $password, $options);
}catch(PDOException $i){
  die('connecting error');
}
