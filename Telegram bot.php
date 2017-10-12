<?php
 
$botToken = "387537131:AAElnZLmS_HEMIe3CJJhfLPlg41-KWMmyh8";
$website = "https://api.telegram.org/bot".$botToken;
 
$update = file_get_contents('php://input');
$update = json_decode($update, TRUE);
 
 
$chatId = $update["message"]["chat"]["id"];
$message = $update["message"]["text"];
 
 
switch($message) {
       
        case "/coin":
                sendMessage($chatId, "If I/we disclose this info in small groups before an official announcement, how will this affect the long term credibility of Binance? So, please don’t ask anymore. All listing plans will be first announced through our official announcements.");
                break;
        case "/list":
                sendMessage($chatId, "Thank you for suggesting. Please have the core team fill out the Binance Listing Application Form. We will take it from there. We get about 10-30 listing requests per day, so don’t get offended if we don’t respond. It generally mean your coin did not pass our review. Please don’t ask me about the status of an application. I really don’t know.
                	https://binance.zendesk.com/hc/en-us/articles/115000822512-Listing-a-Coin-on-Binance-com");
                break;
		case "/vote":
                sendMessage($chatId, "As with any game, as soon as the rules are set, people find ways to 'optimize' against them. There have been concerns and complaints about 'cheating', people buying votes, or giving other people money to vote.

Let me say this: Don't panic! Let us take care of tallying the results and cleaning up any 'cheating'. There are plenty of data we could/will easily cross-reference. ");
                break;

       
}
 
function sendMessage ($chatId, $message) {
       
        $url = $GLOBALS[website]."/sendMessage?chat_id=".$chatId."&text=".urlencode($message);
        file_get_contents($url);
       
}
 
 
 
 
 
?>