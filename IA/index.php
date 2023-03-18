<html lang=en>
<pre>
<?php
$br = PHP_EOL;
$sp = DIRECTORY_SEPARATOR;
require_once __DIR__ . $sp . "vendor" . $sp . "autoload.php";

// use TelegramBot\Entities\Update;
use TelegramBot\Telegram;
use TelegramBot\Request;
use TelegramBot\Entities\Message;

$admin_id = 1269777916;
$bot_token = "5801896630:AAEd0Z1FhgLZCFQqIbDOxe5E5KUj0ZlgRKw";
$hook_url = "https://webhooktelegram.matheuvieira.repl.co/sethook.php";

Telegram::setToken($bot_token);
Telegram::setAdminId($admin_id);

$response = Request::setWebhook([
    "url" => $hook_url,
    "certificate" => "./.cert/cert.crt"
]);

// $messag = new Message();

if ($response->isOk()) {
    $result = Request::sendMessage([
        "chat_id" => $admin_id,
        "text" => function (\TelegramBot\Entities\Update $update) {
            return $update->getMessage()->getChat()->getId();
        }
    ]);
    echo $response->getDescription();
    exit(0);
}

print_r($result->getRawData(false));

?>
