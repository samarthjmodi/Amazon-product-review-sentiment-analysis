<?php
$command = escapeshellcmd("python /var/www/html/software2/algoscript.py");
$output = shell_exec($command);
echo $output;
header('Location: Project/barchart/index.php');
?>
