<?php
function hitungHuruf($input) {
    $counter = [];

    $input = strtolower($input);
 
    foreach (str_split($input) as $letter) {
        if (!isset($counter[$letter])) {
            $counter[$letter] = 0;
        }

        $counter[$letter]++;
    }

    ksort($counter);

    $finalResult = [];
    foreach ($counter as $letter => $count) {
        $letterParts = preg_split('//u', $letter, -1, PREG_SPLIT_NO_EMPTY);
        $finalResult = array_merge($finalResult, $letterParts);
        $finalResult[] = ':';
        $finalResult[] = $count;
        $finalResult[] = ', ';
    }
    array_pop($finalResult);
    array_pop($finalResult);

    return $finalResult;
}

$input = "Indonesia vs Argentina";
$hasil = hitungHuruf($input);

echo "[";
echo implode('', $hasil);
echo "]";
