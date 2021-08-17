
<?php
    $endPoint = 'https://api.mnotify.com/api/template';
    $apiKey = 'aniXLCfDJ2S0F1joBHuM0FcmH';
    $id = 1;
    $url = $endPoint . '/' . $id . '?key=' . $apiKey;

    echo $id;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
    $result = curl_exec($ch);
    $result = json_decode($result, TRUE);
    curl_close($ch);
?>

https://apps.mnotify.net/smsapi?key=aniXLCfDJ2S0F1joBHuM0FcmH&to=0545977791&msg=Order+id+61+has+been+placed+by+Nana+Kweku+Adumatta+at+OG+block+3+room+20+.+You+can+call+on+0545977791%0A%5B%7B%22itemname%22%3A%22Fried+Rice+%26+Goat%22%2C%22price%22%3A%22%E2%82%B535.00%22%2C%22quantity%22%3A%221%22%7D%5D%0A+N



<?php
$endPoint = 'https://api.mnotify.com/api/sms/quick';
$apiKey = 'aniXLCfDJ2S0F1joBHuM0FcmH';
$url = $endPoint . '?key=' . $apiKey;
$data = [
    'recipient' => ['0545977791'],
    'sender' => 'TNSGhana',
    'message' => 'API messaging is fun!',
    'is_schedule' => 'false',
    'schedule_date' => ''
];

$message = 'Hurray';
$reciepient = '0545977791';
$final = 'https://apps.mnotify.net/smsapi?key='.$apiKey.'&to='.$reciepient.'&msg='.$message.'&sender_id=TnsGhana';


function open_window($final){
   echo '<script>window.open ("'.$final.'", "mywindow","status=0,toolbar=0")</script>;
}';

    open_window('http://www.google.com');
?> 