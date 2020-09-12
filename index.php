<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="https://is5-ssl.mzstatic.com/image/thumb/Purple123/v4/0b/43/c6/0b43c698-fdde-0599-06c0-ac35afd3d496/AppIcon-1x_U007emarketing-0-7-0-85-220.png/246x0w.png">
<title>IpFind</title>
</head>
    <body>
    <style>
    @import url("https://fonts.googleapis.com/css?family=Inconsolata|Roboto+Mono|Ubuntu+Mono|Cutive+Mono");
    pre{
    display: inline-block;
    font-family: Ubuntu Mono, monospace !important;
    text-rendering: optimizeSpeed;
    }
    </style>
    <code>
    <pre><?php
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
        $date = date('Y-m-d H:i:s');                 //2012-03-06 17:33:07
        echo "|  _____       ______ _           _  ";
        echo "\r\n";
        echo "| |_   _|     |  ____(_)         | | ";
        echo "\r\n";
        echo "|   | |  _ __ | |__   _ _ __   __| | ";
        echo "\r\n";
        echo "|   | | | '_ \|  __| | | '_ \ / _` | ";
        echo "\r\n";
        echo "|  _| |_| |_) | |    | | | | | (_| | ";
        echo "\r\n";
        echo "| |_____| .__/|_|    |_|_| |_|\__,_| ";
        echo "\r\n";
        echo "|       | |                          ";
        echo "\r\n";
        echo "|       |_|                          ";
        echo "\r\n";
        echo "| Your ip is: ".$ip." (ipv4)";    //tell your ip
        echo "\r\n";
        echo "| The date and time now is: ".$date;
        $loc = file_get_contents('http://ip-api.com/xml/'.$ip);
        $loc = str_replace('<?xml version="1.0" encoding="UTF-8"?>', '', $loc);
        $loc = str_replace('<', '&lt;', $loc);
        $loc = str_replace('>', '&gt;', $loc);
        $loc = str_replace('  &lt;', '|  &lt;', $loc);
        $loc = str_replace('&lt;query&gt;', '|&lt;query&gt;', $loc);
        $loc = str_replace('&lt;/query&gt;', '|&lt;/query&gt;', $loc);
        $loc = str_replace('|&lt;query&gt;'.$ip, '&lt;query&gt;'.$ip, $loc);
        $loc = str_replace('|'.$ip.'&lt;/query&gt;', $ip.'&lt;/query&gt;', $loc);
        echo "\r\n";
        echo "|-----------------------------------------------";
        echo $loc;
        echo "\r\n";
        echo "|-----------------------------------------------";
        echo "\r\n";
        echo "| <a href='/legal/privacy-policy/'>Privacy Policy</a>";
        echo "\r\n";
        echo "| <a href='/legal/terms-of-use/'>Terms of Use</a>";
        echo "\r\n";
        echo "| Made by <a href='https://github.com/asimo10'>Asimo10</a>";
        ?>
        </pre>
        </code>
    </body>
</html>
