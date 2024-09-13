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
    print_r($user);
    $user->email = 'lucas_alterado.com.br';
    print_r($user->email);