<?php

use Illuminate\Support\Facades\Auth;

function getName(){
    return Auth::user()->name;
}
