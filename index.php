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
    textarea {
  width: 1344px;
  height: 432px;
}
    </style>
<code>
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
        $date = date('Y-m-d H:i:s');                 //2012-03-06 17:33:07
?>
<pre><?php
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
        echo "| Your ip is: ".$ip;    //tell your ip
        echo " (ipv4)";
        echo "| The date and time now is: ".$date;
?>
<div id="ipinfo">
<?php
        $loc = file_get_contents('https://ipapi.co/'.$ip.'/xml');
        $loc = str_replace('<', '&lt;', $loc);
        $loc = str_replace('>', '&gt;', $loc);
        echo $loc;
?>
</div></pre><br>
| Click <a href="/map" target="_blank">Here</a> for Map. 
| <a href="/legal/privacy-policy/">Privacy Policy</a>
| <a href="/legal/terms-of-use/">Terms of Use</a>
| <a href="/" target="_blank">Help</a>
| <a href="/about/">About</a>
| Made by <a href="https://github.com/asimo10">Asimo10</a>
        </code>
    </body>
</html>
