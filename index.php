<?php require 'partials/_header.php'; ?>

<div class="container">
    <div class="hero col-xs-12 col-sm-10 col-sm-offset-1">
        <img src="img/imac-hero.jpg" alt="iMac Hero" />
    </div>    
</div>
<div class="container-fluid container-alt">
    <div class="container">
        <h2 class="center">Some of my recent projects and work</h2>
        <div class="item-list">
            <?php 
                require 'mustache/src/Mustache/Autoloader.php';
                require 'templates/items.php';
                Mustache_Autoloader::register();
    
                $num_items = 3;
                $mustache = new Mustache_Engine(array(
                    'loader' => new Mustache_Loader_FilesystemLoader(dirname(__FILE__).'/templates'),
                ));
                for($i = 0; $i < $num_items; $i++) {
                    echo $mustache->render('item', $projects[$i]);
                }
            ?>
        </div>
    </div>
</div>

<div class="container">
    <h2 class="center">And a few of my latest tweets</h2>
    <div class="tweet-list">
        <?php
            require 'templates/tweets.php';
            $num_tweets = 4;
            for($i = 0; $i < $num_tweets; $i++) {
                echo $mustache->render('tweet', $tweet);
            }
        ?>
    </div>
</div>
<div class="container-fluid container-alt">
    <?php
        require 'templates/buttons.php';
        $button = new Button_Red("About Me");
        echo $mustache->render('button', $button);
    ?>
</div>

<?php require 'partials/_footer.php'; ?>