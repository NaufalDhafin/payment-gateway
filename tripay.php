<?php
//Jasa Pemuatan Website
//Jasa Intregrasi Website
//Jasa Pembuatan fitur dll
//083191910986


$apiKey       = 'DEV-pGrevoZ3SBo2vCiyGQNN7a5rzPoKbZTEIaKc3zkw'; //Masukan Apikey Tripay Kamu
$privateKey   = 'ySD4N-i9pJt-Kle7p-iAxAF-6lIUc'; //Masukan Private_key Tripay Kamu
$merchantCode = 'T24688'; //Masukan Marchant Kode Tripay Kamu
$merchantRef  = '280905'; // No Referensi creat dri website kamu
$amount       = 50000; // Nominal request total pembayaran

$data = [
    'method'         => 'DANA', //bisa custom saya contohkan BRI sesuikan dengan nama channel pembayran tripay aja
    'merchant_ref'   => $merchantRef,
    'amount'         => $amount,
    'customer_name'  => 'Nama Pelanggan',
    'customer_email' => 'emailpelanggan@domain.com',
    'customer_phone' => '083191910986',
    'order_items'    => [
        [
            'sku'         => 'Contoh-Kode',
            'name'        => 'naon weh',
            'price'       => 150000,
            'quantity'    => 1
        ]
    ],
    'return_url'   => 'https://pay.dhafin.my.id/callback.php', //Isi Alamat Url Callback Untuk Menerima Request Yang Kamu Butuhkan
    'expired_time' => (time() + (24 * 60 * 60)), // 24 jam
    'signature'    => hash_hmac('sha256', $merchantCode.$merchantRef.$amount, $privateKey)
];

$curl = curl_init();

curl_setopt_array($curl, [
    CURLOPT_FRESH_CONNECT  => true,
    CURLOPT_URL            => 'https://tripay.co.id/api-sandbox/transaction/create', // Ini Kita Tes Mode Live / Produktion Ya
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

//INI BAGIAN YANG KAMU PERLUKAN SAYA HANYA MENCONTOHKAN CARA AMBIL DATA PENTING YAITU ID REFERENCE DAN TOTAL AMAOUNT DLL SESUAIKAN DENGAN KEBUTUHANMU YA GAES

$ambil_reference = $responese['data']['reference'];
$ambil_merchant_ref = $responese['data']['merchant_ref'];
$ambil_payment_name = $responese['data']['payment_name'];
$ambil_amount = $responese['data']['amount'];
$ambil_total_fee = $responese['data']['total_fee'];
$ambil_checkout_url = $responese['data']['checkout_url'];
$ambil_status = $responese['data']['status'];

header("location:$ambil_checkout_url");

?>

ID REF : <?php echo $ambil_reference;?> <br>
ID REF Marchant : <?php echo $ambil_merchant_ref;?> <br>
Metode : <?php echo $ambil_payment_name;?> <br>
Jumlah : <?php echo $ambil_amount;?> <br>
Fee Pajak : <?php echo $ambil_total_fee;?> <br>
Link Pembayaran : <?php echo $ambil_checkout_url;?> <br>
STATUS : <?php echo $ambil_status;?> <br>
