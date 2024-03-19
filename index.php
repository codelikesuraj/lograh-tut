<?php

require_once("vendor/autoload.php");

$logger = new Codelikesuraj\LograhPHP\Logger(
    appName: "Lograh Tutorial",
    botToken: "7042233817:AAHvSeTiwhpUto96dANUyPWgaxOKwkgy6mM",
    chatId: "1056417568"
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