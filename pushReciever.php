<?php

$repo_dir = '/home/<username>/<repo-name>.git';
$web_root_dir = '/home/<username>/www';
$git_bin_path = 'git';
$update = false;
$payload = urldecode(file_get_contents('php://input'));
error_log(var_dump(json_decode($payload,true)));
if (empty($payload->commits)){
  $update = true;
} else {
  foreach ($payload->commits as $commit) {
    $branch = $commit->branch;
      }
}
?>
