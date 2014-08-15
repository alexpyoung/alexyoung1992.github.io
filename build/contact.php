<?php 

require_once '../config.php';
require_once PARTIALS_PATH.'/_header.php'; 

?>

<div class="container">
    <h1>Contact Me</h1>
    <ul class="contact-list col-xs-12 col-sm-5">
        <li class="contact-linkedin">
            <a class="contact-plug" href="https://www.linkedin.com/pub/alex-young/45/318/1b9/" target="_blank">
                <div class="contact-logo"></div>
                <span class="contact-text">Connect with me on LinkedIn</span>
            </a>
        </li>
        <li class="contact-github">
            <a class="contact-plug" href="https://github.com/alexyoung1992" target="_blank">
                <div class="contact-logo"></div>
                <span class="contact-text">View my work on Github</span>
            </a>
        </li>
        <li class="contact-google">
            <a class="contact-plug" href="https://google.com/+AlexYoung1992" target="_blank">
                <div class="contact-logo"></div>
                <span class="contact-text">Hangout with me on Google+</span>
            </a>
        </li>
        <li class="contact-twitter">
            <a class="contact-plug" href="https://twitter.com/alexpyoung" target="_blank">
                <div class="contact-logo"></div>
                <span class="contact-text">Follow me on Twitter</span>
            </a>
        </li>
    </ul>
    <div class="contact-img col-xs-12 col-sm-7">
        <img src="img/globe.png" alt="Globe" />
    </div>
</div>
<div class="container-fluid container-alt">
<div class="container">
    <h2>Let's get in touch</h2>
    <form class="contact-form col-xs-12 col-sm-6">
        <div class="contact-input">
            <label class="contact-label" for="input-name">Who are you?</label>
            <input class="input" type="text" name="input-name" placeholder="John Doe" />
        </div>
        <div class="contact-input">
            <label class="contact-label" for="input-email">How can I reach you?</label>
            <input class="input" type="text" name="input-email" placeholder="johndoe@example.com" />
        </div>
        <div class="contact-input">
            <label class="contact-label" for="input-message">What would you like to talk about?</label>
            <textarea class="input" name="input-message" placeholder="Hi Alex, I'd like to get in touch..."></textarea>
        </div>
        <?php
            Mustache_Autoloader::register();
            $mustache = new Mustache_Engine(array(
                'loader' => new Mustache_Loader_FilesystemLoader(dirname(__FILE__).'/templates'),
            ));
            $button = new Button_Orange("form_placeholder", "Message Me");
            echo $mustache->render('button', $button);
        ?>
    </form>
    <div class="contact-cards">
        <div class="contact-card-front col-xs-12 col-sm-5 col-sm-offset-1"><img src="img/contact-card-front.png" alt="Alex Young" /></div>
        <div class="contact-card-back col-xs-12 col-sm-5 col-sm-offset-1"><img src="img/contact-card-back.png" alt="alexphillipyoung@gmail.com" /></div>
    </div>
</div>
</div>

<?php require PARTIALS_PATH.'/_footer.php'; ?>