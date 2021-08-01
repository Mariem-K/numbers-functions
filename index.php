<?php

//$amount = 42;

//$amountInDollar = 42 * 1.14;

function getAmountInDollar($amount) {

    $amountInDollar = $amount * 1.14;

    return $amountInDollar;
}

//$dollar = getAmountInDollar($amount);

//echo $dollar;

//$dollar = getAmountInDollar(123);

//echo $dollar;

//$dollar = getAmountInDollar(10);

//echo $dollar;

//$numberToConvertInDollar = filter_input(INPUT_GET, 'number');

//$dollar = getAmountInDollar($numberToConvertInDollar);

//echo $dollar;

function getAmountInYen($amount) {

    $amountInYen = $amount * 126;

    return $amountInYen;
}

$numberToConvertInYen = filter_input(INPUT_GET, 'number');

$yen = getAmountInYen($numberToConvertInYen);

echo $yen;

