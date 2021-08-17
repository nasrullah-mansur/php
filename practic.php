<?php
include 'practice_2.php';
use App\User;
class Cont {
    public function test() {
        // return User::all();
    }
} 

$output = new User();

echo $output->all();
