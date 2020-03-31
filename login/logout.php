<?php

session_start();
{
    if(!(isset($_SESSION['t_user'])))
    {
        header("location: ../t_user/form-login.php");
    }
}

session_destroy();

{
    header("location: form-login.php");
}

?>