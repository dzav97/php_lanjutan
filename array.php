<?php
// Membuat array dengan index "nama" dan "umur"
    $data = [
        ["nama" => "Jaehyun", "umur" => 27],
        ["nama" => "Jaemin", "umur" => 24],
        ["nama" => "Haechan", "umur" => 24],
        ["nama" => "Wonwoo", "umur" => 28],
        ["nama" => "Eunwoo", "umur" => 27],
        ["nama" => "Soobin", "umur" => 24],
        ["nama" => "Haruto", "umur" => 20],
        ["nama" => "Baekhyun", "umur" => 32],
        ["nama" => "Sunghoon", "umur" => 22],
        ["nama" => "Hanbin", "umur" => 23],
        ["nama" => "Yujin", "umur" => 17],
        ["nama" => "Zhanghao", "umur" => 24],
        ["nama" => "LeeKnow", "umur" => 26],
        ["nama" => "Seungmin", "umur" => 24],
        ["nama" => "Younghoon", "umur" => 24]
    ];

    // Konversi array ke JSON
    $jsonData = json_encode($data);

    // Tampilkan JSON
    echo $jsonData;
?>
