<?php

/**
 * GLOBAL CONSTANTS
 */

global $CONFIG;

$CONFIG = array(

);

header_remove('X-Powered-By');


/**
 * FUNCTIONS
 */

/**
 * @param string $key
 * @return mixed
 */
function get_global_var($key) {
  global $CONFIG;
  return $CONFIG[$key];
}

/**
 * @param string $name
 * @param bool $include_data
 */
function include_file($name, $include_data = false){
  include_once dirname(__FILE__) . '/' . $name . '.php';
}


function get_json($name){
  $content = file_get_contents('http://localhost/data/' . $name . '.json');
  return json_decode($content);
}
