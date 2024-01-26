<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HotelController extends Controller
{

    public function index():View {
        return view("pages.index");
    }

    public function create():View {
        return view("pages.create");
    }
    public function store():RedirectResponse | View {
        return view("pages.index");
    }
}
