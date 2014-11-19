<?php

$repo_dir = '/home/<username>/<repo-name>.git';
$web_root_dir = '/home/<username>/www';
$git_bin_path = 'git';
$update = false;
$payload = file_get_contents('php://input');
if (empty($payload->commits)){
  $update = true;
} else {
  foreach ($payload->commits as $commit) {
    $branch = $commit->branch;
      }
}
?>
