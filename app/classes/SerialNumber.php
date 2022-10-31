<?php

namespace App\classes;

class SerialNumber
{
    public $startingNumber;
    public $endingNumber;
    public $serialData = [];
    public $serialResult;


    public function __construct($post) {
        $this->startingNumber = $post['start_num'];
        $this->endingNumber   = $post['end_num'];
    }

    public function serialNumberResult() {

        for($i = $this->startingNumber; $i <= $this->endingNumber; $i++ ) {
           array_push($this->serialData , $i);
        }

        return $this->serialData;
    }
}