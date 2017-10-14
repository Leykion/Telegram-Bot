<?php
 
$botToken = "387537131:AAElnZLmS_HEMIe3CJJhfLPlg41-KWMmyh8";
$website = "https://api.telegram.org/bot".$botToken;
 
$update = file_get_contents('php://input');
$update = json_decode($update, TRUE);
 
 
$chatId = $update["message"]["chat"]["id"];
$message = $update["message"]["text"];
 
 
switch($message) {
       
        case "/coin":
                sendMessage($chatId, "As an exchange, Binance team will not share our views on 
coins. You are welcome to discuss various coins in our group, though.");
        break;

        case "/list":
                sendMessage($chatId, "If you suggest a coin for listing on Binance, please ask the core team to fill out our form: https://goo.gl/forms/rm4JuOPOxYq2xGTQ2. 
Binance does not disclose or discuss coin listing plans or information until after the coin starts trading on the exchange.  
Binance also requires coin teams to respect our confidentiality policy.  Any team that says they will list on Binance will cause them to disqualify.");
        break;

	case "/app":
                sendMessage($chatId, "Binance APP Download Link
Android :   https://ftp.binance.com/pack/Binance.apk 
iOS:   https://fir.im/binance   (you need to uninstall previous version first)
How to Install Binance iOS APP:   https://support.binance.com/hc/en-us/articles/115001507811 ");
        break;

	case "/feature":
                sendMessage($chatId, "Your feature request is noted. If you really want this feature, please also write to us at product@binance.com. Please be as detailed as possible. If your suggestion is a good one, you might even get a neat prize from us.");
        break;

        case "/plan":
                sendMessage($chatId, "Binance usually does not disclose our plans, for a few reasons: 
                        
1, we want to stay clean from the potential accusation of hyping up the price; 
2, we don't want to let our competitors know our plans;  And 
3, our plans often change. We want to keep our tradition of always being able to deliver everything we say.
Rest assured, we have our plans, and there is a constant stream of neat features coming, fast.");
        break;

        case "/slow":
                sendMessage($chatId, "If your deposit or withdraw is slow, please check the status of your blockchain first.  Bitcoin blockchain is often full.  You can check the bitcoin blockchain status at: http://statoshi.info/dashboard/db/memory-pool or https://blockchain.info/unconfirmed-transactions
                        
Ethereum blockchain is often full when a big ICO is in progress. If the blockchains are not full, then PRIVATELY send us your account email and txid.");
        break;

        case "/angel":
                sendMessage($chatId, "Calling for Binance Angels 
https://support.binance.com/hc/en-us/articles/115000483751");
        break;

        case "/login":
                sendMessage($chatId, "If you aren’t unable to login, please try the following; 
Internet: try to clear cache, cookies, and change dns or restart router. 
Switch phone to flight mode and switch back.
                        
Please then try to login from www.binance.com/hw_login.html
If you still cannot login, please private message your account ID to customer service. Our IT department will deal with it ASAP.");
        break;

        case "/2fa":
                sendMessage($chatId, "To reset Google 2-Factor Authentication, please provide your account e-mail, tell us the 6 digit verify numbers you have received in support center, we will reset it for you.
If you have assets in your account, for your security reason, you can’t withdraw within 48 hours after you cancel the verification.");
        break;

        case "/burn":
                sendMessage($chatId, "Every quarter, Binance will use 20% of our profits to buy back BNB and destroy them, until we burn 50% of all the BNB back. All buy back transactions will be done on the blockchain. We eventually will burn 100MM BNB.");
        break;
        
        case "/fork":
                sendMessage($chatId, "Binance is preparing for the upcoming potential Bitcoin fork with the following procedures:

1. Before the potential fork, Binance may suspend momentarily Bitcoin deposits and withdrawals.
2. If the hardfork happens, Binance would like to support any meaningful forks. We will decide the coin listing depending on the situation, our priority is to protect our customers funds.
3. If you are unsure on how to deal with the technical issues regarding the bitcoin forking, feel free to deposit your Bitcoins on Binance exchange in advance and we will handle it for you and ensure you will have all possible assets after the fork.");
                break;

        case "/commands":
                sendMessage($chatId, "COMMANDS LIST:
     /burn = Burn & Buyback info
     /2fa = Queries regarding resetting 2fa
     /login = If a user is unable to login
     /angel = Angel Application
     /slow = If a withdrawal/deposit is slow
     /plan = If queried about binance plans
     /feature = If suggesting a feature
     /app = App links
     /coin = If asked about your opinion on a coin
     /list = If a user requests a coin to be listed
     /fork = Queries regarding bitcoin fork");
        break;
       
}
 
function sendMessage ($chatId, $message) {
       
        $url = $GLOBALS[website]."/sendMessage?chat_id=".$chatId."&text=".urlencode($message);
        file_get_contents($url);
       
}
 
 
 
 
 
?>