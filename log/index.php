<link rel="icon" href="https://is5-ssl.mzstatic.com/image/thumb/Purple123/v4/0b/43/c6/0b43c698-fdde-0599-06c0-ac35afd3d496/AppIcon-1x_U007emarketing-0-7-0-85-220.png/246x0w.png">
<a href="#" onClick="goclear()" id="button">Delete log</a>
<script type="text/javascript">
var btn = document.getElementById('button');
function goclear() { 
document.location.href = "clear.php";
};
setTimeout(function(){
   window.location.reload(1);
}, 10000);
</script>
<?php 
    //read file contents
    $content="<code><pre><h2>log.txt</h2>".htmlspecialchars(file_get_contents("log.txt"))."</pre></code>";
    //display
    echo $content;
?>
