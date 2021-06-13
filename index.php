<?php
include 'App/counter.php';
use App\Counter;

$counter = new Counter();
print_r($counter->count1To100());