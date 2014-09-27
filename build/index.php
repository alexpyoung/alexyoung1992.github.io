<?php 

require_once '../config.php';
require_once PARTIALS_PATH.'/_header.php'; 

// ini_set('display_errors', 1);
// require_once UTILS_PATH.'/TwitterAPIExchange.php';

// /** Set access tokens here - see: https://dev.twitter.com/apps/ **/
// $settings = array(
//     'oauth_access_token' => "",
//     'oauth_access_token_secret' => "",
//     'consumer_key' => "",
//     'consumer_secret' => ""
// );

// /** URL for REST request, see: https://dev.twitter.com/docs/api/1.1/ **/
// $url = 'https://api.twitter.com/1.1/blocks/create.json';
// $requestMethod = 'POST';

// /** POST fields required by the URL above. See relevant docs as above **/
// $postfields = array(
//     'screen_name' => 'usernameToBlock', 
//     'skip_status' => '1'
// );

// /** Perform a POST request and echo the response **/
// $twitter = new TwitterAPIExchange($settings);
// echo $twitter->buildOauth($url, $requestMethod)
//              ->setPostfields($postfields)
//              ->performRequest();

// /** Perform a GET request and echo the response **/
// /** Note: Set the GET field BEFORE calling buildOauth(); **/
// $url = 'https://api.twitter.com/1.1/followers/ids.json';
// $getfield = '?screen_name=J7mbo';
// $requestMethod = 'GET';
// $twitter = new TwitterAPIExchange($settings);
// echo $twitter->setGetfield($getfield)
//              ->buildOauth($url, $requestMethod)
//              ->performRequest();

?>

<div class="container">
    <div class="hero col-xs-12 col-sm-10 col-sm-offset-1">
        <img src="img/imac-hero.jpg" alt="iMac Hero" />
    </div>    
</div>
<div class="container-fluid container-alt">
        <h2 class="center">Some of my recent projects and work</h2>
        <div class="item-list">
            <?php 
                require TEMPLATES_PATH.'/items.php';
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

<div class="container">
    <h2 class="center">And a few of my latest tweets</h2>
    <div class="tweet-list">
        <?php
            require TEMPLATES_PATH.'/tweets.php';
            $num_tweets = 4;
            for($i = 0; $i < $num_tweets; $i++) {
                echo $mustache->render('tweet', $tweet);
            }
        ?>
    </div>
</div>
<div class="container-fluid container-alt">
    <?php
        $button = new Button_Red("about.php", "About Me");
        echo $mustache->render('button', $button);
    ?>
</div>

<?php require PARTIALS_PATH.'/_footer.php'; ?>