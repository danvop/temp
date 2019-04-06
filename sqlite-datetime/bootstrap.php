<?php




// helper functions

function view($view, $data = [])
{
    extract($data);
    return require "views/{$view}.view.php";
}
