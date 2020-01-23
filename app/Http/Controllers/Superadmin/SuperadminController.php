<?php

namespace App\Http\Controllers\Superadmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SuperadminController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    function index()
    {
        return view('superadmin.dashboard.index');
    }
}
