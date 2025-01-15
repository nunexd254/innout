<?php 
    require_once(dirname(__FILE__, 2) . '/src/config/config.php');
    require_once(dirname(__FILE__, 2) . '/src/models/User.php');

    $user = new User(['name' => 'Douglas', 'email' => 'email@gmail.com']);
    //echo 'Fim';
    print_r($user);
    echo '<br><br>';
    $user->email = 'douglas_alterado@gmail.com';
     echo '<br><br>';
    print_r(User::get(['id'=>1], 'name, email'));
    echo '<br><br>';
    foreach(User::get([], 'name') as $user) {
        echo $user->name;
        echo '<br>';
    }
     // echo $user->getSelect();
    // echo '<br><br>';
    // echo User::getSelect(['id' => 1],'name,email');
    // echo '<br><br>';
    // echo User::getSelect(['name'=>'Chaves']);
    //print_r($user->email);
    /*
    $sql = "select * from users";

    $result = Database::getResultFromQuery($sql);

    while($row = $result->fetch_assoc()){
        print_r($row);
        echo '<br>';
    }
    */    