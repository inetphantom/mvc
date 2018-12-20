<?php

namespace App\Form;

class SubmitBuilder extends AbstractBuilder
{
    public function __construct()
    {
        $this->addProperty('label');
        $this->addProperty('name', 'submit');
    }

    public function build()
    {
        $result = "<button type=\"submit\" name=\"{$this->name}\" class=\"btn btn-primary\">{$this->label}</button>";

        return $result;
    }
}
