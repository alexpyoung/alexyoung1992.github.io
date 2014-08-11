<?php

class Button {
    public function __construct($color, $icon, $text) {
        $this->color = $color;
        $this->icon = $icon;
        $this->text = $text;
    }

    public $color, $icon, $text;
}

?>