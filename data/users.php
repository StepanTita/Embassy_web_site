<?php

$data = file_get_contents("../data/users.txt");
$data = explode(';', $data);
$users = array();
for($i = 0; $i < count($data) - 1; $i++)
{
	$temp = explode(':', $data[$i]);
	$users[trim($temp[0])] = ["pass" => trim($temp[1]), "name" => trim($temp[2])];
}
return $users;
?>