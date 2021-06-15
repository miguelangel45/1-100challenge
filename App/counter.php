<?php

namespace App;
include 'devcoder/DotEnv.php';

use DevCoder\DotEnv;

(new DotEnv(__DIR__ . '/../.env'))->load();

class Counter
{
    public function count1To100(): array
    {
        $count = [];
        for ($i = $this->validateValue(getenv('from'), 1); $i <= $this->validateValue(getenv('to'), 100); $i++) {
            switch ($i) {
                case ($i % 3 == 0 && $i % 5 == 0):
                    array_push($count, "integraciones");
                    //print_r();
                    break;
                case ($i % 3 == 0):
                    array_push($count, "falabella");
                    break;
                case ($i % 5 == 0):
                    array_push($count, "IT");
                    break;
                default:
                    array_push($count, $i);
                    break;
            }
        }
        return $count;
    }

    function validateValue($envVal, $default)
    {
        if ($envVal != '') {
            return $envVal;
        }
        return $default;
    }
}