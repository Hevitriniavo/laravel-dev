<?php

namespace App\Http\Controllers;

use App\Http\Requests\HotelRequest;
use App\Models\Hotel;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class HotelController extends Controller
{

    public function index():View
    {
        $hotels = Hotel::query()->orderby('created_at', 'ASC')->paginate(25);
        return view("pages.index", [
            "hotels" => $hotels
        ]);
    }

    public function create(): View
    {

        return view("pages.form", [
            'hotel' => new Hotel()
        ]);
    }

    public function edit(Hotel $hotel): View
    {
        return view("pages.form", [
            'hotel' => $hotel
        ]);
    }


    public function update(Hotel $hotel, HotelRequest $request): View | RedirectResponse
    {
        $validatedData = $this->extractData($hotel, $request);

        $hotel->update($validatedData);

        return redirect()
            ->route('hotel.index')
            ->with('success', 'Hôtel mis à jour avec succès.');
    }

    public function store(HotelRequest $request): RedirectResponse | View
    {
        Hotel::create($this->extractData(new Hotel(), $request));
        return redirect()
            ->route("hotel.index")
            ->with('success', 'Hôtel enregistré avec succès.');
    }

    private function extractData(Hotel $hotel, HotelRequest $request): array
    {
        $data = $request->validated();

        $image = $request->validated("url");
        if ($image === null || $image->getError()) {
            return $data;
        }

        $this->deleteExistingImage($hotel);

        $data['url'] = $image->store("blog", "public");

        return $data;
    }

    private function deleteExistingImage(Hotel $hotel): void
    {
        if ($hotel->url) {
            Storage::disk("public")->delete($hotel->url);
        }
    }
}
