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
  $content = file_get_contents('http://' . $_SERVER['SERVER_NAME'] . '/data/' . $name . '.json');
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


function render_qa_tags(){
  $categories = get_json('job-titles');
  $categories_str_list = array_map(function($category, $i){
    $titles_str_list = array_map(function($title, $j) use ($i) {
      return '<option value="' . $i . '-' . $j . '">' . join(' ', $title) . '</option>';
    }, $category->keywords, array_keys($category->keywords));
    return '<optgroup label="' . $category->category . '">' . join("\n", $titles_str_list) . '</optgroup>';
  }, $categories, array_keys($categories));
  return join("\n", $categories_str_list);
}

function get_user_by_index($index){
  return get_json('mentors')[$index];
}
