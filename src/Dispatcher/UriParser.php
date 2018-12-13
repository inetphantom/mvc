<?php

class UriParser
{
    /**
     * Diese Methode wertet die Request URI aus und gibt den Namen des Controllers aus.
     * Ohne den "Contoller"-Zusatz.
     */
    public static function getControllerName()
    {
        $uri = $_SERVER['REQUEST_URI'];

        // http://my-project.local/default/index    ->      "default"
        // http://my-project.local/user/create      ->      "user"
        // http://my-project.local                  ->      "default"

        return 'Default';
    }

    /**
     * Diese Methode wertet die Request URI aus und gibt den Namen der Methode aus welche
     * auf dem Controller aufgerufen werden soll.
     */
    public static function getMethodName()
    {
        $uri = $_SERVER['REQUEST_URI'];

        // http://my-project.local/default/index    ->      "index"
        // http://my-project.local/user/create      ->      "create"
        // http://my-project.local                  ->      "index"

        return 'index';
    }
}
