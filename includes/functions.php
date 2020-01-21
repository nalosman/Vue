<?php
 require('connect.php');

 function getUser($conn) {
   $getUser = 'SELECT * FROM users';
   $runQuery = $conn->query($getUser);

   $result = array();

   while ($row = $runQuery->fetch(PDO::FETCH_ASSOC)) {
     //push each row data into array to make it easy to iterate
    $result[] = $row;
   }

   return $result;
 }