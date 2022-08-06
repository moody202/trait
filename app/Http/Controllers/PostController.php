<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Traits\FirstTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    use FirstTrait;
    public function index(){
        // $users = User::all();
        // return $users;

        // $users= $this->getall(new User());

        // return $users;

        $users= User::where('name', getName())->get();

        return $users;

    }
}
