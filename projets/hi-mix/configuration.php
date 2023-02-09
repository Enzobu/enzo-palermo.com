<?php
define('VAR_LOGIN', 'login');
define('VAR_PASSWORD', 'password');

const MAPPING = [
    '' => 'php/index.php',
    '404' => 'php/404.php',
    'menu-simple' => 'php/menu_simple.php'
];

function getFileFromUrl(){
    $url = getVar('url');
    if(is_bool($url)){
        $url = '';
    }
    if(!array_key_exists($url, MAPPING)){
        $url = '404';
    }
    return MAPPING[$url];
}

function getVar($name) {
    return retrieveVar($name, $_GET);
}

function postVar($name) {
    return retrieveVar($name, $_POST);
}

function sessionVar($name) {
    return retrieveVar($name, $_SESSION);
}

function retrieveVar($name, $tab){
    if (isset($tab[$name])) {
        if (! empty($tab[$name])) {
            return $tab[$name];
        }
        return TRUE;
    }
    return FALSE;
}