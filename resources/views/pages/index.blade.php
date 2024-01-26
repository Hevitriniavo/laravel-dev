@extends('layouts.layout')
@section('title', "Détail d'hotel")
@section('content')
    <h1 class="text-center mb-2">Détail des hoteles</h1>

    @if(session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-light table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Adresse</th>
            <th>Ville</th>
            <th>État</th>
            <th>Pays</th>
            <th>Code postal</th>
            <th>Email</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @forelse($hotels as $hotel)
            <tr>
                <td>{{ $hotel->id }}</td>
                <td>{{ $hotel->name }}</td>
                <td>{{ $hotel->address }}</td>
                <td>{{ $hotel->city }}</td>
                <td>{{ $hotel->state }}</td>
                <td>{{ $hotel->country }}</td>
                <td>{{ $hotel->postal_code }}</td>
                <td>{{ $hotel->email }}</td>
                <td>
                    <img src="{{$hotel->imageUrl()}}" style="width: 45px; object-fit: cover; height: 45px;" alt="{{$hotel->imageUrl()}}">
                </td>
                <td class="text-end">
                    <a href="{{route('hotel.edit', $hotel)}}" class="btn btn-warning btn-sm">Modifier</a>
                    <a href="#" class="btn btn-danger btn-sm">Supprimer</a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="11" class="text-center">Aucun hôtel trouvé.</td>
            </tr>
        @endforelse


        </tbody>
    </table>
    {{$hotels->links()}}
    <div class="text-end">
        <a href="{{ route('hotel.create') }}" type="button" class="btn btn-primary">Ajouter</a>
    </div>
@endsection
