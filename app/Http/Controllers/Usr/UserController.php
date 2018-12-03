<?php

namespace App\Http\Controllers\Usr;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function cabinet()
    {
        return view('user.cabinet');
    }
}
