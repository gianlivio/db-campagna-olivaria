@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="mb-3">Lista Spese Breve Termine</h1>
            <a href="{{ route('admin.spese_breve_termine.create') }}" class="btn btn-primary mb-3">Aggiungi Spesa</a>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Molitura</th>
                        <th>Operai</th>
                        <th>Benza</th>
                        <th>Spedizioni</th>
                        <th>Imbottigliamento</th>
                        <th>Azioni</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($speseBreveTermine as $spesa)
                        <tr>
                            <td>{{ $spesa->id }}</td>
                            <td>{{ $spesa->molitura }}</td>
                            <td>{{ $spesa->operai }}</td>
                            <td>{{ $spesa->benza }}</td>
                            <td>{{ $spesa->spedizioni }}</td>
                            <td>{{ $spesa->imbottigliamento }}</td>
                            <td>
                                <a href="{{ route('admin.spese_breve_termine.show', $spesa->id) }}" class="btn btn-info btn-sm">Visualizza</a>
                                <a href="{{ route('admin.spese_breve_termine.edit', $spesa->id) }}" class="btn btn-warning btn-sm">Modifica</a>
                                <form action="{{ route('admin.spese_breve_termine.destroy', $spesa->id) }}" method="POST" style="display:inline-block;">
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