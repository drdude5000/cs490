<?php

$backURL = "https://web.njit.edu/~em244/CS490/getAllStudents.php";
$ch = curl_init($backURL);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//$result = json_decode(curl_exec($ch), 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

?>