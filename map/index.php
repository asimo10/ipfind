<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="https://is5-ssl.mzstatic.com/image/thumb/Purple123/v4/0b/43/c6/0b43c698-fdde-0599-06c0-ac35afd3d496/AppIcon-1x_U007emarketing-0-7-0-85-220.png/246x0w.png">
<title>IpFind | Map</title>
</head>
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
        $lat = file_get_contents('https://ipapi.co/' . $ip . '/latitude/');
        $long = file_get_contents('https://ipapi.co/' . $ip . '/longitude/');
        $map = file_get_contents('https://nominatim.openstreetmap.org/reverse.php?format=html&lat='.$lat.'&lon='.$long.'&zoom=18');
        echo $map;
?>
</html>
