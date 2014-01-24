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


 
function produce_tweets(){
  echo "got here" ;  
} 
add_shortcode( 'publish_tweets', 'produce_tweets' );


function my_test(){
  $mystr =  "<h2>>got here</h2>" ;  
  return $mystr ;
} 
add_shortcode( 'publish_test', 'my_test' );
