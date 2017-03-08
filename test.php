<?php
// Load composer
require __DIR__ . '/vendor/autoload.php';

$API_KEY = '376682828:AAE79WT571kMAmUk77iD3KJIni0ml7xixEs';
$BOT_NAME = 'testtesthosseinbot';

$telegram = new Longman\TelegramBot\Telegram($API_KEY, $BOT_NAME);

$result=$telegram->getBotName();
echo $result;