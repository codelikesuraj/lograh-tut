<?php

require_once("vendor/autoload.php");

$logger = new Codelikesuraj\LograhPHP\Logger(
    appName: "Lograh Tutorial",
    botToken: "your_api_token",
    chatId: "your_chat_id"
);

try {
    throw new \Exception("I am an error from Lograh-tut");
} catch (\Throwable $exception) {
    // send exception to Telegram using any
    // of the following methods
    $logger->reportAsText($exception);
    $logger->reportAsJson($exception);
    $logger->reportAsJsonWithStackTrace($exception);
    
    // further processing
}