<?php 
$merk = [
    ["Leptop", "Acer Aspire", 7149000],
    ["Leptop", "Asus E402YA", 3499000],
    ["Leptop", "Asus X441BA", 3750000],
    ["Leptop", "HP ProBook 440 G6", 13699000],
    ["Leptop", "DEEL Inspiron 14", 13099000],
    ["Leptop", "Acer Swift3", 7099000],
    ["Leptop", "Apple MacBook Pro 13", 21599000],
    ["Leptop", "Apple MacBook Air 13", 14210000],
    ["Leptop", "Asus ROG Zephyrus Duo 15", 94999000],
    ["Leptop", "Apple Macbook 512GB", 18350000],
    ["HandPhone", "Vivo Y20", 1950000],
    ["HandPhone", "Xiaomi Redmi 9C", 1475000],
    ["HandPhone", "Nokia 5.3", 2899000],
    ["HandPhone", "Realme 7i", 2849000],
    ["HandPhone", "Realme C15", 1500000],
    ["HandPhone", "Samsung Galaxy A10", 1450000],
    ["HandPhone", "OPPO Reno", 4379900],
    ["HandPhone", "Xiaomi Redmi Note 9", 2209000],
    ["HandPhone", "Vivo Y12", 1610000],
    ["HandPhone", "OPPO A52", 2800000],
    ["iPad", "Apple iPad 10.2", 7299000],
    ["iPad", "Apple iPad 12.9", 16396000],
    ["iPad", "Apple iPad 2 Wifi 16GB", 6150000],
    ["iPad", "Apple iPad Wifi 128GB", 5919000],
    ["iPad", "Apple iPad 4 Wifi ", 8450000],
    ["iPad", "Apple iPad Pro 12.9", 11669000],
    ["iPad", "Apple iPad Air Wifi 128GB", 5919000],
    ["iPad", "Apple iPad Mini", 5460000],
    ["iPad", "Apple iPad Pro", 14900000],
];

foreach ($merk as $key => $value) {
    foreach ($value as $key_x => $value_x) {
        // echo $value_x.PHP_EOL;
    }
}

$temp_arr=[];
foreach ($merk as $key => $value) {   
    foreach ($value as $key_x) {
        // var_dump($value_x);
        $temp_arr[]=$value[0];
    }
    // var_dump($key);
}
$tampung=[];
foreach ($temp_arr as $key) {    
    $tampung[]=$key;
}
// var_dump($tampung);
// var_dump($tampung);
$end=array_unique($tampung);
foreach($end as $key)
{
    echo $key.PHP_EOL;
}