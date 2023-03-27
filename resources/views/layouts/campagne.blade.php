@extends('layouts.master')
@section('content')
<h2>Liste des campagnes</h2>
<table>
    <tr>
        <td>Nom Campagne</td>
        <td>Code Analytique</td>
        <td>Date de debut</td>
        <td>Date de fin</td>
        <td>Responsable de comte</td>
        <td>Saisie libre</td>
        <td>Heure nuit</td>
        <td>Type de planification </td>
    </tr>
    @if($campagnes)
    @foreach($campagnes as $campagne)
    <tr>
                <td>{{ $campagne->name }}</td>
                <td>{{ $campagne->code_analy }}</td>
                <td>{{ $campagne->date_debut }}</td>
                <td>{{ $campagne->date_fin }}</td>
                <td>{{ $campagne->resp_comte }}</td>
                <td>{{ $campagne->saisie_libre }}</td>
                <td>{{ $campagne->heure_nuit }}</td>
                <td>{{ $campagne->type_planning }}</td>
            </tr>
            @endforeach
            @else
            @endif

</table>
@endsection