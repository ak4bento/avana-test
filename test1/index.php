<?php
$str = $_GET['str'] ?? '';
$index = $_GET['index'] ?? '';

if (empty($str) || empty($index)) {
    echo 'Silahan masukkan parameter <br>';
    echo 'Contoh: <br>';
    echo '<a href="http://127.0.0.1:8000/?str=a%20(b%20c%20(d%20e%20(f)%20g)%20h)%20i%20(j%20k)&index=2">Klik</a>';
    exit;
} else {
    printf("<p>%s</p>", find($str, $index));
}

function find($str, $index){
    $closePos = $index;
    $counter = 1;
    if ($str[$index] == '(') {
        while ($counter > 0) {
            $c = $str[++$closePos];
            if ($c == '(') {
                $counter++;
            }
            else if ($c == ')') {
                $counter--;
            }
        }
    } else if ($str[$index] == ')') {
        while ($counter > 0) {
            $c = $str[--$closePos];
            if ($c == '(') {
                $counter--;
            }
            else if ($c == ')') {
                $counter++;
            }
        }
    } else {
        return "Data yang dimasukkan tidak valid";
    }
    return $closePos;
}
