<?php
session_start();
include=("connect.php");

/*

*1= Admin
*2= User
*/
//variable
$email=$_POST['email'];
$password=$_POST['passwod']

if($email == ''){
   echo "Check Email";
} else if ($password == ''){
   echo "Check Password";
}else {
   //query from database
   $sql = mysql_query("SELECT * FROM User
                       WHERE email = '$email'
                       AND password = '$password' ");
    // count result data
	%num = mysql_num_rows($sql);
	if($num <= 0 ){
      echo "<meta http-equiv='refresh' content='1;URL=index.php' >"
    } else {
     	while ($user= mysql_fetch_array($sql)) {
         
        //Admin case
         if($user['status']==1)
         {
            $_SESSION['ses_id'] = session_id();
            $_SESSION['email'] = $user['email'];
         	$_SESSION['status'] = 1;
          // send to admin page
         echo "<meta http-equiv='refresh' content='1;URL=admin.php'> ";
         }else if ($user['status']==2){
          // User case
         	$_SESSION['ses_id'] = session_id();
            $_SESSION['email'] = $user['email'];
         	$_SESSION['status'] = 2;
         // send to user page
         echo "<meta http-equiv='refresh' content='1;URL=user.php'> ";
        } //end while
    } // end else

}
?>