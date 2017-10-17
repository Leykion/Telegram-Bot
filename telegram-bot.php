<?php

  $botToken = "387537131:AAElnZLmS_HEMIe3CJJhfLPlg41-KWMmyh8";
  $website = "https://api.telegram.org/bot".$botToken;

  $update = file_get_contents('php://input');
  $update = json_decode($update, TRUE);

  $chatId = $update["message"]["chat"]["id"];
  $message = $update["message"]["text"];

  switch($message) {
         
    case "/coin":
      sendMessage($chatId, "As a reputable exchange, the Binance team will not share our views on individual coins. "
        ."However, you are welcome to discuss various coins in our group amongst the rest of the community."
      );
    break;

    case "/list":
      sendMessage($chatId, "If you would like to suggest a coin for listing on Binance, please ask the core team to "
        ."[fill out our application form](https://goo.gl/forms/rm4JuOPOxYq2xGTQ2).\n\n"
        ."Binance does not disclose coin listing information until an official announcement has been made. You may "
        ."join our announcements channel for the latest news "
        ."([@binance_announcements](https://t.me/binance_announcements)).\n\n"
        ."Additionally, if a project has announced listing on Binance prior to an official Binance announcement, they "
        ."are at risk of disqualification."
      ); 
    break;

    case "/app":
      sendMessage($chatId, "The Binance application is available for Android and iOS using the following links:\n\n"
        ."*Android*: https://ftp.binance.com/pack/Binance.apk\n"
        ."*iOS*: https://fir.im/binance "
        ."([Installation Guide](https://support.binance.com/hc/en-us/articles/115001507811))\n\n"
        ."If you have previously installed the application, please make sure it is uninstalled before attempting to "
        ."install again."
      );
    break;

    case "/feature":
      sendMessage($chatId, "Thank you for the suggestion! We would appreciate it if you would write an e-mail to "
        ."product@binance.com outlining your feature request. Please be as detailed as possible. If it is deemed "
        ."valuable enough, you may even receive a neat prize from the team!"
      );
    break;

    case "/plan":
      sendMessage($chatId, "Typically, Binance does not disclose future plans. There are a few reasons for this:\n\n"
        ."1) We do not want to be accused of encouraging price manipulation.\n\n"
        ."2) We want to avoid providing vital information to our competitors.\n\n" 
        ."3) Our plans are subject to change at any time. There are always new features and improvements in the "
        ."pipeline, and as a result, priorities may shift."
      );
    break;

    case "/slow":
      sendMessage($chatId, "If your deposit or withdrawal is processing slowly, please check if you have received a "
        ."Transaction ID (TxID). If you have, you will need to monitor the status of your transaction on the relevant "
        ."blockchain.\n\n"
        ."For Bitcoin (BTC), the network is often congested. You may check your transaction status on the Bitcoin "
        ."blockchain at [Satoshi.info](http://statoshi.info/dashboard/db/memory-pool) or "
        ."[Blockchain.info](https://blockchain.info/unconfirmed-transactions).\n\n"
        ."For Ethereum (ETH), the network can get quite busy during large ICOs. You are able to check the status of a "
        ."transaction on the Ethereum blockchain at [Etherscan.io](https://etherscan.io/txs).\n\n"
        ."If you have received numerous confirmations with no update to your balance, please *privately* send us "
        ."your Binance e-mail and TxID so that we may investigate further."
      );
    break;

    case "/angel":
      sendMessage($chatId, "Binance Angels are volunteers from within our community that donate their own time and "
        ."energy to supporting our platform in various ways, primarily assisting our userbase with questions and "
        ."concerns.\n\n"
        ."For more information, and details regarding how to apply to become a Binance Angel, please read our "
        ."announcement: [Calling for Binance Angels](https://support.binance.com/hc/en-us/articles/115000483751)."
      );
    break;

    case "/login":
      sendMessage($chatId, "If for some reason you're unable to log in, please attempt the following:\n\n"
        ."1) Utilize our alternate login page: "
        ."[https://www.binance.com/hw_login.html](https://www.binance.com/hw_login.html)\n\n"
        ."2) Clear your browser cache and cookies. If issues persist, temporarily disable any browser extensions you "
        ."may have installed, especially script or ad blockers, or attempt logging in with another browser.\n\n"
        ."3) Update your DNS servers to Google's (Primary: 8.8.8.8, Secondary: 8.8.4.4). As a last resort, you should "
        ."attempt to log in with another device. If you are still unable, it may be an issue with your network. If you "
        ." are connected to a home or Wi-Fi network, attempt using mobile data (or vice-versa).\n\n"
        ."If none of the above steps were successful, please "
        ."[open a support ticket](https://support.binance.com/hc/en-us/requests/new) and/or *private message* your "
        ."Binance e-mail to customer service. Our IT department will look into it as soon as possible."
      );
    break;

    case "/2fa":
      sendMessage($chatId, "To reset your Two-Factor Authentication, please [open a support ticket]("
        ."https://support.binance.com/hc/en-us/requests/new).\n\n"
        ."*Note*: If you have assets in your account, for your own security, you will be unable to withdraw for a "
        ."period of 48 hours after two-factor authentication has been reset."
      );
    break;

    case "/burn":
      sendMessage($chatId, "Every quarter, Binance will use 20% of its profits to buy back and burn/destroy BNB "
        ."until 50% of the total supply has been depleted. Eventually, only a total of 100,000,000 BNB will remain.\n\n"
        ."All related transactions will be completed on the blockchain, available for public view."
      );
    break;
          
    case "/fork":
      sendMessage($chatId, "Binance is preparing for the upcoming potential Bitcoin fork with the following "
        ." procedures:\n\n"
        ."1) Before the potential fork, we may momentarily suspend Bitcoin deposits and withdrawals.\n\n"
        ."2) If the fork occurs, Binance would like to support any meaningful forks. Our priority is to protect "
        ."our customer's funds, and we will evaluate the coin listing depending on the situation.\n\n"
        ."3) If you are unsure how to handle the technical aspects surrounding the bitcoin fork, feel free to deposit "
        ."your Bitcoin on the Binance exchange in advance and we will handle it for you. We will ensure that you have "
        ."all possible assets after the fork."
      );
    break;

    case "/commands":
      sendMessage($chatId, "*List of Commands*:\n"
        ."/burn = Buyback & Burn Information\n"
        ."/2fa = Resetting Two-Factor Authentication\n"
        ."/login = Assistance with Login Issues\n"
        ."/angel = Binance Angel Details & Application\n"
        ."/slow = Guidance for Slow Deposits/Withdrawals\n"
        ."/plan = Inquiries for Future Binance Plans\n"
        ."/feature = Procedure for Feature Suggestions\n"
        ."/app = Mobile App Details & Links\n"
        ."/coin = Staff Opinions on Specific Coins\n"
        ."/list = Procedures for Listing a Coin\n"
        ."/fork = Information Regarding the Bitcoin Fork"
      );
    break;
         
  }

  function sendMessage ($chatId, $message) {
    $url = $GLOBALS[website]."/sendMessage?chat_id=".$chatId."&text=".urlencode($message);

    // Temporarily forced.
    $url = $url."&parse_mode=Markdown";
    $url = $url."&disable_web_page_preview=true";

    file_get_contents($url);
  }

?>