<?php

session_start();

if (!array_key_exists('id', $_SESSION)) {
    header('location: ../login/?error=notLog');
}

?>