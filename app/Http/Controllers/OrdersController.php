<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function index() {
        //return 'Mabuhay!';
        return view('pages.orders');
    }
}