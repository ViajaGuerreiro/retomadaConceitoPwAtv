<?php

if(!$_SESSION['usuario']) {
    header("Location: ../view/login.php");
    exit();
}

?>