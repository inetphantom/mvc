<?php

namespace App\Form;

class Form
{
    private $action;
    private $method;

    private $components = [];

    public function __construct($action = '#', $method = 'POST')
    {
        $this->action = $action;
        $this->method = $method;
    }

    public function render()
    {
        $output = "<form class=\"col-6\" action=\"$this->action\" method=\"$this->method\">";
        foreach ($this->components as $component) {
            $output .= $component->build();
        }
        $output .= '</form>';

        return $output;
    }

    public function __call($name, $args)
    {
        $builderName = ucfirst($name).'Builder';
        $className = 'App\\Form\\'.$builderName;
        $component = new $className();

        $this->components[] = $component;

        return $component;
    }
}
