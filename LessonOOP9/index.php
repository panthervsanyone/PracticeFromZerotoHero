<?php

require_once "City.php";

$city = [
    new City('Харьков',1451132),
    new City('Киев',2900000),
    new City('Одесса',1000000),
    new City('Днепр',993000),
    new City('Львов',729000)
];

foreach ($city as $cities) {
    echo 'Население города:'.$cities->name . ' ' . $cities->population.' жителей'.'<br>';
}