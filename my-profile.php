<?php
include_once 'config.php';

include_file('includes/user', [
  user_id => 4,
  tab => 'profile',
  is_my_profile => true,
]);
