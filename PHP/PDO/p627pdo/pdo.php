<?php
$dsn = 'mysql:dbname=thinksite;host=127.0.0.1;charset=utf8';
$pdo = new PDO($dsn,'root','');
//$sth = $pdo->query('select * from students');
$sth = $pdo->prepare('select * from students');
$sth->execute();
var_dump($sth->fetchAll());
