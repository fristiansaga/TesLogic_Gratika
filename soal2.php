<?php
function pattern_count($text, $pattern) {
    $textLength = count($text);
    $patternLength = count($pattern);
    $count = 0;
  
    for ($i = 0; $i <= $textLength - $patternLength; $i++) {
        $match = true;
      
        for ($j = 0; $j < $patternLength; $j++) {
            if ($text[$i + $j] !== $pattern[$j]) {
                $match = false;
                break;
            }
        }
      
        if ($match) {
            $count++;
        }
    }
  
    return $count;
}

$text = "jakarta dan palangkaraya";
$pattern = "kar";
$jumlahPola = pattern_count(str_split($text), str_split($pattern));

echo "Jumlah pola '$pattern' dalam teks '$text' adalah $jumlahPola.";
