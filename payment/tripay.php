<?php

if(isset($_POST['pembayarann'])){

$username   = $_POST['username'];
$Whatsapp   = $_POST['Whatsapp'];
$type       = $_POST['type'];
$nama       = $_POST['nama'];
$harga      = $_POST['harga'];

$apiKey       = 'DEV-di2XdbP6mRPcGmSniqkzujzI07CVv41YK9o9p3Cq';
$privateKey   = 'jJfAt-2aFmg-XTP8S-FEzYA-wx774';
$merchantCode = 'T24688';
$merchantRef  = '280905';
$amount       = 737732;

$data = [
    'method'         => 'DANA',
    'merchant_ref'   => $merchantRef,
    'amount'         => $amount,
    'customer_name'  => "sdsdsd",
    'customer_email' => "naufal280905@gmail.com",
    'customer_phone' => "2433434554",
    'order_items'    => [
        [
            'sku'         => "wewewe",
            'name'        => "wewewewe",
            'price'       => 737732,
            'quantity'    => 1
        ]
    ],
    'return_url'   => '',
    'expired_time' => (time() + (24 * 60 * 60)),
    'signature'    => hash_hmac('sha256', $merchantCode.$merchantRef.$amount, $privateKey)
];

$curl = curl_init();

curl_setopt_array($curl, [
    CURLOPT_FRESH_CONNECT  => true,
    CURLOPT_URL            => 'https://tripay.co.id/api-sandbox/transaction/create',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HEADER         => false,
    CURLOPT_HTTPHEADER     => ['Authorization: Bearer '.$apiKey],
    CURLOPT_FAILONERROR    => false,
    CURLOPT_POST           => true,
    CURLOPT_POSTFIELDS     => http_build_query($data),
    CURLOPT_IPRESOLVE      => CURL_IPRESOLVE_V4
]);

$response = curl_exec($curl);
$responese = json_decode($response, true);

$ambil_reference = $responese['data']['reference'];
$ambil_merchant_ref = $responese['data']['merchant_ref'];
$ambil_payment_name = $responese['data']['payment_name'];
$ambil_amount = $responese['data']['amount'];
$ambil_total_fee = $responese['data']['total_fee'];
$ambil_checkout_url = $responese['data']['checkout_url'];
$ambil_status = $responese['data']['status'];

}
?>

ID REF : <?php echo $ambil_reference;?> <br>
ID REF Marchant : <?php echo $ambil_merchant_ref;?> <br>
Metode : <?php echo $ambil_payment_name;?> <br>
Jumlah : <?php echo $ambil_amount;?> <br>
Fee Pajak : <?php echo $ambil_total_fee;?> <br>
Link Pembayaran : <?php echo $ambil_checkout_url;?> <br>
STATUS : <?php echo $ambil_status;?> <br>