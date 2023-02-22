<?php
// $array1D = [1, 2, 3, 4, 5];

// $e = json_encode($array1D);
// echo $e;

// $arrayList = [
//     "data1" => 1,
//     "data2" => 2,
//     "data3" => 3,
// ];

// echo json_encode($arrayList);


$arrayList = [
    [
        "data1" => [
            "data1" => 1,
            "data2" => 2,
            "data3" => 3,
            "data4" => 4,
        ],
        "data2" => [1, 2, 3, 4, 5],
        "data3" => 3,
        "data4" => 4,
    ],
    [
        "data1" => 1,
        "data2" => 2,
        "data3" => 3,
        "data4" => 4,
    ],
];

echo json_encode($arrayList);
