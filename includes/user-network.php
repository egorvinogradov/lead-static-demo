<?php
include_once '../config.php';

$current_user = $include_data['user'];
$user_ids = $include_data['tab'] === 'mentors' ? $current_user->mentors : $current_user->mentees;
$users = get_users_by_ids($user_ids);
?>

<div class="b-user-network-0">
  <?php
    include_file('includes/user-list', [
      users => $users,
      container_class_name => 'col-sm-12 b-user-network-1',
      is_user_profile => true,
    ]);
  ?>
</div>
