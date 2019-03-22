<<<<<<< HEAD
<?php
    $name = $_POST['orderName'];
    $phone = $_POST['orderPhone'];
    $email = $_POST['orderEmail'];
    $message = $_POST['orderMessage'];

    $token = "696472715:AAEjwnDGbq27F6D6srHGHgNfJyXL_be5XTw";
    $chat_id = "-374948263";

    $arr = array(
        'имя: ' => $name,
        'телефон: ' => $phone,
        'почта: ' => $email,
        'сообщение: ' => $message,
    );

    foreach($arr as $key => $value) {
        $txt .= "<b>".$key."</b> ".$value."%0A";
    };

    $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
=======
<?php
    $name = $_POST['orderName'];
    $phone = $_POST['orderPhone'];
    $email = $_POST['orderEmail'];
    $message = $_POST['orderMessage'];

    $token = "696472715:AAEjwnDGbq27F6D6srHGHgNfJyXL_be5XTw";
    $chat_id = "-374948263";

    $arr = array(
        'имя: ' => $name,
        'телефон: ' => $phone,
        'почта: ' => $email,
        'сообщение: ' => $message,
    );

    foreach($arr as $key => $value) {
        $txt .= "<b>".$key."</b> ".$value."%0A";
    };

    $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
>>>>>>> 864fc1952a0f2954a51ea74da1a3363f26acd0c4
?>