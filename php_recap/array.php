<?php 

$data_array=[
    ["siswa","mentor"], // Ordered
    ["rukan" => "GreenLake City","kota" => "Tangerang"] // Assosiatif
];

foreach ($data_array as $key) {
    // echo gettype($key);
    if(is_scalar($key))
    {
        echo gettype($key). " Ini Bertype Scalar ";
    } else {
        echo gettype($key). " Ini tidak bertype ";
    }
}