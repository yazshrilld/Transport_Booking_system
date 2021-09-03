<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form id='payform' method='POST' action='https://voguepay.com/pay/'>
        <?php // this helps to print out your row print_r($row); ?>
        <input type='hidden' name='v_merchant_id' value='DEMO' />
        <input type='hidden' name='merchant_ref' value='<?php echo $row[2]; ?>' />
        <input type='hidden' name='memo' value='<?php echo $row[3] . ' Booking Ticket' ?>' />
        <input type='hidden' name='cur' value='NGN' />
        <input type="hidden" name='success_url' value='http://localhost/Transport_Project/admin/successURL.php' />
        <input type='hidden' name='developer_code' value='pq7778ehh9YbZ' />
        <input type='hidden' name='store_id' value='25' />
        <input type='hidden' name='name' value='<?php echo $row[3]; ?>'/>
        <input type='hidden' name='total' value='<?php echo $row[7]; ?>' />
        <input type='hidden' name='email' value='<?php echo $row[6]; ?>'/>
        <input type='hidden' name='phone' value= '<?php echo $row[5]; ?>'/>
        <input name ='v_submit' type='image' src='https://voguepay.com/images/buttons/make_payment_blue.png' alt='Submit' />
    </form> 
</body>
</html>