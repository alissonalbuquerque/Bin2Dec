<?php

namespace Bin2Dec;

class BinToDec {

    public static function binToDec(string $binary) {
        $number_decimal = 0;
        $binary_reverse = strrev($binary);

        for($i = 0; $i < strlen($binary_reverse); $i++) {
            if($binary_reverse[$i] == '1') {
                $number_decimal += pow(2, $i);
            }
        }

        return $number_decimal;
    }

}
