<?php
include 'connection.php';


$sth = mysqli_query($conn,"SELECT * FROM player");
$rows = array();
while($r = mysqli_fetch_assoc($sth)) {
    $rows[] = $r;
}
print json_encode($rows,JSON_PRETTY_PRINT);

$fp = fopen('results.json', 'w');
fwrite($fp, json_encode($rows,JSON_PRETTY_PRINT));
fclose($fp);






?>