<?php

include($_SERVER['DOCUMENT_ROOT'] . '/src/php/database/database.php');
include($_SERVER['DOCUMENT_ROOT'] . '/src/php/path.php');
session_start();

// ================================ при регистрации ===========================

if (isset($_POST)) {
    $data = file_get_contents("php://input");
    $userValue = json_decode($data, true);
    if (!empty($userValue)) {
        $userName = trim($userValue['name']);
        $userEmail = trim($userValue['email']);
        $userPassword = trim($userValue['password']);
        $userSecPassword = trim($userValue['secPassowrd']);
        $hashedPassword = password_hash($userPassword, PASSWORD_DEFAULT);
        $existenceEmail = selectOne('users', ['email' => $userEmail,]);

        if (selectAll('users', ['email' => $userEmail]) == true) { // проверяем существует ли пользователь с указанным email
        } else {
            if ($userPassword !== $userSecPassword) {
                echo 'Введенные вами пароли не совпадают';
            } else {
                $params = [
                    'admin' => 0,
                    'username' => $userName,
                    'email' => $userEmail,
                    'password' => $hashedPassword
                ];
                $id = insertOne('users', $params); // id & добавляем в базу данных
                $getLastRow = selectOne('users', ['id' => $id]); // получаем отправленные данные уже с сервера
                echo  "Пользователь " . "$userName" . " успешно зарегестрирован";
                $userSessionData = selectOne('users', ['id' => $id]);
                userSession($userSessionData);
            }
        }
    } else {
        echo 'что-то пошло н е так';
    }}


// ================================ при авторизации ===========================

//if (isset($_POST)) {
//    $data = file_get_contents("php://input");
//
//    $userValue = json_decode($data, true);
//    if (!empty($userValue)) {
//        $userEmail = trim($userValue['email']);
//        $userPassword = trim($userValue['password']);
//        $existence = selectOne('users', ['email' => $userEmail]);
//        if($existence and password_verify($userPassword, $existence['password']) != true ) {
//            echo false;
//            echo 'ошибка авторизации';
//        }else{
//            echo true;
//            echo 'произошла авторизация';
//            userSession($existence);
//        }
//    }
//        if (selectOne('users', ['email' => $userEmail, 'password' => password_verify($userPassword)]) != true) { // проверяем существует ли пользователь с указанным email в базе данных
//            echo $erorrMassagge = 'Пользователя с такой почтой не существует';
//        }else{
//            echo $successMassagge = 'Поздравляем вы успешно вошли в систему';
//        }
//            $erorrMassagge = '';
//            $existence = selectOne('users', ['email'=> $userEmail]);
//            if($existence || password_verify($pass, $existence['password']) != true)){
//                $erorrMassagge = 'Пользователя с такоим паролем не существует';}
//            }else{
//                echo $successMassagge = 'Поздравляем вы успешно вошли в систему';
//            }
//
//        }
//        echo $userEmail, $userPassword;

//}


//var_dump(json_decode($_GET['email'], true));
//
//if($_SERVER['REQUEST_METHOD'] === 'GET' ){
//  $email = trim(json_encode($_GET['email']));
//  $pass = trim(json_encode($_GET['password']));
//  echo $email, $pass;
//  if(selectOne('users', ['email' => $email]) != true){ // проверяем существует ли пользователь с указанным email в базе данных
//    // $erorrMassagge = 'Пользователя с такой почтой не существует';
//    $erorrMassagge = $email;
//  }else{
//    $erorrMassagge = '';
//    $existence = selectOne('users', ['email' => $email]);
//    if($existence and password_verify($pass, $existence['password']) != true){
//      $erorrMassagge = 'Пользователя с такоим паролем не существует';
//    }else{
//      userSession($existence);
//    }
//  }
//}


// if($_SERVER['REQUEST_METHOD'] === 'POST' and isset($_POST['button_auth'])){
//   $email = trim($_POST['email']);
//   $pass = trim($_POST['password']); 

//   if(selectOne('users', ['email' => $email]) != true){ // проверяем существует ли пользователь с указанным email в базе данных
//     $erorrMassagge = 'Пользователя с такой почтой не существует';
//   }else{
//     $erorrMassagge = '';
//     $existence = selectOne('users', ['email' => $email]);
//     if($existence and password_verify($pass, $existence['password']) != true){
//       $erorrMassagge = 'Пользователя с такоим паролем не существует';
//     }else{
//       userSession($existence);
//     }
//   }
// }