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
        ?>
        |  _____       ______ _           _  
        <br>
        | |_   _|     |  ____(_)         | | 
        <br>
        |   | |  _ __ | |__   _ _ __   __| | 
        <br>
        |   | | | '_ \|  __| | | '_ \ / _` | 
        <br>
        |  _| |_| |_) | |    | | | | | (_| | 
        <br>
        | |_____| .__/|_|    |_|_| |_|\__,_| 
        <br>
        |       | |                          
        <br>
        |       |_|                          
        <br>
        <?php
        echo "| Your ip is: ".$ip." (ipv4)";    //tell your ip
        echo "\r\n";
        echo "| The date and time now is: ".$date;
        ?>
        <br>
        |-----------------------------------------------";
        <br>
        <form action='index.php' method='post' autocomplete='off'>
        | IP <input type='text' name='ip'/>
              <input type='submit' value='Search'/>
        </form>
        <?php
        if (isset($_POST['ip']) && !empty($_POST['ip'])) {
            $ip = $_POST['ip'];
        }
        else {
        }
        $loc = file_get_contents('http://ip-api.com/json/'.$ip);
        $loc = str_replace('{', '<br>{<br>', $loc);
        $loc = str_replace('}', '<br>}', $loc);
        $loc = str_replace(',', ',<br>', $loc);
        $loc = str_replace('{', '|{', $loc);
        $loc = str_replace('}', '|}', $loc);
        $loc = str_replace('<br> ', '', $loc);
        $loc = str_replace(',<br>', ',<br>|    ', $loc);
        $loc = str_replace('{<br>', '{<br>|    ', $loc);
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
        ?></pre>
        </code>
    </body>
</html>
