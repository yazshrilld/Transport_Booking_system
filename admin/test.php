<?php
    $_POST['transaction_id'];// this might not be essential, depending on what your website offers.
?>

<form id='payform' method='POST' action='https://voguepay.com/pay/'>
                                <input type='hidden' name='v_merchant_id' value='demo'/>
                                <input type='hidden' name='merchant_ref' value='234-567-890' />
                                <input type='hidden' name='memo' value='Bulk order from McAckney Web Shop' />
                                <input type='hidden' name='cur' value= 'NGN'/>// 
                                <input type='hidden' name='total' value= '100'/>//this field must be filled with anything > 0
                                <input type='hidden' name='success_url' value= 'http://localhost/yyy.com/dockler_Project/admin_page/successURL.php'/>//this url path is very essential, do well to double check your inputs
                                <input type='image' src='http://voguepay.com/images/buttons/buynow_blue.png' alt='Submit' />
                            </form>
<?php

if(isset($_POST['transaction_id'])) {

    $transaction_id = filter_input(INPUT_POST, 'transaction_id', FILTER_SANITIZE_STRING);
    $transaction_id = $_POST['transaction_id'];

}
// Send request to VoguePay
$data = file_get_contents('https://voguepay.com/?v_transaction_id='.$transaction_id.'&type=json&demo=true');
$arr = json_decode($data, true);
// try if it prints your details
echo '<pre>';
print_r($arr);
echo '</pre>';
die();

$json = file_get_contents('https://voguepay.com/?v_transaction_id=' . $get . '&type=json&demo=true');
        
        $transaction = json_decode($json, true);