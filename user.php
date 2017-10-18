<?php
include_once 'config.php';

$params = explode('/', $_SERVER['REQUEST_URI']);

$user_id = $params[2] - 45;
if ($user_id < 0) {
  $user_id = 0;
}
$tab = $params[3];

include_file('includes/user', [
  user_id => $user_id,
  tab => $tab,
]);
