<?php 
$command = '/var/www/zgame/public/hash_pwd/qglpasswd.exe user 123';
exec( $command, $output, $return);
var_dump($output);
?>
