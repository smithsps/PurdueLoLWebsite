<?
ini_set('display_errors','On');
error_reporting(E_ALL);

$file = fopen("faults.txt", "r+");

while (!flock($file, LOCK_EX)){
    usleep(100);
}

$faults = fscanf($file, "%d")[0];

$faults = intval($faults) + 1;

ftruncate($file, 0);
rewind($file);

fprintf($file, "%d", $faults);

flock($file, LOCK_UN);

fclose($file);

echo $faults;
?>