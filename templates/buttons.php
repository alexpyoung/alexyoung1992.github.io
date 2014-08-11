<?php

require 'button.php';

class Button_Red extends Button {
    public function __construct($text) {
        $this->color = "red";
        $this->icon = "about";
        $this->text = $text;
    }
}

class Button_Green extends Button {
    public function __construct($text) {
        $this->color = "green";
        $this->icon = "portfolio";
        $this->text = $text;
    }
}

class Button_Blue extends Button {
    public function __construct($text) {
        $this->color = "blue";
        $this->icon = "resume";
        $this->text = $text;
    }
}

class Button_Yellow extends Button {
    public function __construct($text) {
        $this->color = "yellow";
        $this->icon = "blog";
        $this->text = $text;
    }
}

class Button_Orange extends Button {
    public function __construct($text) {
        $this->color = "orange";
        $this->icon = "contact";
        $this->text = $text;
    }
}

?>