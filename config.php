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
  $content = file_get_contents('http://lead-static-demo.herokuapp.com/data/' . $name . '.json');
  return json_decode($content);
}


function output_opinion_images($ids, $suffix, $prefix = null){
  $users = get_json('mentors');
  $imgs = array_map(function($id) use ($users){
    $url = $users[$id]->picture_url;
    return '<img class="img-responsive img-circle" alt="image" src="' . $url . '">';
  }, $ids);
  $count_str = $suffix ? '<div class="opinion-count gray">' . $prefix . ' ' .  count($ids) . ' ' . $suffix . '</div>' : '';
  return '<div class="opinion-images">' . join('', $imgs) . '</div>' . $count_str;
}
