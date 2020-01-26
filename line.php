 <?php
  

function send_LINE($msg){
 $access_token = '13HdqTxe+9PMZQ8Fb/Y0vYpNLU/nYR3di3EceteTPJko6CKSSMQWmt2miwi73T3CUcCaY8ayj6rZ43IfsW9+XRxy4OVdYT1JA53RmC8CdKaQYPAYNvKa0oGBLdTHjCu26VSBUH2dUnWnfwtwJ/pzSgdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'Ue6ec020fe74860bb57798c570f95fd12',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>
