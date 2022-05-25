<?php //session_name("administrator"); session_start();
//Funkce

/*if ($admin == 1){
    $ip_klient = $_SERVER['REMOTE_ADDR'];//Zjišťuje IP klienta
}else{
    $ip_klient = true;
} 

*/

$serverName = "proj2.unob.local, 1443";
$connectionInfo = array( "Database"=>"IS_UO", "UID"=>"knihazadosti", "PWD"=>"2927+SodaKZ1");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
     echo "Connection established.<br />";
}else{
     echo "Connection could not be established.<br />";
     //die( print_r( sqlsrv_errors(), true));
}

?>
