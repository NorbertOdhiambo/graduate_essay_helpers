<div id="smart-button-container">
    <div style="text-align: center;">
        <div id="paypal-button-container"></div>
    </div>
</div>
<script src="https://www.paypal.com/sdk/js?client-id=AYnLxsDAx9N6OeYbRJ85tv2Hg2BtW5LNpuTEoHDxaw7z7M6JsCVLy010_nrDiVv-UJLfI17QvhJOWLNo&currency=USD" data-sdk-integration-source="button-factory"></script>
<script>
var prod_id = <?php echo "$id" ?>;
    function initPayPalButton() {
        paypal.Buttons({
            style: {
                shape: 'rect',
                color: 'gold',
                layout: 'vertical',
                label: 'pay',

            },

            createOrder: function(data, actions) {
                return actions.order.create({
                    purchase_units: [{
                        "description": "Essay writing services",
                        "amount": {
                            "currency_code": "USD",
                            "value": <?php echo $fetch['total'] ?>
                        }
                    }]
                });
            },

            onApprove: function(data, actions) {
                return actions.order.capture().then(function(orderData) {

                    // Full available details
                    // console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));

                    // Show a success message within this page, e.g.
                    const element = document.getElementById('paypal-button-container');
                    var transaction = orderData.purchase_units[0].payments.captures[0];
                    // alert('Transaction ' + transaction.status + ': ' + transaction.id + '\n\nSee console for all available details');

                    element.innerHTML = '';
                    element.innerHTML = '<h4>Thank you for your payment!</h4>';
                    // Or go to another URL:  actions.redirect('thank_you.html');

                    window.location = "../payments/transaction-completed.php?&prdId=" + prod_id + "&orderID=" + data.orderID;


                });
            },

            onError: function(err) {
                console.log(err);
            }
        }).render('#paypal-button-container');
    }
    initPayPalButton();
</script>