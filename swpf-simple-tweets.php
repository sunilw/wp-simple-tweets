<?php
/**
 * Plugin Name: Simple Tweets
 * Plugin URI: sunil@sunil.co.nz
 * Description: Creates a Custom Post Type with embedded youtube videos
 * Version: 0.1
 * Author: Sunil Williams
 * Author URI: http://sunil.co.nz
 *
 * License:  GPLv2
 */

// Load Twitter class
require_once('twitteroauth/twitteroauth/twitteroauth.php') ;

//  Define constants
require_once('simple-tweets-conf.php') ;

// Create the connection
$twitter = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, ACCESS_TOKEN, ACCESS_TOKEN_SECRET) ;

// Load the Tweets
$tweets = $twitter->get('statuses/user_timeline', array('screen_name' => TWITTER_USERNAME, 'exclude_replies' => 'true', 'include_rts' => 'false', 'count' => TWEET_LIMIT));



if(!empty($tweets)) {
  foreach($tweets as $tweet) {


    $tweetText = $tweet->text ;

    // Make links active
    $tweetText = preg_replace("/(http:\/\/|(www\.))(([^\s<]{4,68})[^\s<]*)/", '<a href="http:%2f%2f$2$3" target="_blank">$1$2$4</a>', $tweetText) ;

    $foo = "foo" ;

    //  Linkify user mentions
    


    //  Linkify tags


    //  Output
    echo $tweetText;

  }
}




function produce_tweets(){

  echo $tweets ;
}
add_shortcode( 'publish_tweets', 'produce_tweets' );
