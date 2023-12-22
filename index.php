<?php
// Include the configuration file
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://www.paypal.com/sdk/js?client-id=<?php echo PAYPAL_SANDBOX ? PAYPAL_SANDBOX_CLIENT_ID : PAYPAL_PROD_CLIENT_ID; ?>&currency=<?php echo $currency; ?>"></script>
</head>

<body>
    <div class="panel">
        <div class="overlay hidden">
            <div class="overlay-content"><img src="css/loading.gif" alt="Processing..." /></div>
        </div>

        <div class="panel-heading">
            <h3 class="panel-title">Charge <?php echo '$' . $itemPrice; ?> with PayPal</h3>

            <!-- Product Info -->
            <p><b>Item Name:</b> <?php echo $itemName; ?></p>
            <p><b>Price:</b> <?php echo '$' . $itemPrice . ' ' . $currency; ?></p>
        </div>
        <div class="panel-body">
            <!-- Display status message -->
            <div id="paymentResponse" class="hidden"></div>

            <!-- Set up a container element for the button -->
            <div id="paypal-button-container"></div>
        </div>
    </div>
    <script>
        paypal.Buttons({
            // Sets up the transaction when a payment button is clicked
            createOrder: (data, actions) => {
                return actions.order.create({
                    "purchase_units": [{
                        "custom_id": "<?php echo ($itemNumber); ?>",
                        "description": "<?php echo ($itemName); ?>",
                        "amount": {
                            "currency_code": "<?php echo ($currency); ?>",
                            "value": <?php echo ($itemPrice); ?>,
                            "breakdown": {
                                "item_total": {
                                    "currency_code": "<?php echo($currency); ?>",
                                    "value": <?php echo ($itemPrice); ?>
                                }
                            }
                        }
                    }]
                })
            }
        })
    </script>
</body>

</html>