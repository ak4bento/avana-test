<?php
$str = $_GET['str'];
$index = $_GET['index'];

printf("<p>%s</p>", find($str, $index));

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
