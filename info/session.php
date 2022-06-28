<?php
session_start();
if(isset($_POST["page"])){
    $_SESSION['page'] = $_POST["page"];
}

if(!empty($_SESSION['page'])){
    echo $_SESSION['page'] ;
}
