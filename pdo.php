<?php
try {
	$db = new PDO('mysql:host=localhost;dbname=id21190905_nagrade2023', 'id21190905_admin_nagrade', 'fsjkM432!Lk');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
$db->query("set names utf8");

?>