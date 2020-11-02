<?php
   
   include "dbconnection.php";
   $username =  $_GET["username"]; 
  

  function display_children($parent,$level) {
    $count = 0;
    
    include "dbconnection.php";
    $result = $connection->query('SELECT *FROM users WHERE joined_by="'.$parent.'"');
    while ($row = $result->fetch_assoc())
    {
        // $var = str_repeat(' ',$level).$row['username']."\n";
           $username = $row['username'];
           $leg_side = $row['leg'];
           echo "username : ".$username." level: ".$level." leg : ".$leg_side." <hr>"; 
           $count += 1 + display_children($row['username'], $level+1);
    }

    return $count; // it will return all user_id count under parent_id
} 



echo " <hr> total childs -  ".display_children($username,1); 

?>