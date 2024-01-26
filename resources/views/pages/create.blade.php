@extends("layouts.layout")

@section('title', "Ajouter d'une hotel")

@section('content')
    <div class="container m-5 bg-transparent">
        <h1 class="text-center w-75 mb-5">Ajouter Hotel</h1>
        <form action="" method="POST" class="w-75 vstack" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <x-input :colSize="6" name="name" label="Nom d'hôtel" type="text" />
                <x-input :colSize="6" name="email" label="Email" type="email" />
            </div>
            <div class="row">
                <x-input :colSize="4" name="city" label="Ville" type="text" />
                <x-input :colSize="4" name="state" label="état" type="text" />
                <x-input :colSize="4" name="country" label="Pays" type="text" />
            </div>
            <x-input :colSize="12" name="address" label="Adrresse d'hotel" type="textarea" />

            <div class="row">
                <x-input :colSize="6" name="phone_number" label="Numero de télèphone" type="text" />
                <x-input :colSize="6" name="postal_code" label="Code postal:" type="text" />
            </div>
            <x-input :colSize="12" name="url" label="Image" type="file" />
            <x-button type="submit" color="primary" label="Créer" />
        </form>
    </div>

@endsection
