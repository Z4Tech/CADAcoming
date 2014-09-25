<?php

$myid = $_GET['id'];

$dbname='members.db';
$mytable ="member";

if(!class_exists('SQLite3'))
   die("SQLite 3 NOT supported.");

$base=new SQLite3($dbname, 0666); 


$query = "SELECT ID, NAME, GRADE, SCHOOL, GENDER, PHONE, MAIL, FAVOR, WORK 
          FROM $mytable WHERE (id=$myid)";
$results = $base->query($query);
$row = $results->fetchArray();

// $query = "CREATE TABLE $mytable(
//             ID bigint(20) NOT NULL PRIMARY KEY,
//             NAME text NOT NULL,
//             GRADE text NOT NULL,         
//             SCHOOL text NOT NULL,
//             GENDER integer NOT NULL,
//             PHONE text NOT NULL,
//             MAIL text,
//             FAVOR text,
//             WORK integer NOT NULL      
//             )";

$id = $row['ID'];
$name = $row['NAME'];
$grade = $row['GRADE'];
$school = $row['SCHOOL'];
$gender = $row['GENDER'];
$phone = $row['PHONE'];
$mail = $row['MAIL'];
$favor = $row['FAVOR'];
$work = $row['WORK'];

?>