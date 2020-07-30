<?php

$connection = mysqli_connect(
  'localhost', 'root', 'password', 'tasks_database'
);

// for testing connection
if($connection) {
  echo 'database is connected';
}

?>