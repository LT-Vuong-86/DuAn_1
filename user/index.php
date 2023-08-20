<?php
if (isset($_GET['controller'])) {
   $controller=$_GET['controller'];

}else{
    $controller="home";
}
include "controller/c_".$controller.".php";