<?php

namespace App\Http\Controllers\desh;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function pro(){
        return view ('dark_deshbord.home');
    }
}
