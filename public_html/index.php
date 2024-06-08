
<?php

    require_once(dirname(__FILE__, 2) . '/src/config/config.php');
    require_once(dirname(__FILE__, 2) . '/src/models/User.php');
    //ini_set('display_errors',1);
        //Database::getConnection();
        echo "<hr>";
        $sql = "select * from users";
        $result = Database::getResultFromQuery($sql);
        
        while($row = $result->fetch_assoc()){
            print_r($row);
            echo '<br>';
        }
        echo "<hr>";
        $user = new User(['name'=>'Lucas','email'=>'lucas@gmail.com']);
        print_r($user);
        $user->email = 'lucas_alterado@gmail.com';
        echo '<br>';
        print_r($user->email);
        echo '<br>';
        echo 'Fim!';
        echo "<hr>";

        //var_dump(Database::getConnection());
       
   