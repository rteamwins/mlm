<?php
   
   include "dbconnection.php";
   $username =  $_GET["username"]; 
  
  $main_user_name  = $username; 


  function display_children($parent,$level) {
    $count = 0;
    include "dbconnection.php";


  
      $main_user_name =  $GLOBALS['main_user_name'];
      if( $main_user_name ==  $parent ){
         $result = $connection->query('SELECT *FROM users WHERE joined_by="'.$parent.'" && leg =  "l" ');
      }
      else{
        $result = $connection->query('SELECT *FROM users WHERE joined_by="'.$parent.'" ');
      }


    

    while ($row = $result->fetch_assoc())
    {
        // $var = str_repeat(' ',$level).$row['username']."\n";
           $username = $row['username'];
           echo "username : ".$username." level: ".$level."<br>"; 
           $count += 1 + display_children($row['username'], $level+1);
    }
    return $count; // it will return all user_id count under parent_id
} 



echo " <hr> total left leg childs -  ".display_children($username,1); 

?>