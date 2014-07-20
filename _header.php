<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alex Young</title>

    <link href="css/vendor/bootstrap.css" rel="stylesheet" type="text/css">
    <!-- Update file name to PRODUCTION file -->
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Arvo" rel="stylesheet" type="text/css">
    <link href="css/vendor/chunkfive.css" rel="stylesheet" type="text/css">
    <?php
        require_once 'current_page.php';

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
        }
    ?>
</head>
<body>
    <nav>
        <div class="container">
            <div class="nav-header">
                    <div class="logo">
                        <a href="index.php"><img src="img/logo@2x.png" alt="Logo" /></a>
                    </div>
                    <button class="nav-toggle" data-toggle="collapse" data-target=".nav-collapse">
                    </button>
            </div>
            <div class="nav-collapse collapse">
                <?php require '_nav.php'; ?>
            </div>
        </div>
    </nav>