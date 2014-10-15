<?php

$id = $_POST['id'];
$name = $_POST['name'];

$dbname='player.db';
$mytable ="player";

if(!class_exists('SQLite3'))
   die("SQLite 3 NOT supported.");

$base=new SQLite3($dbname, 0666);

$query = "INSERT INTO $mytable(ID, NAME)
                VALUES ('$id', '$name')";
$results = $base->exec($query);

// echo $id;
// echo $name;
// echo $grade;
// echo $school;
// echo $gender;
// echo $phone;
// echo $mail;
// echo $favor;
// echo $work;

// $value = $_POST['favor'];
// echo "<br>";
// echo implode(',',$value);
// echo $gender == '男';

?>

<!DOCTYPE html>
<html lang="zh_cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="CADA Registering">
    <meta name="author" content="Z4Tech">

    <title>CADA报名</title>

    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/cover.css" rel="stylesheet">
  </head>

  <body>

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
          </div>

          <div class="inner cover">
            <h1 class="cover-heading">OK</h1>
          </div>

          <div class="mastfoot">
            <div class="inner">
              <p>Created by Z4Tech, 2014</p>
            </div>
          </div>

        </div>

      </div>

    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/docs.min.js"></script>
  </body>
</html>

<?php
	 header("refresh:3;url=./index.php");
?>
