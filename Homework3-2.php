<?php


$n = 30;


$data = array();
for ($i = 0; $i < $n; $i++) {
    $data[$i] = rand(10, 100); 
}


echo "생성된 랜덤 정수: ";
foreach ($data as $number) {
    echo $number . " ";
}


sort($data);


echo "\n올림차순으로 소팅한 결과: ";
foreach ($data as $number) {
    echo $number . " ";
}

?>