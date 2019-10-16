<?php
/**
 * Telegram Bot example.
 * @author Amirreza ahmadi <amiramdi19@gmail.com>
 * https://github.com/tomanak86/amir
 * *
 */
 
include("Telegram.php");

// Set the bot TOKEN
$bot_id = "849944430:AAH3tUDl2WpRjNt8jAOLbA0sVkw51omtCdw";
// Instances the class
$telegram = new Telegram($bot_id);

$result = $telegram->getData();

// Take text and chat_id from the message
$chat_id 		  = $telegram->ChatID();
$user_id 		  = $telegram->UserID();

$content = array('chat_id' => '@SteamBestWallet', 'user_id' => $user_id);
$join_info = $telegram->getChatMember($content);

$join_check = $join_info['ok'];
$join_status = $join_info['result']['status']; // member - left

if(!$join_check || $join_status == 'left'){

 	$content = array('chat_id' => $chat_id, 'text' => 'شما اول باید وارد کانال ما شوید'.PHP_EOL.'https://t.me/SteamBestWallet');
	$telegram->sendMessage($content);

}