<?php

class Button {
    public function __construct($link, $color, $icon, $text) {
        $this->link = $link;
        $this->color = $color;
        $this->icon = $icon;
        $this->text = $text;
    }

    public $link, $color, $icon, $text;
}

?>