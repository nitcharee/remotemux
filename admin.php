 <?php
session_start();

//Check login
if($_SESSION['ses_id'] == ''){
  	echo "<meta http-equiv='refresh' content='1;URL=index.php'>";
} else if ($_SESSION['status'] !=1){
  	echo "<meta http-equiv='refresh' content='1;URL=logout.php'>";
} else {

}
?>

<h1> Admin Page </h1>
<a href="logout.php" class="btn=primary ">logout</a>
>?php
}
?>