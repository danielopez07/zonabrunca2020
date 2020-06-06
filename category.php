<?php
$uri = $_SERVER['REQUEST_URI'];
$uri = array_filter(explode("/", $uri));
$category = $uri[1] == 'category' ? $uri[2] : $uri[3];

if ( $uri[1] == 'category' ) {
  $category = $uri[2];
  $lang = '';
} else {
  $category = $uri[3] . '-2';
  $category = str_replace( "en-", "", $category );
  $lang = $uri[1] . '/';
}

$url = '/' . $lang . 'zona/' . $category . '/';

wp_redirect( $url ); // for example
exit;

/* 
http://zonabrunca.local/category/coto-brus/
http://zonabrunca.local/en/category/en-coto-brus/

http://zonabrunca.local/zona/coto-brus/
http://zonabrunca.local/en/zona/coto-brus-2/
*/