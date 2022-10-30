<?php

namespace App\classes;

class Index
{
    public function __construct()
    {
        header("location: action.php?page=Home");
    }
}