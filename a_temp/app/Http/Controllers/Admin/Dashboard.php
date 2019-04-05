<?php

namespace Expert\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Expert\Http\Controllers\Controller;

class Dashboard extends Controller
{
    //
    public function show()
    {
        return view('dashboard.show');
    }
}
