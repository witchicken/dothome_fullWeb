<?php 
  include("./useEnvfile.php");
  use DevCoder\DotEnv;
  (new DotEnv(__DIR__ . '/.env'))->load();
  
  //info
  $servername=getenv('SERVERNAME');
  $username =getenv('DB_USER');
  $password=getenv('DB_PASSWORD');
  //create connection
?>