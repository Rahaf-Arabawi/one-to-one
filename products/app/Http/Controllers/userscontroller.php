<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\role;
use App\Models\User;
use App\Models\phones;
use Illuminate\Http\Request;

class userscontroller extends Controller
{
    public function index(){
        // $phone = phones::find(1)->user;
        // return $phone;

        // $user=User::find(1);
        // return $user;
        // return $user->rolse;

        $role = role::find(2);
        return $role->users;
    }
}
