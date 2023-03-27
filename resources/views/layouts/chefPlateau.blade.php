@extends('layouts.master')
@section('content')
<h2>Liste des chefs plateau</h2>
<table>
    <tr>
        <td>Nom </td>
        <td>Prenom</td>
        <td>Matricule</td>
        <td>Type</td>
        <td>Etat</td>
        
    </tr>
    @if($chef_plateaus)
    @foreach($chef_plateaus as $chef_plateau)
    <tr>
                <td>{{ $chef_plateau->name }}</td>
                <td>{{ $chef_plateau->prenom }}</td>
                <td>{{ $chef_plateau->matricule }}</td>
                <td>{{ $chef_plateau->type }}</td>
                <td>{{ $chef_plateau->etat }}</td>
            </tr>
            @endforeach
            @else
            @endif

</table>
@endsection