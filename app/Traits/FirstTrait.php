<?php

namespace App\Traits;

use App\Models\User;

trait FirstTrait{

    public function getall($getall){

    return $getall::all();

    }




}
