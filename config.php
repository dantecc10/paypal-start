<?php
// Product Details
$itemNumber = "DP12345";
$itemName = "Demo Product";
$itemPrice = 75;
$currency = "USD";

/* PayPal REST API configuration 
 * You can generate API credentials from the PayPal developer panel. 
 * See your keys here: https://developer.paypal.com/dashboard/ 
 */ 
define('PAYPAL_SANDBOX', true); // true = Sandbox; false = Production
define('PAYPAL_SANDBOX_CLIENT_ID', 'AYNzIVfkjuh3B5S9_U2kkz_y_5QoWMtxaujF9J0_tRBWV_WV0k8UOQ6eStooXYCdQzXNpHwIZNrCYvJL');
define('PAYPAL_SANDBOX_CLIENT_SECRET', 'EJiv09_niZl8mfyhTQocc5q_qOzxG4g8pH-k_b1E2HFsxDaTbZFRnVvc9V_PSlwULO-pXRkF66kHMmEx');
define('PAYPAL_PROD_CLIENT_ID', '');
define('PAYPAL_PROD_CLIENT_SECRET', '');

// Database configuration
define('DB_HOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'codexworld_db');

?>