<?php

include 'DB.php';

$host = "localhost";
$user = "root";
$pass = "winfast1";

$databaseName = "win";
$tableName    = "SWITCH";


if (!empty($_GET[des])) {
    $led = $_GET[des];
}

if(!empty($_GET[read])){
    //--------------------------------------------------------------------------
    // 1) Connect to mysql database
    //--------------------------------------------------------------------------
    $con = mysql_connect($host, $user, $pass);
    $dbs = mysql_select_db($databaseName, $con);
    
    //--------------------------------------------------------------------------
    // 2) Query database for data
    //--------------------------------------------------------------------------
    $result = mysql_query("SELECT DESCRIPTION FROM $tableName where ID=$led"); //query
    $array  = mysql_fetch_row($result); //fetch result    
    
    //--------------------------------------------------------------------------
    // 3) echo result as json 
    //--------------------------------------------------------------------------
    //echo json_encode($array);
    echo $array[0];
    
    mysql_close($con);
    
    
}


if (!empty($_GET[update])) {

	    $name = $_GET['update'];

		//echo $name;
		//echo "<br>";

        $con = mysql_connect($host, $user, $pass);
        $dbs = mysql_select_db($databaseName, $con);
        
        $result = mysql_query("UPDATE SWITCH SET DESCRIPTION=$name WHERE ID=$led"); //query
		//echo $result;
    
        mysql_close($con);        
        
    
}

if (!empty($_GET[relay])) {

        //$ch =split($_GET[relay],",");
        $ch =explode(',', $_GET[relay]);

        $con = mysql_connect($host, $user, $pass);
        $dbs = mysql_select_db($databaseName, $con);
        

        $i=1;   


        foreach($ch as $a){

             $result = mysql_query("UPDATE SWITCH SET DESCRIPTION='$a' WHERE ID=$i"); //query
            $i++;

            if($i > 32) goto for_exit;

        }

for_exit:
          mysql_close($con);        
      
    
}

?>