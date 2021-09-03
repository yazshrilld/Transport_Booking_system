l
<?php
//set variables
$api = 'https://voguepay.com/api/';
$ref = time();
$task = 'card';
$merchant_id = '9944-00274134';
$my_username = 'username';
$merchant_email_on_voguepay = 'accountemail@gmail.com';
$ref = time().mt_rand(0,9999999);
$command_api_token = 'sdjhsdjysd78df6sdhjsdgfdhdfs';
$hash = hash('sha512',$command_api_token.$task.$merchant_email_on_voguepay.$ref);

$fields['task'] = $task;
$fields['merchant'] = $merchant_id;
$fields['ref'] = $ref;
$fields['hash'] = $hash;

//Compulsory fields
$fields['version'] = 2; //API version
$fields['total'] = 10.00; //rounded to two decimals
$fields['email'] = 'buyer@email.com'; //Email address of card owner
$fields['merchant_ref'] = '12345-009902'; // this will be returned to you on transaction requery
$fields['currency'] = 'GBP'; //supported currencies NGN, USD, GBP, EUR, ZAR, GHS, - more currencies to come
$fields['memo'] = 'Hotel+room+payment'; // description of transaction (Must be encoded)
$fields['referral_url'] = 'http://domain.com/checkout'; //The referrer is the webpage that sends visitors to your site using a link. In other words, it's the webpage that a person was on right before they landed on your page.
$fields['response_url'] = urlencode("http://domain.com/notification"); // Transaction ID is posted to this url (Must be encoded)
$fields['redirect_url'] = urlencode("http://domain.com/redirect"); // Where users will be redirected to after payment (Must be encoded)
$fields['customerAddress'] = '50 Main street, silicon valley'; // address of customer
$fields['customerState'] = 'Lagos'; // state or province of customer
$fields['customerZip'] = '100001'; // zip code of customer
$fields['customerLocation'] = 'NGA'; // country of country - Valid country or valid 3 letter ISO
$fields['firstName'] = 'Jane'; //customer fistname
$fields['lastName'] = 'Ava'; // customer lastname
$fields['customerCity'] = 'LA'; // city of country - valid 2 letter ISO
//riskAssessment
$risk = array (
  'serverIP' => '162.217.145.147',  // server ip
  'domainOrigin' => 'https://domainOrigin.com',  // referring url
  'clientIP' => '129.56.54.126',  // customer ip address
  'transactionOrigin' => 'https://transactionOrigin.com' //Site url of where the transaction was initiated
);

$fields['riskAssessment'] = json_encode($risk);
$fields['phone']='08011111111'; //Phone number of card owner

//Optional fields
$fields['demo']=true;

//Descriptor Information (Optional)
$fields['company']="Buyers Market"; //Company name (MAX 100 characters)
$fields['city']="Ikeja"; //Company city (MAX 100 characters)
$fields['street']="No 6, Broadstreet Avenue"; //Company street address (MAX 100 characters)
$fields['country']='NGA'; // The 3 letter ISO standard alpha country code of the address (MAX 3 characters)

//To tokenize card, 
//$fields['tokenize'] = true;

//To debit an already tokenized card,
//$fields['token'] = '538ab82ac89b'; 

$cardValue['card']['name'] ='vvggccc';
$cardValue['card']['pan'] = '5399832641760040'; //pan of card to be debited
$cardValue['card']['month'] = '05'; //expiry month of card to be debited
$cardValue['card']['year'] = '21'; //expiry year of card to be debited
$cardValue['card']['cvv'] = '100'; //cvv of card to be debited


//public key can be generated under the api section in your voguepay account settings page
$public_key = '-----BEGIN PUBLIC KEY-----
MIICIjANBgkqhkiG9w0BAQEFAAOCAg8AMIICCgKCAgEAps9mAIjPuuCjHu2wsURr
6jQ5za1Wjoxs45fErX+3cWeTTMEfbWT8zO93SN+uI0qIKcAYPYj8iD4SoQyGValy
RP3diWFWZJGJU9uJuTv42dSGD0dnBJkeXEq3m25hwCQxkb7ChIJpPbDNjMFlr6Q/
xE2CD6pzAvGkhqp6yZewjtxCJqpNI5wTb8ZZKlZB3/H7I8saTb7rFA/+lDpiV
L0YzcKWOLmfZJGNJbr35nUj7VlNg2p/GLhrw+fWiHmNiXMGZ3GZp9m/i75vsFU8D
XKSubj6g3tVSs6UmssxrYpDfLg6kr0kW0aKfEMK3YTma/ylE6rxx9lVH3vvWQMmc
txMAKuVVQBaiUAKgaKEBJyO4Wbw+XyxILm7Sg+zQBtxOpS8qsrbwvIXBrA2wJnW/
OfoHlDLlaRSVOnLOX8Jp7LDcpLD0jnxRLaxi54IArJOivGzhdZziiYUlpSFXexSP
bdR076nMG9j78tIPtzTLhetZbc+m0+wu7LKwcB46J9yqO8Hg6QFhgprjt1f7r
sCnEzh9qjbRj1BYNLIZJEwNdDwsGE3WQb0hnK2p0Pzv0Bqn73hSeCyKic2VSmoaC
xrSFVhcJi6Ln2EUE8Qdvfqi711oiTtmgxnyaNNaK8NY3oSplrUimpFkjhwxFpiPr
YKZqxMrRAYrdyhcVGvTuW50CAwEAAQ==
-----END PUBLIC KEY-----
';

// Encrypt cardvalue using the public key
$cardDetails = json_encode($cardValue);
openssl_public_encrypt($cardDetails, $encrypted, $public_key);

$encrypteData = bin2hex($encrypted);

$fields['params'] = $encrypteData;

$fields_string = 'json='.urlencode(json_encode($fields));


//open curl connection
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL, $api);
curl_setopt($ch,CURLOPT_HEADER, false); //we dont need the headers
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);// data coming back is put into a string
curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
curl_setopt($ch,CURLOPT_FOLLOWLOCATION,TRUE);
curl_setopt($ch,CURLOPT_MAXREDIRS,2);
$reply_from_voguepay = curl_exec($ch);//execute post
curl_close($ch);//close connection
//Result is json string so we convert into array
$reply_array = substr($reply_from_voguepay, 3);
//Result is json string so we convert into array
$reply_array = json_decode($reply_array,true);

//Response Codes
// WL001 - Invalid Parameters
// WL002 - Validation Error
// WL003 - Transaction Request Declined
// WL004 - Currency is not allowed
// WL005 - Tokenization failed
// WL006 - Descriptor details not allowed
// WL007 - Invalid Demo card details
// WL3D - 3D Authorization required
// WL008 - Whitelabel not enabled for merchant.
// WL009 - Params field Empty. Kindly check your encryption.
// WL010 - Unable to decrypt request. Kindly check your encryption.
?>