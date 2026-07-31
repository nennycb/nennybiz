<?php

class View
{
    public static function render($view)
    {
        require __DIR__ . '/../Views/' . $view . '.php';
    }
}