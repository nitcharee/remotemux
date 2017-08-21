<?php 


if (!empty($_GET[led])) {
	$LED = $_GET[led];
}
else{
	$LED = 0;
}

if (!empty($_GET[adc])) {
	$ADC = $_GET[adc];
}
else{
	$ADC = 0;
}



if (!empty($_GET[ch])) {
	$ch = $_GET[ch];
}
else{
	$ch = 32;
}


$bit = 65535 - (1 << ($LED+7)) - $ADC;

//echo $bit;

system("cd /usr/lib/cgi-bin");
system("sudo python inin.py $ch $bit ");


  //--------------------------------------------------------------------------
  // Example php script for fetching data from mysql database
  //--------------------------------------------------------------------------
  $host = "localhost";
  $user = "root";
  $pass = "winfast1";

  $databaseName = "win";
  $tableName = "SWITCH";

  $led = 1;
	if(empty($_GET[des])){
  		$led = 1;
	}
	else{
    	$led = $_GET[des];

    }

  //--------------------------------------------------------------------------
  // 1) Connect to mysql database
  //--------------------------------------------------------------------------
  include 'DB.php';
  $con = mysql_connect($host,$user,$pass);
  $dbs = mysql_select_db($databaseName, $con);

  //--------------------------------------------------------------------------
  // 2) Query database for data
  //--------------------------------------------------------------------------
  $result = mysql_query("SELECT DESCRIPTION FROM $tableName where ID=$led");          //query
  $array = mysql_fetch_row($result);                          //fetch result    

  //--------------------------------------------------------------------------
  // 3) echo result as json 
  //--------------------------------------------------------------------------
  //echo json_encode($array);
echo $array[0];



/*
$servername = "localhost";
$username = "root";
$password = "winfast1";
$dbname = "win";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT `ID`, `Status`, `Disc` FROM `switch`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["ID"]. " - Status: " . $row["Status"]. " " . $row["Disc"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();

*/
?>
