<?php 

if (!empty($_GET[ch])) {
    $ch = $_GET[ch];
}
else{
    $ch = 1;
}

$bit1 = 0x61 + ($ch-1)*2;
//0x61; //CH1
//0x63; //CH2
//0x65; //CH3
//0x67; //CH4


$python_path = "/var/www/html" . dirname($_SERVER['SCRIPT_NAME']) . "/adc.py";
//echo $python_path;

$ADC_OUT = exec("sudo python $python_path $bit1 210");

$temp1  = ($ADC_OUT & 0x0F) << 8;
$temp2 = ($ADC_OUT & 0xFF00) >> 8;

$FinalValue = $temp1+$temp2;

echo $FinalValue * 70 / 4096;



?>