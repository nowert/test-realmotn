<?php 
    $api = file_get_contents("http://127.0.0.1:8080/myapi/index.php");
    $apidata = json_decode($api,true);

    $newapi = file_get_contents("https://jsonplaceholder.typicode.com/photos/1");
    $newapidata = json_decode($newapi,true);

    $curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.realmotosports.com/test/getcontent",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "Content-Type: application/json",
    "Authorization: realmotosports",
    "token: WEDph8mEM5fjnCRX2Q5jh3z3IOzTKV0U"
  ),
));

$response = curl_exec($curl);

curl_close($curl);
    
?>
    <?php echo $newapidata1;?>
<style type="text/css">
            .tg  {border-collapse:collapse;border-spacing:0;}
            .tg td{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
              overflow:hidden;padding:10px 14px;word-break:normal;}
            .tg th{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
              font-weight:normal;overflow:hidden;padding:10px 14px;word-break:normal;}
            .tg .tg-akbm{font-weight:bold;text-align:left;text-decoration:underline;vertical-align:top}
            .tg .tg-0lax{text-align:left;vertical-align:top}
            </style>

            <center>
            <h1><?php echo $response;?></h1>
            </center>
            <table class="tg" width="100%">
            <tbody>
              <tr>
                <td class="tg-akbm">Time</td>
                <td class="tg-0lax" colspan="5"><?php echo $apidata["time"];?></td>
              </tr>
              <tr>
                <td class="tg-akbm">Timestamp</td>
                <td class="tg-0lax" colspan="5"><?php echo $apidata["timestamp"];?></td>
              </tr>
              <tr>
                <td class="tg-akbm">Days to next year</td>
                <td class="tg-0lax" colspan="5"><?php echo $apidata["daystonextyear"];?></td>
              </tr>
              <tr>
                <td class="tg-akbm">Ip Address</td>
                <td class="tg-0lax" colspan="5"><?php echo $apidata["ipaddress"];?></td>
              </tr>
              <tr>
                <td class="tg-akbm">Query Parameters</td>
                <td class="tg-0lax" colspan="2"><?php echo $apidata["queryParams"];?></td>
                <td class="tg-0lax" colspan="2"></td>
                <td class="tg-0lax"></td>
              </tr>
              <tr>
                <td class="tg-akbm">Count</td>
                <td class="tg-0lax" colspan="5"><?php echo $apidata["Count"];?></td>
              </tr>
              <tr>
                <td class="tg-akbm">Response</td>
                <td class="tg-0lax"><?php echo $newapidata["albumId"];?></td>
                <td class="tg-0lax"><?php echo $newapidata["id"];?></td>
                <td class="tg-0lax"><?php echo $newapidata["title"];?></td>
                <td class="tg-0lax"><?php echo $newapidata["url"];?></td>
                <td class="tg-0lax"><?php echo $newapidata["thumbnailUrl"];?></td>
              </tr>
              <tr>
                <td class="tg-akbm">Url</td>
                <td class="tg-0lax" colspan="5"><?php echo $newapidata["thumbnailUrl"];?></td>
              </tr>
            </tbody>
        </table>