<?php

namespace App\Http\Controllers;

use App\Http\Requests\HotelRequest;
use App\Models\Hotel;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class HotelController extends Controller
{

    public function index():View
    {
        return view("pages.index");
    }

    public function create(): View
    {

        return view("pages.create", [
            'hotel' => new Hotel()
        ]);
    }

    public function update(Hotel $hotel): View
    {
        return view("pages.update");
    }

    public function store(HotelRequest $request):RedirectResponse | View
    {
        Hotel::create($this->extractData(new Hotel(), $request));
        return view("pages.index");
    }

    private function extractData(Hotel $hotel, HotelRequest $request): array
    {
        $data = $request->validated();
        /**
         * @var UploadedFile|null
         */
        $image = $request->validated("url");
        if ($image === null || $image->getError()){
            return $data;
        }
        if ($hotel->url) {
            Storage::disk("public")->delete($hotel->url);
        }
        $data['url'] =$image->store("blog", "public");

        return $data;
    }
}
