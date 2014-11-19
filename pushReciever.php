<?php

$repo_dir = '/home/<username>/<repo-name>.git';
$web_root_dir = '/home/<username>/www';
$git_bin_path = 'git';
$update = false;
$payload = urldecode(file_get_contents('php://input'));
$tobedecoded=substr($payload,8,strlen($payload));
error_log(var_dump(json_decode($tobedecoded,1)));
if (empty($payload->commits)){
  $update = true;
} else {
  foreach ($payload->commits as $commit) {
    $branch = $commit->branch;
      }
}
?>
