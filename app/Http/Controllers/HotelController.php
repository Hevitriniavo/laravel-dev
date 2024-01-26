<?php

namespace App\Http\Controllers;

use App\Http\Requests\HotelRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class HotelController extends Controller
{

    public function index():View {
        return view("pages.index");
    }

    public function create():View {

        return view("pages.create");
    }
    public function store(HotelRequest $request):RedirectResponse | View {
        dd($request->validated());
        return view("pages.index");
    }
}
