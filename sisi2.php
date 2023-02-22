<?php

//sisi 2
// $json = "[1,2,3,4,5]";
// echo $json;
// $e = json_decode($json);

// echo $e[0];


// $json = '{"data1":1,"data2":2,"data3":3}';

// $e = json_decode($json);

// echo $e->data1;


// $json = '[{"data1":{"data1":1,"data2":2,"data3":3,"data4":4},"data2":[1,2,3,4,5],"data3":3,"data4":4},{"data1":1,"data2":2,"data3":3,"data4":4}]';
// $e = json_decode($json);

// // echo $e[0]->data2[4];
// echo $e[0]->data1->data4;





$json = "[1,2,3,4,5]";
$e = json_decode($json);

foreach ($e as $d) {
    echo $d;
    echo "<br>";
}


echo "<br>";
echo "<br>";
echo "<br>";

$json = '[1,2,3,4,5]';

$e = explode(",", $json);

foreach ($e as $d) {
    echo str_replace(']', '', str_replace('[', '', $d));
    echo "<br>";
}
