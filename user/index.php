<?php
if (isset($_GET['controller'])) {
   $controller=$_GET['controller'];

}else{
    $controller="login";
}
include "controller/c_".$controller.".php";