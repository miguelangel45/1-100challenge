<?php
namespace App;

class Counter
{
    public $count;
    public function __construct()
    {
        $this->count = [];
    }

    public function count1To100(){
        for ($i=1; $i <= 100; $i++){
            switch ($i){
                case ($i % 3 == 0 && $i % 5 == 0):
                    array_push($this->count, "integraciones");
                    //print_r();
                    break;
                case ($i % 3 == 0):
                    array_push($this->count, "falabella");
                    break;
                case ($i % 5 == 0):
                    array_push($this->count, "IT");
                    break;
                default:
                    array_push($this->count, $i);
                    break;
            }
        }
        return $this->count;
    }
}