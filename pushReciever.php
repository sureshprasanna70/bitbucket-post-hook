<?php

$repo_dir = '/home/<username>/<repo-name>.git';
$web_root_dir = '/home/<username>/www';
$git_bin_path = 'git';
$update = false;
$payload = urldecode(file_get_contents('php://input'));
$tobedecoded=substr($payload,8,strlen($payload));
$decoded=json_decode($tobedecoded);

?>
