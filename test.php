<?php

$apiKey = 'aniXLCfDJ2S0F1joBHuM0FcmH';

$message = $_REQUEST['name'];
$reciepient = '0545977791';
$final = 'https://apps.mnotify.net/smsapi?key='.$apiKey.'&to='.$reciepient.'&msg='.$message.'&sender_id=TnsGhana';


function open_window($url){
   echo '<script>window.open ("'.$url.'", "mywindow","status=0,toolbar=0")</script>;
}';
echo $_REQUEST['name'];
}

// open_window('http://www.google.com');
open_window($final);
?>