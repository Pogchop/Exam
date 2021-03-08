<?php
require_once 'login.php';
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);

$query = "insert into exam.student values ('1111', 'HIEU PHAN', 19, '1234 POGGER st', '123478596')";
$result = $conn->query($query);
if ($result) die("Database access failed " . $conn->error);

echo "The insert id was " . $conn->insert_id;