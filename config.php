<?php

/**
 * GLOBAL CONSTANTS
 */

global $CONFIG;

$CONFIG = array(

);

header_remove('X-Powered-By');


$CONFIG['current_user'] = get_users('self')[0];


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


function get_users($relationship = null){
  $users = get_json('users');
  $users = array_map(function($user, $index){
    $user->index = $index + 45;
    return $user;
  }, $users, array_keys($users));
  if ($relationship) {
    return array_filter($users, function($user) use ($relationship){
      return $user->relationship === $relationship;
    });
  }
  else {
    return $users;
  }
};


function output_reply_images($ids, $suffix){
  $users = get_users(null);
  $imgs = array_map(function($id) use ($users){
    $url = $users[$id]->picture_url;
    return '<img class="img-responsive img-circle" src="' . $url . '">';
  }, $ids);
  $count_str = $suffix ? '<div class="opinion-count gray">' . $suffix . '</div>' : '';
  return '<div class="opinion-images">' . join('', $imgs) . '</div>' . $count_str;
}


function render_questions_topics(){
  $categories = get_json('questions-topics');
  $categories_str_list = array_map(function($category, $i){
    $titles_str_list = array_map(function($title, $j) use ($i) {
      return '<option value="' . $i . '-' . $j . '">' . join(' ', $title) . '</option>';
    }, $category->keywords, array_keys($category->keywords));
    return '<optgroup label="' . $category->category . '">' . join("\n", $titles_str_list) . '</optgroup>';
  }, $categories, array_keys($categories));
  return join("\n", $categories_str_list);
}

function get_user_by_index($index){
  return get_users()[$index];
}
