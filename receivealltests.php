<?php

$backURL = "http://afsaccess3.njit.edu/~em244/CS490/getAllTests.php";
$ch = curl_init($backURL);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
curl_close($ch);
echo $result;


?>