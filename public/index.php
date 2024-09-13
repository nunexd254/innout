<?php
    require_once(dirname(__FILE__, 2) . '/src/config/config.php');
    require_once(CONTROLLER_PATH . '/login.php');
    //loadView('login', ['texto' => 'abc123']);
    // require_once(MODEL_PATH . '/Login.php');


    // $login = new Login([
    //     'email' => 'admin@cod3r.com.br',
    //     'password' => 'a'
    // ]);

    // try {
    //     $login->checkLogin();
    //     echo 'Usuário logado :D';
    // } catch(Exception $e) {
    //     echo 'Problema no login :P';
    // }

    // $sql = 'select * from users';
    // $result = Database::getResultFromQuery($sql);

    // while($row = $result->fetch_assoc()) {
    //     print_r($row);
    //     echo '<br>';
    // }

    //$user = new User(['name' => 'Lucas' , 'email' => 'lucas@cod3r.com.br']);
    //echo $user->getSelect();
    // echo User::getSelect(['id' => 1], 'name, email');
    // echo '<br>';
    // echo User::getSelect(['name' => 'Chaves']);
    // print_r(User::get(['id' => 1], 'name, email'));
    // echo '<br>';

    // foreach(User::get([], 'name') as $user) {
    //     echo $user->name;
    //     echo '<br>';
    // }