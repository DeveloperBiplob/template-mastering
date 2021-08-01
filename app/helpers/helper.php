<?php
session_start();

if(!function_exists('greeting')){
    function greeting($name)
    {
        return 'Hellp ' . $name;
    }
}