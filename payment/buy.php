<?php
include "../configs/conf.php";

$id     = $_GET['id'];

$query  = $conf->query("SELECT * FROM produk WHERE id = '$id'");
$rows   = $query->fetch_array();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran</title>
    <link rel="stylesheet" href="http://127.0.0.1:5500/assets/styles/pembayaran.css">
</head>

<body>
    <div class="formbold-main-wrapper">
        <div class="formbold-form-wrapper">
            <form action="tripay.php" method="post">
                <div class="formbold-form-step-1 active">
                    <div>
                        <label for="address" class="formbold-form-label"> Nama Lengkap </label>
                        <input type="text" name="username" id="address" placeholder="Naufal Dhafin" class="formbold-form-input" />
                    </div>

                    <br>

                    <div class="formbold-input-flex">
                        <div>
                            <label for="email" class="formbold-form-label"> Whatsapp </label>
                            <input type="number" name="whatsapp" placeholder="08312345678" id="email"
                                class="formbold-form-input" />
                        </div>
                        <div>
                            <label for="dob" class="formbold-form-label"> tenggat Waktu </label>
                            <input type="datetime-local" name="deadline" id="dob" class="formbold-form-input" />
                        </div>
                    </div>

                    <div class="formbold-input-flex">
                        <div>
                            <label for="email" class="formbold-form-label">Tipe</label>
                            <input type="text" name="type" id="email" value="<?= $rows['type']?>" class="formbold-form-input" />
                        </div>
                        <div style="display: none;">
                            <label for="dob" class="formbold-form-label"> Kelas </label>
                            <input type="text" name="nama" value="<?= $rows['nama']?>" id="dob" class="formbold-form-input" />
                        </div>
                        <div>
                            <label for="dob" class="formbold-form-label">Harga</label>
                            <input type="text" name="harga" value="<?= $rows['harga']?>" id="dob" class="formbold-form-input" />
                        </div>
                    </div>
                </div>

                <div class="formbold-form-btn-wrapper">

                    <button class="formbold-btn" type="submit" name="pembayaran">
                        Pembayaran
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_1675_1807)">
                                <path
                                    d="M10.7814 7.33312L7.20541 3.75712L8.14808 2.81445L13.3334 7.99979L8.14808 13.1851L7.20541 12.2425L10.7814 8.66645H2.66675V7.33312H10.7814Z"
                                    fill="white" />
                            </g>
                            <defs>
                                <clipPath id="clip0_1675_1807">
                                    <rect width="16" height="16" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>