<?php

$dbname='members.db';
$mytable ="member";

if(!class_exists('SQLite3'))
   die("SQLite 3 NOT supported.");

$base=new SQLite3($dbname, 0666); 

$id = "1200012848";
$name = "张辰光";
$grade = "12";
$school = "信息科学技术学院";
$gender = 0;
$phone = "15101533022";
$mail = "zhangchenguang1994@gmail.com";
$favor = "移动应用开发 Web应用开发 桌面应用开发 服务端开发 UI设计 Web设计 程序测试 活动策划 宣传推广";
$work = 1;

echo "Inserting $title...\n\n";


$query = "INSERT INTO $mytable(ID, NAME, GRADE, SCHOOL, GENDER, PHONE, MAIL, FAVOR, WORK) 
                VALUES ('$id', '$name', '$grade', '$school', '$gender', '$phone', '$mail', '$favor', '$work')";
$results = $base->exec($query);

if(!$results)
  die("<i>$mytable</i> not updated.");

echo "Data entered into <i>$mytable</i> successfully.";


?>