<?php
$dbname='player.db';
$mytable ="player";

if(!class_exists('SQLite3'))
   die("SQLite 3 NOT supported.");

$base=new SQLite3($dbname, 0666);

$query = "CREATE TABLE $mytable(
            ID bigint(20) NOT NULL PRIMARY KEY,
            NAME text NOT NULL
            )";

$results = $base->exec($query);

if (!$results)
    exit ("Table not created<br>");

echo "Table '$mytable' created.";

?>
