<?php
// Load composer
require __DIR__ . '/vendor/autoload.php';

$API_KEY = '376682828:AAE79WT571kMAmUk77iD3KJIni0ml7xixEs';
$BOT_NAME = 'testtesthosseinbot';
$hook_url = 'https://botbot.hamyad.net/bot/php_bot/hook.php';
try {
    // Create Telegram API object
    $telegram = new Longman\TelegramBot\Telegram($API_KEY, $BOT_NAME);

    // Set webhook
    $result = $telegram->setWebhook($hook_url);
    if ($result->isOgk()) {
        echo $result->getDescription();
    }
} catch (Longman\TelegramBot\Exception\TelegramException $e) {
    echo $e;
}