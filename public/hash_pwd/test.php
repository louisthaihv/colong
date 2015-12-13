<?php 
$command = '/usr/bin/wine /var/www/zgame/public/hash_pwd/qglpasswd.exe user 123';
$output = shell_exec($command);
var_dump($output);
?>
