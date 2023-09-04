<?php
    session_start();
    include 'model/m_Database.php';
        
        $db = new database();;
        if (isset($_GET['controller'])){
            $controller = $_GET['controller'];
        }
        else{
            $controller = 'login';
        }

        include 'Controller/c_' .$controller. '.php';
?>