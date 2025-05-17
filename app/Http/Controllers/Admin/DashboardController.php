<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function main(){
        return view('admins.main');
    }

    function tournaments(){
        return view('admins.tournaments');
    }

    function transactions(){
        return view('admins.transactions');
    }

    function users(){
        return view('admins.users');
    }
}
