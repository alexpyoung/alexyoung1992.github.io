<?php 

require_once '../config.php';
require_once PARTIALS_PATH.'/_header.php'; 

?>

<div class="container">
    <h1>About Me</h1>
    <div class="blurbs col-xs-12 col-sm-6 col-md-6">
        <p class="tagline">
            I’m a web developer based in Laguna Beach, CA with a passion for design and usability.
        </p>
        <p class="bio">
            I currently freelance as a full-stack web developer, taking clients from branding and designing their website to deploying a complete, interactive product. I recently graduated from the University of Southern California and am currently looking for work in design and front-end engineering! 
        </p>
    </div>
    <div class="avatar col-xs-12 col-sm-6 col-md-6">
        <img src="img/avatar.jpg" alt="Profile Picture Avatar" />
    </div>
</div>
<div class="container-fluid container-alt">
    <h2 class="center">A few things I'm experienced with</h2>
    <ul class="skill-list">
        <li class="skill-html"></li>
        <li class="skill-css"></li>
        <li class="skill-javascript"></li>
        <li class="skill-bootstrap"></li>
        <li class="skill-jquery"></li>
        <li class="skill-angularjs"></li>
        <li class="skill-rails"></li>
        <li class="skill-sass"></li>
        <li class="skill-ruby"></li>
        <li class="skill-java"></li>
    </ul>
</div>
<div class="container">
    <h2 class="center">And some fun facts about me</h2>
    <div class="fact-hero col-xs-12 col-sm-8">
        <img src="img/macbook@2x.jpg" alt="Macbook" />
    </div>
    <ul class="fact-list col-xs-12 col-sm-6 col-sm-offset-6">
        <li>My favorite cuisine to cook is Italian</li>
        <li>I run long distances here and there</li>
        <li>My topic of choice is the intersection of tech and culture</li>
        <li>I’m a fan of all things Apple</li>
        <li>My next travel destination is Japan or Australia</li>
        <li>I swear I airbended once</li>
        <li>My text editor is Sublime Text</li>
        <li>I love a competitive game of Mario Kart N64</li>    
    </ul>
</div>
<div class="container-fluid container-alt">
    <?php
        Mustache_Autoloader::register();
        $mustache = new Mustache_Engine(array(
            'loader' => new Mustache_Loader_FilesystemLoader(dirname(__FILE__).'/templates'),
        ));
        $button = new Button_Green("portfolio.php", "My work");
        echo $mustache->render('button', $button);
    ?>
</div>

<?php require PARTIALS_PATH.'/_footer.php'; ?> 