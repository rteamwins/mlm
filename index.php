<!DOCTYPE html>
<html>
<head>
	<title> title </title>
</head>
<body>
<?php 
  include "dbconnection.php";
?>
  <h1> Add user </h1>
  <hr />


 <?php 
    if( $_SERVER["REQUEST_METHOD"]  == "POST"){

       $username = addslashes(htmlspecialchars($_POST["username"]));
       $joined_by = addslashes(htmlspecialchars($_POST["joined_by"]));
       $leg = addslashes(htmlspecialchars($_POST["leg"]));
 
     // user cannot join itself 
        if( $username == $joined_by ){
           ?>
            <b>user cannot join itself </b>
           <?php 
        }
        else{

        	 //usename should be unique 
        	 $sql6 = "SELECT *FROM users WHERE username = '$username'";
            $rows6 = $connection->query($sql6);
            $tr6 = $rows6->num_rows;
            if( $tr6 == 0 ){
                // save user
                  $sql7="INSERT INTO users(username,joined_by,leg)VALUES('$username','$joined_by','$leg')";
                 if( $connection->query($sql7) == true  ){
                       echo "user ".$username." added!" ;
                 }
                 else{
                 	  echo $connection->error;
                 }
            }else{
            	echo "user ".$username." already registered!";
            }
        }


    } 
 ?>


    <form method="post" action="">
    	<b>username</b>
    	<input type="text" name="username">
    	
    	<br>
    	<b>joined by</b>
    	<select name="joined_by">
    	 <?php 
    	    $sql = "SELECT *FROM users";
    	    $rows = $connection->query($sql);
    	    while ( $res = $rows->fetch_assoc() ) {
    	        ?>
    	         <option value="<?php echo $res["username"]; ?>"><?php echo $res["username"]; ?></option>
    	        <?php 
    	    }
    	 ?>
    	</select>


    	<br>
    	<b> leg </b>
    	<select name="leg">
    		<option value="l">l</option>
    		<option value="r">r</option>
    	</select>

    <input type="submit" name="">

    </form>



<hr>
  Check all  child 
<form method="get" action="view-tree.php" target="new">
    	
    	<br>
    	<b>username</b>
    	<select name="username">
    	 <?php 
    	    $sql = "SELECT *FROM users";
    	    $rows = $connection->query($sql);
    	    while ( $res = $rows->fetch_assoc() ) {
    	        ?>
    	         <option value="<?php echo $res["username"]; ?>"><?php echo $res["username"]; ?></option>
    	        <?php 
    	    }
    	 ?>
    	</select>
    	<input type="submit" value="check" name="">
    </form>










<hr>
  Check all  left leg child 
<form method="get" action="view-all-left-tree.php" target="new">
      
      <br>
      <b>username</b>
      <select name="username">
       <?php 
          $sql = "SELECT *FROM users";
          $rows = $connection->query($sql);
          while ( $res = $rows->fetch_assoc() ) {
              ?>
               <option value="<?php echo $res["username"]; ?>"><?php echo $res["username"]; ?></option>
              <?php 
          }
       ?>
      </select>
      <input type="submit" value="check" name="">
    </form>







<hr>
  Check all  rigth leg child 
<form method="get" action="view-all-right-tree.php" target="new">
      
      <br>
      <b>username</b>
      <select name="username">
       <?php 
          $sql = "SELECT *FROM users";
          $rows = $connection->query($sql);
          while ( $res = $rows->fetch_assoc() ) {
              ?>
               <option value="<?php echo $res["username"]; ?>"><?php echo $res["username"]; ?></option>
              <?php 
          }
       ?>
      </select>
      <input type="submit" value="check" name="">
    </form>









</body>
</html>