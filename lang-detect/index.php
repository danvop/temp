<?php
    $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    var_dump($lang);
    $acceptLang = ['fr', 'it', 'en', 'ru']; 
    $lang = in_array($lang, $acceptLang) ? $lang : 'en';
    require_once "index_{$lang}.php"; 

?>