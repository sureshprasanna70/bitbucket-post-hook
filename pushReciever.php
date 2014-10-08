<?php
$repo_dir = '/home/<username>/<repo-name>.git';
$web_root_dir = '/home/<username>/www';
$git_bin_path = 'git';
$update = false;
$payload = json_decode($_POST['payload']);
if (empty($payload->commits)){
  $update = true;
} else {
  foreach ($payload->commits as $commit) {
    $branch = $commit->branch;
      }
}
?>
