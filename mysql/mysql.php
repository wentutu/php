<?php
try {
	$user='root';
	$pass='1234';
    $dbh = new PDO('mysql:host=localhost;dbname=test', $user, $pass);
  

$stmt = $dbh->prepare("INSERT INTO t2 (id) VALUES ('abc')");
$stmt->execute();
var_dump($stmt);

   
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>