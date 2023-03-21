<?php
include ($_SERVER['DOCUMENT_ROOT'].'/src/php/database/connect.php');

function test($value){
  echo '<pre>';
  print_r($value);
  echo'</pre>';
}
//==============Проверка выполнения запроса к базе данных на наличие ошибок============
function dbCheckErorr($querry){
  $errorInfo = $querry->errorInfo();
  if($errorInfo[0] !== PDO::ERR_NONE){
    echo $errorInfo[2];
    exit;
  }
}
//================Запрос на получения всех данных из одной таблицы===============
function selectAll($table, $params=[]){
  global $pdo;
  $sql = "SELECT * FROM $table";
  if(!empty($params)){ // Проверяем на наличие параметров
    $i=0; // Счетчик
    foreach($params as $param => $value){
      if(!is_numeric($value)){ // Проверяем является ли значение параметров числом
        $value = "'". $value ."'";
      }
      if($i===0){
        $sql = $sql . " WHERE $param = $value";
      }else{
        $sql = $sql . " AND $param = $value";
      }
      $i++;
    }
  }
    $querry = $pdo->prepare($sql);
    $querry->execute();
    dbCheckErorr($querry);
    return $querry->fetchAll();
}

//================Запрос на получения одной строки данных из таблицы===============
function selectOne($table, $params=[]){
  global $pdo;
  $sql = "SELECT * FROM $table";
  if(!empty($params)){ // Проверяем на наличие параметров
    $i=0; // Счетчик
    foreach($params as $param => $value){
      if(!is_numeric($value)){ // Проверяем является ли значение параметров числом
        $value = "'". $value ."'";
      }
      if($i===0){
        $sql = $sql . " WHERE $param = $value";
      }else{
        $sql = $sql . " AND $param = $value";
      }
      $i++;
    }
  }
    $querry = $pdo->prepare($sql);
    $querry->execute();
    dbCheckErorr($querry);
    return $querry->fetch();
}

//================Добавить данные в таблицу===============
function insertOne($table,$params){
  global $pdo;
  $i=0;
  $coll = ''; // маска колонки
  $mask = ''; // маска значения
  foreach($params as $param => $value){
    if($i==0){
      $coll = $coll . $param;
      $mask = $mask . "'" . $value . "'";
    }else{
      $coll = $coll . ", " . $param;
      $mask = $mask . ", '" . $value . "'";
    }
    $i++;
  }
  $sql = "INSERT INTO $table ($coll) VALUES ($mask)";
  $querry = $pdo->prepare($sql);
  $querry->execute();
  dbCheckErorr($querry);
  return $pdo->lastInsertId();
  // return $querry->fetch();
}

//================Обновить данные в таблице===============
function updateOne($table, $params, $id){
  global $pdo;
  $i=0;
  $coll = ''; // маска колонки
  $mask = ''; // маска значения
  foreach($params as $param => $value){
    if($i==0){
      $coll = $coll . $param ." = " . "'" . $value . "'"; // маска колонки и значения
    }else{
      $coll = $coll . ", " . $param ." = " . "'" . $value . "'"; // маска колонки и значения
    }
    $i++;
  }
  $sql = "UPDATE $table SET $coll WHERE id = $id";
  $querry = $pdo->prepare($sql);
  $querry->execute();
  dbCheckErorr($querry);
  return $querry->fetch();
}

//================Удалить строку в таблице===============
function deleteOne($table, $id){
  // DELETE FROM `users` WHERE 0
  global $pdo;
  $sql = "DELETE FROM $table WHERE id = $id";
  $querry = $pdo->prepare($sql);
  $querry->execute();
  dbCheckErorr($querry);
  return $querry->fetch();
}




$params = [
  'admin' => 0,
  'username' => 'John Doe',
  'email' => 'jhonny214@mail.com',
  'password' => '11111',
];


