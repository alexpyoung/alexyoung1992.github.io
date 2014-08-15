<?php

require 'item.php';

$clipmunk = new Item("portfolio/clipmunk.php", "img/clipmunk.png", "Clipmunk", "Clipmunk", "Web Design & Development");
$handsome = new Item("portfolio/caveman.php", "img/caveman.png", "Caveman Bowls", "Handsome Holdings, LLC", "Web Design & Ecommerce");
$psk = new Item("portfolio/psk.php", "img/psk.png", "Phi Sigma Kappa", "Phi Sigma Kappa", "Logo Design & Web Design");
$factory = new Item("portfolio/factory.php", "", "", "Factory Project", "GUI Development and Animation");
$game = new Item("portfolio/mario.php", "", "", "Side-scrolling Game", "Game Design & Development");
$restaurant = new Item("portfolio/restaurant.php", "", "", "Restaurant Project", "Agent-Based GUI Design");

$projects = array($clipmunk, $handsome, $psk, $factory, $game, $restaurant);

?>