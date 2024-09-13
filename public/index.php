<?php
    require_once(dirname(__FILE__, 2) . '/src/config/config.php');
    require_once(dirname(__FILE__, 2) . '/src/models/User.php');

    // $sql = 'select * from users';
    // $result = Database::getResultFromQuery($sql);

    // while($row = $result->fetch_assoc()) {
    //     print_r($row);
    //     echo '<br>';
    // }

    $user = new User(['name' => 'Lucas' , 'email' => 'lucas@cod3r.com.br']);
    //echo $user->getSelect();
    // echo User::getSelect(['id' => 1], 'name, email');
    // echo '<br>';
    // echo User::getSelect(['name' => 'Chaves']);
    print_r(User::get(['id' => 1], 'name, email'));
    echo '<br>';

    foreach(User::get([], 'name') as $user) {
        echo $user->name;
        echo '<br>';
    }