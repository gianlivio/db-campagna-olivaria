@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="mb-3">Dettagli Spesa Lungo Termine</h1>
            <table class="table table-striped">
                <tr>
                    <th>ID:</th>
                    <td>{{ $spesa->id }}</td>
                </tr>
                <tr>
                    <th>Descrizione:</th>
                    <td>{{ $spesa->descrizione }}</td>
                </tr>
                <tr>
                    <th>Importo:</th>
                    <td>{{ $spesa->importo }}</td>
                </tr>
            </table>
            <a href="{{ route('admin.spese_lungo_termine.edit', $spesa->id) }}" class="btn btn-warning">Modifica</a>
            <a href="{{ route('admin.spese_lungo_termine.index') }}" class="btn btn-secondary">Indietro</a>
        </div>
    </div>
</div>
@endsection
