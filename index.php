<?php
    define('API_KEY', '5287422159:AAGCUsUhxqAWvbUtQDF75puSGOoJ0IrkpoE');
    function dump($what) {
      echo '<pre>';
        print_r($what);
      echo '</pre>';
    };
    function bot($method="getMe", $params = []) {
      $url = "https://api.telegram.org/bot".API_KEY."/" . $method;
      $curl = curl_init();
      curl_setopt_array($curl, [
          CURLOPT_URL => $url,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_POST = true,
          CURLOPT_POSTFIELDS => http_build_query($params)
      ]);
      $res = curl_exec($curl);
      curl_close($curl);
      if(!curl_error($curl)) return json_decode($res, true);
    };
    dump(bot("getMe", []));
    $hi_text = "salom bot ishlamoqda";
    dump(bot('sendMessage', [
        'chat_id' => "1020678098",
        'text' => $hi_text,
        'parse_mode' => 'HTML',
    ]));
?>