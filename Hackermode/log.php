
<?php
$handle=fopen("/var/log/apache2/access.log","r");
$high=array();
$req=0;
if ($handle){
    while (($line=fgets($handle)) !== false){
        $ip= explode(' ',$line);
        if (strcmp($ip[6],"/login.html")==0 || strcmp($ip[6],"/register.html")==0 ||strcmp($ip[6],"/dashboard.html")==0 ||strcmp($ip[6],"/update.php")==0 )
        {
            $req+=1;
            if (array_key_exists($ip[0],$high))
            {
                $high["$ip[0]"]+=1;
            }
            else
            {
                $high["$ip[0]"]=1;
            }

        }
    }
    $maxip=array_keys($high,max($high));
    echo "Total request ".$req." || ";
    echo "Max request ".$maxip[0];

    fclose($handle);
}
else
{
    echo "no openable";
}

?>
