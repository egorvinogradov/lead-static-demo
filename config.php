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


function output_reply_images($ids, $suffix = '', $zero_count_placeholder = ''){
  $user_list_length = 5;
  $user_list_ids = array_slice($ids, 0, $user_list_length);
  $counter = count($ids) - $user_list_length;
  if ($counter <= 0) {
    $counter = 0;
  }
  $imgs = array_map(function($user){
    $url = $user->picture_url;
    return '<img class="img-responsive img-circle" src="' . $url . '">';
  }, get_users_by_ids($user_list_ids));
  if (is_array($suffix)) {
    $suffix_str = $counter === 1 ? $suffix[0] : $suffix[1];
  }
  else {
    $suffix_str = $suffix;
  }
  $counter_str = $counter ? '<div class="opinion-count gray">and ' . $counter . ' more ' . $suffix_str . '</div>' : '';
  if ($zero_count_placeholder && !$counter) {
    $counter_str = '<div class="opinion-count gray">' . $zero_count_placeholder . '</div>';
  }
  return '<div class="opinion-images">' . join('', $imgs) . '</div>' . $counter_str;
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

function get_users_by_ids($ids){
  $all_users = get_users(null);
  if (is_array($ids)) {
    return array_map(function($id) use ($all_users){
      return $all_users[$id];
    }, $ids);
  }
  else {
    return $all_users[$ids];
  }
}
