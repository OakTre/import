<?php
// Проверка на пустые поля уровня PHP милорд разработчика
// if (empty($_POST["name"]) && empty($_POST["tel"]) && empty($_POST["email"])) {
//     header('HTTP/1.1 500 Internal Server');
//     header('Content-Type: application/json; charset=UTF-8');
//     die(json_encode(array('message' => 'FORM ERROR', 'code' => 1337)));
// };

$_POST = json_decode(file_get_contents('php://input'), true);

$token = '5784895850:AAGGZSro2uXroSYdSHyPTSiuqz309XTVzgs';
$chat_id = '-719954746';
$name = $_POST["name"];
$company = $_POST["companay"];
$tel = $_POST["tel"];
$mail = $_POST["mail"];

$arr = array(
    'Форма:' => "Заявка с tech-import.com",
    'Имя:' => $name,
    'Телефон:' => $tel,
    'Почта:' => $mail,
    'Наименование компании:' => $company,
);

foreach ($arr as $key => $value) {
    $message .= "<b>" . $key . "</b> " . $value . "%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$message}", "r");

if ($sendToTelegram) {
    echo "OK";
} else {
    echo "Error";
}

// $queryUrl = 'https://ricc-it.bitrix24.ru/rest/18/44l42tj7bfzqjbl7/crm.lead.add.json';
// $queryData = http_build_query(array(
//     'fields' => array(
//         'TITLE' => 'Форма экспорта c сайта danit.ea',
//         'NAME' => $name,
//         'PHONE' => array(
//             array(
//                 "VALUE" => $tel,
//                 "VALUE_TYPE" => "WORK"
//             )
//         ),
//         'EMAIL' => array(
//             array(
//                 "VALUE" => $mail
//             )
//         ),
//         'COMPANY_TITLE' => $company,
//         'COMMENTS' => $text,
//     ),
//     'params' => array("REGISTER_SONET_EVENT" => "Y")
// ));
// $curl = curl_init();
// curl_setopt_array($curl, array(
//     CURLOPT_SSL_VERIFYPEER => 0,
//     CURLOPT_POST => 1,
//     CURLOPT_HEADER => 0,
//     CURLOPT_RETURNTRANSFER => 1,
//     CURLOPT_URL => $queryUrl,
//     CURLOPT_POSTFIELDS => $queryData,
// ));
// $result = curl_exec($curl);
// curl_close($curl);
