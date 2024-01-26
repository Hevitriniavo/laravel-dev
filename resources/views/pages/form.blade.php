@extends("layouts.layout")

@section('title', $hotel->exists ? "Mise à jour d'une hôtel" : "Ajouter d'une hotel")

@section('content')
    <div class="container m-5 bg-transparent">
        <h1 class="text-center w-75 mb-5">{{ $hotel->exists ? "Modifier" : "Ajouter" }} Hôtel</h1>
        <form  action="{{ route($hotel->exists ? 'hotel.update' : 'hotel.store', $hotel) }}" method="POST" class="w-75 vstack" enctype="multipart/form-data">
            @csrf
            @method($hotel->exists ? 'PUT' : 'POST')

            <div class="row">
                <x-input :colSize="6" name="name" label="Nom d'hôtel" type="text" :value="$hotel->name" />
                <x-input :colSize="6" name="email" label="Email" type="email" :value="$hotel->email" />
            </div>
            <div class="row">
                <x-input :colSize="4" name="city" label="Ville" type="text" :value="$hotel->city" />
                <x-input :colSize="4" name="state" label="État" type="text" :value="$hotel->state" />
                <x-input :colSize="4" name="country" label="Pays" type="text" :value="$hotel->country" />
            </div>
            <x-input :colSize="12" name="address" label="Adresse d'hôtel" type="textarea" :value="$hotel->address" />

            <div class="row">
                <x-input :colSize="6" name="phone_number" label="Numéro de téléphone" type="text" :value="$hotel->phone_number" />
                <x-input :colSize="6" name="postal_code" label="Code postal" type="text" :value="$hotel->postal_code" />
            </div>
            <x-input :colSize="12" name="url" label="Image" type="file" :currentValue="$hotel->url" />

            <x-button type="submit" color="primary" label="{{ $hotel->exists ? 'Modifier' : 'Créer' }}" />
        </form>
    </div>
@endsection
