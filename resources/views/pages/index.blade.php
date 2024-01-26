@extends('layouts.layout')
@section('title', "Detail d'hotel")
@section('content')
    <h1>Hotels</h1>

    <table  class="table table-light table-striped shadow-lg p-3 bg-white rounded">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Addresse</th>
            <th>Ville</th>
            <th>Etat</th>
            <th>Pays</th>
            <th>Code postal</th>
            <th>Numéro de télèphone</th>
            <th>Email</th>
            <th>Image</th>
            <th>
                Action
            </th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>ID</td>
            <td>Nom</td>
            <td>Addresse</td>
            <td>Ville</td>
            <td>Etat</td>
            <td>Pays</td>
            <td>Code postal</td>
            <td>Numéro de télèphone</td>
            <td>Email</td>
            <td>Image</td>
            <td>
                Action
            </td>
        </tr>
        <tr>
            <td>ID</td>
            <td>Nom</td>
            <td>Addresse</td>
            <td>Ville</td>
            <td>Etat</td>
            <td>Pays</td>
            <td>Code postal</td>
            <td>Numéro de télèphone</td>
            <td>Email</td>
            <td>Image</td>
            <td>
                Action
            </td>
        </tr>
        </tbody>
    </table>
    <a href="{{route("hotel.create")}}" type="button" class="btn btn-primary">Ajouter</a>
@endsection
