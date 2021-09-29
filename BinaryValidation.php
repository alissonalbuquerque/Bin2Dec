<?php

namespace Bin2Dec;

class BinaryValidation {

    public static function validate(string $binary) {

        for($i = 0; $i < strlen($binary); $i++) {
            if($binary[$i] !== '0' and $binary[$i] !== '1') {
                return false;
            }
        }

        return true;
    }

}
