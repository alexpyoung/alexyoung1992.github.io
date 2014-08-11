<?php

class Item {
    public function __construct($link, $img_src, $alt, $project_title, $project_role) {
        $this->link = $link;
        $this->img_src = $img_src;
        $this->alt = $alt;
        $this->project_title = $project_title;
        $this->project_role = $project_role;
    }

    public $link, $img_src, $alt, $project_title, $project_role;
}

?>