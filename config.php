<?php
// Product Details
$itemNumber = "DP12345";
$itemName = "Producto de prueba";
$itemPrice = 30;
$currency = "MXN";

/* PayPal REST API configuration 
 * You can generate API credentials from the PayPal developer panel. 
 * See your keys here: https://developer.paypal.com/dashboard/ 
 */ 
define('PAYPAL_SANDBOX', false); // true = Sandbox; false = Production
define('PAYPAL_SANDBOX_CLIENT_ID', 'AYNzIVfkjuh3B5S9_U2kkz_y_5QoWMtxaujF9J0_tRBWV_WV0k8UOQ6eStooXYCdQzXNpHwIZNrCYvJL');
define('PAYPAL_SANDBOX_CLIENT_SECRET', 'EJiv09_niZl8mfyhTQocc5q_qOzxG4g8pH-k_b1E2HFsxDaTbZFRnVvc9V_PSlwULO-pXRkF66kHMmEx');
define('PAYPAL_PROD_CLIENT_ID', 'ATydzkWUgPeIsEwB4Oi-EfWsKrRBb3SmQNx73cGeceaAM3IkClHjkXUrNUgd0tG3wvm_AkY8K5IDmMjV');
define('PAYPAL_PROD_CLIENT_SECRET', 'EL-8BpHWWZN52QXPG0Y9Hahs2AvvoyyUmi2LZG-HgBZzUpOFoCPKoBQ1pgNICD--BbT7yW6gLHHVjHU-');

// Database configuration
define('DB_HOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'codexworld_db');

?>