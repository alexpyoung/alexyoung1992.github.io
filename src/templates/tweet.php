<?php

class Tweet {
    public function __construct($content, $time) {
        $this->content = $content;
        $this->time = $time;
    }

    public $content, $time;
}

?>