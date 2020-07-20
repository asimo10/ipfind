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
        date_default_timezone_set('Asia/Tokyo');  //set timezone to japan
        $date = date('Y-m-d H:i:s');                 //2012-03-06 17:33:07
        $line_break = "\r\n";    //break line value
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
<div id="ipinfo"><textarea>
<?php
        $loc = file_get_contents('https://ipapi.co/'.$ip.'/json');
        echo $loc;
?>
</textarea></div></pre>
| Click <a href="/map" target="_blank">Here</a> for Map. 
| <a href="/legal/privacy-policy/">Privacy Policy</a>
| <a href="/legal/terms-of-use/">Terms of Use</a>
| <a href="/" target="_blank">Help</a>
| <a href="/about/">About</a>
<?php
        echo "| Made by Asimo10";
        $file = 'log/log.txt';  //this is the file to which the IP address will be written; name it your way.
        $fp = fopen($file, 'a'); //open file
        fwrite($fp, $line_break);
        fwrite($fp, $ip . $line_break);  //write ip 
        fwrite($fp, $date . $line_break);       //write date
        fwrite($fp, "--------------------");   //separate       
        fclose($fp);          //close .txt
?>
        </code>
    </body>
</html>