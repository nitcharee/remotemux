<?php 


if (!empty($_GET[led])) {
	$LED = $_GET[led];
}
else{
	$LED = 0;
}

if (!empty($_GET[adc])) {
	if($_GET[adc] != 0){
    	$ADC=1;
    }
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


$bit1 = 255 - (1 << ($LED-1));
$bit2 = 255 - $ADC;

$python_path = "/var/www/html" . dirname($_SERVER['SCRIPT_NAME']) . "/relay_control.py";
echo $python_path;

exec("sudo python $python_path $ch $bit1 $bit2");

?>
