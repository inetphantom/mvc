<?php

namespace App\Form;

class TextBuilder extends AbstractBuilder
{
    public function __construct()
    {
        $this->addProperty('label');
        $this->addProperty('name');
        $this->addProperty('value', null);
    }

    public function build()
    {
        $result = '<div class="form-group">';
        $result .= "  <label class=\"control-label\" for=\"{$this->name}\">{$this->label}</label>";
        $result .= "  <input id=\"{$this->name}\" name=\"{$this->name}\" type=\"text\" value=\"{$this->value}\" class=\"form-control\">";
        $result .= '</div>';

        return $result;
    }
}
