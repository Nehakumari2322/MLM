<?php
  // DB Params
  define('DB_HOST', 'localhost');
  define('DB_USER', 'root');
  define('DB_PASS', '');
  define('DB_NAME', 'perfectdream');

  // App Root
  define('APPROOT', dirname(dirname(__FILE__)));
  // URL Root
  define('URLROOT', 'http://localhost/perfectdream/');

  define("SUCCESSFAILPATH", APPROOT . "views/inc/common/");
  // Site Name
  define('SITENAME', 'perfectdream');
  define('INSTITUTENAME', 'perfectdream');
  // App Version
  define('APPVERSION', '1.0.0');

  define('MEMBERSHIPFEE', '49');

  define("API_STATUS", "LIVE"); //LIVE OR UAT
  define("MERCHANTIDLIVE", "");
  define("MERCHANTIDUAT", "M228HFOWGVZZF"); 
  define("SALTKEYLIVE", " ");
  define("SALTKEYUAT", "56e9ca3f-935c-4add-9a8e-0c04104e9adb");
  define("SALTINDEX", "1");
  define("REDIRECTURL", "paymentstatus.php");
  define("SUCCESSURL", "success.php");
  define("FAILUREURL", "failure.php");
  define("LIVEURLPAY", "https://api.phonepe.com/apis/hermes/pg/v1/pay");
  define("LIVESTATUSCHECKURL", "https://api.phonepe.com/apis/hermes/pg/v1/status/");
  define("UATURLPAY", "https://uat.api.phonepe.com/apis/hermes/pg/v1/pay");