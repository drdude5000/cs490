<?php
/*
gettaskinfo.php
Get information for ONE task
Created By: Oscar Rodriguez
*/

$backURL = "http://afsaccess2.njit.edu/~em244/CS490/getQuestionRow.php";
$ch = curl_init($backURL);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $_POST);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

?>