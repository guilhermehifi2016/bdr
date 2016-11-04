<?php

function redir_google()
{
    header("Location: http://www.google.com");
    exit();
}
if (isset($_SESSION['loggedin']) || isset($_COOKIE['Loggedin'])) {
    if (isset($_COOKIE['Loggedin']))
        $_SESSION['loggedin'] = $_COOKIE['Loggedin'];

    redir_google();
} else {
    redir_google();
}





