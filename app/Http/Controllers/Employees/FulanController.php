<?php

namespace App\Http\Controllers\Employees;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FulanController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth:employee');
    // }
    public function index()
    {
        return view('employees.fulan.index');
    }
}
