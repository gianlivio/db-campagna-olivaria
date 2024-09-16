@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="mb-3">Lista Spese Lungo Termine</h1>
            <a href="{{ route('admin.spese_lungo_termine.create') }}" class="btn btn-primary mb-3">Aggiungi Spesa</a>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Descrizione</th>
                        <th>Importo</th>
                        <th>Azioni</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($speseLungoTermine as $spesa)
                        <tr>
                            <td>{{ $spesa->id }}</td>
                            <td>{{ $spesa->descrizione }}</td>
                            <td>{{ $spesa->importo }}</td>
                            <td>
                                <a href="{{ route('admin.spese_lungo_termine.show', $spesa->id) }}" class="btn btn-info btn-sm">Visualizza</a>
                                <a href="{{ route('admin.spese_lungo_termine.edit', $spesa->id) }}" class="btn btn-warning btn-sm">Modifica</a>
                                <form action="{{ route('admin.spese_lungo_termine.destroy', $spesa->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Elimina</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection