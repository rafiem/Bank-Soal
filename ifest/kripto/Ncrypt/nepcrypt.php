<?php 
//$flag = "Aku sayang kamu.";
$key = "==QV5JEdyVHS0V2RzlXY3xWQJV2c1F2QlZ3bM5WSlZXZpxWZCV3bZ9GR";
$xor = rand(10,100);
$td  = rand(0,10);
$result = array();
$final = "";

$id = base64_decode(strrev($key));
for($i=0; $i<strlen($id); $i++){
    array_push($result, ord($id[$i])+$td);
}

$flag = str_split($flag);
foreach ($flag as $key => $value) {
    $final .= ((ord($value)+$result[$key]) ^ $xor)."-";

}

echo $final;

//This Result Final when already got uyel uyel!
// $final = "97-177-202-230-253-201-177-176-205-192-193-185-188-202-144-203-209-188-160-219-253-214-186-178-181-239-253-209-236-199-170-183-215-149-231-213-192-158-221-214";