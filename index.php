<!DOCTYPE html>
<html>
    <body>
    <style>
    textarea { white-space: nowrap; }
    </style>
        <code>
        <pre>
<?php
      if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
    {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }
      elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check if ip is pass from proxy
    {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
      else
    {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
        echo "Your ip is: ".$ip;    //tell your ip
        echo " (ipv4)";
        echo "\r\n";
        echo "------------------------------------------";
        echo "\r\n";
        $loc = file_get_contents('https://ipapi.co/'.$ip.'/json');
        echo $loc;
        echo "\r\n";
        $latlong = explode(",", file_get_contents('https://ipapi.co/' . $ip . '/latlong/'));
        $weather = file_get_contents('http://api.openweathermap.org/data/2.5/weather?lat=' . $latlong[0] . '&lon=' . $latlong[1] . '&appid=c1aa74b8bea8a4568ecac29711694f9c');
        echo $weather;
        echo"\r\n";
        echo "------------------------------------------";
        echo "\r\n";
        echo "Made by Asimo10";
?>
        </pre>
        </code>
    </body>
</html>