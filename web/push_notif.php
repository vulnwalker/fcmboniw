<?php


$fcmNotification = array(
    "android" => array(
      "notification" => array(
        "click_action" => "FLUTTER_NOTIFICATION_CLICK",
        "priority" => "high"
      )
    ),
    "priority" => "high",
    'notification' => array(
                        "title" => "TITLE",
                        "body" => "body om",
                      "click_action" => "FLUTTER_NOTIFICATION_CLICK",
                    ),
    "to" => "fp8335hZTDmPfOfsoHpiJJ:APA91bEVVwcLnWLoaQSVNyxp_HPXyBZak07xMMimh5XQDYyi7cMEWofJRUNx4xlydsFlQNUb1hSPAQ1Ud5uFvpt4QTT4-DKCamG0P_NpKh928Np2R1fbbyZxvxeO3d0ioYvEPdEOjWNl",
    "click_action" => "FLUTTER_NOTIFICATION_CLICK",


);
$headers = [
'Authorization: key=AAAAz2qXbnk:APA91bGdqxtFJNXJJcQEOFFHUAzcGZHxesqVn7PmGiJUVxat27xgNtO00rlYyW8EFXp6LSe3OZcbzlW5N871W3mWPk4h3QxndERMf-q6uluBN9XYXGgvL_S7Nhk-M69KfXAP3U-04Jo4',
'Content-Type: application/json'
];
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"https://fcm.googleapis.com/fcm/send");
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fcmNotification));
$result = curl_exec($ch);
curl_close($ch);
print_r($result);

?>