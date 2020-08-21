<?php
require_once('dbconfig.php');
$db = new Database('localhost', 'webapi', 'root','1234' );
ini_set('display_error',0);
error_reporting (E_ALL ^ E_NOTICE);


//$sql = "INSERT INTO counter(visit)VALUES(1)";
//$con->exec($sql);


if($_SERVER['REQUEST_METHOD']=="GET"){

    $date = date("l, d M Y h:i:s");
    $time = time();
    $dateS = date("Y-m-d");
    $date1=date_create("$dateS");
    $date2=date_create("2021-01-1");
    $diff=date_diff($date1,$date2);
    

    // IP Client
    if (!empty($_SERVER['HTTP_CLIENT_IP']))   
    {
        $ip_address = $_SERVER['HTTP_CLIENT_IP'];
    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))  
    {
        $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else
    {
              $ip_address = $_SERVER['REMOTE_ADDR'];
    }
    $api = file_get_contents("https://jsonplaceholder.typicode.com/photos/1");
    $apidata = json_decode($api,true);
    //count
                //insert


                //query
    $dbcout =$db->query('SELECT count(visit) From counter');
    $dbdata =json_encode($db->query('SELECT * FROM person'));
    
    $myObj->time = $date;
    $myObj->timestamp = $time;
    $myObj->daystonextyear = $diff->format("%a");;
    $myObj->ipaddress = $ip_address;
    $myObj->queryParams = $dbdata;
    $myObj->Count = $dbcout[2];
    $myObj->response = $apidata;
    $myObj->url = $apidata["thumbnailUrl"];
    
    $myJSON = json_encode($myObj);
    echo $myJSON;
    
    
   //print_r($apiname);

}
else if($_SERVER['REQUEST_METHOD']=="POST"){
    echo 'REQUEST POST';
}
else{
    http_response_code(405);
}

?>