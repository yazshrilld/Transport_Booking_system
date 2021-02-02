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