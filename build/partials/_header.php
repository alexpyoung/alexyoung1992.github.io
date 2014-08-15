<?php

require_once UTILS_PATH.'/current_page.php';
require_once MUSTACHE_PATH.'/src/Mustache/Autoloader.php';
require_once TEMPLATES_PATH.'/buttons.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alex Young</title>

    <link href="css/vendor/bootstrap.css" rel="stylesheet" type="text/css">
    <!-- Update file name to PRODUCTION file -->
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,300italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Arvo" rel="stylesheet" type="text/css">
    <link href="css/vendor/chunkfive.css" rel="stylesheet" type="text/css">
    <?php
        switch(get_current_page_name()) {
            case 'index.php': {
                echo '<link href="css/pages/home.css" rel="stylesheet" type="text/css">';
                break;
            }
            case 'about.php': {
                echo '<link href="css/pages/about.css" rel="stylesheet" type="text/css">';
                break;
            }
            case 'portfolio.php': {
                echo '<link href="css/pages/portfolio.css" rel="stylesheet" type="text/css">';
                break;
            }
            case 'resume.php': {
                echo '<link href="css/pages/resume.css" rel="stylesheet" type="text/css">';
                break;
            }
            case 'blog.php': {
                echo '<link href="css/pages/blog.css" rel="stylesheet" type="text/css">';
                break;
            }
            case 'contact.php': {
                echo '<link href="css/pages/contact.css" rel="stylesheet" type="text/css">';
                break;
            }
        }
    ?>
</head>
<body>
    <div class="construction-banner">Currently under construction</div>
    <nav
    <?php
        switch(get_current_page_name()) {
            case 'about.php': {
                echo ' class="about-navbar" ';
                break;
            }
            case 'portfolio.php': {
                echo ' class="portfolio-navbar" ';
                break;
            }
            case 'resume.php': {
                echo ' class="resume-navbar" ';
                break;
            }
            case 'blog.php': {
                echo ' class="blog-navbar" ';
                break;
            }
            case 'contact.php': {
                echo ' class="contact-navbar" ';
                break;
            }
        }
    ?>
    >
        <div class="container">
            <div class="nav-header">
                    <div class="logo">
                        <a href="index.php"></a>
                    </div>
                    <button class="nav-toggle" data-toggle="collapse" data-target=".nav-collapse">
                    </button>
            </div>
            <div class="nav-collapse collapse">
                <?php require PARTIALS_PATH.'/_nav.php'; ?>
            </div>
        </div>
    </nav>