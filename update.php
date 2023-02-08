<?php

error_reporting(-1);
ini_set('display_errors', 1);

require_once 'Git.php';
//Git::set_bin('sudo -u ubuntu -- /usr/bin/git');
$repo = Git::open(dirname(__FILE__) . DIRECTORY_SEPARATOR);

$result = [];
//ob_start();
//exec('/usr/bin/git pull origin gh-pages', $result);
//exec('sudo -u ubuntu -- git status', $result);
$result = $repo->run('tag');
// $result = $repo->run("log --date=format:'%Y-%m-%d' --pretty=format:\"%cd\"");
//$output = ob_get_contents();
//ob_clean();

// echo '<pre>' . $result . '</pre>';
var_dump(explode("\n",trim($result)));
