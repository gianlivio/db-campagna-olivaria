@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="mb-3">Dettagli Spesa Breve Termine</h1>
            <table class="table table-striped">
                <tr>
                    <th>ID:</th>
                    <td>{{ $spesa->id }}</td>
                </tr>
                <tr>
                    <th>Molitura:</th>
                    <td>{{ $spesa->molitura }}</td>
                </tr>
                <tr>
                    <th>Operai:</th>
                    <td>{{ $spesa->operai }}</td>
                </tr>
                <tr>
                    <th>Benza:</th>
                    <td>{{ $spesa->benza }}</td>
                </tr>
                <tr>
                    <th>Spedizioni:</th>
                    <td>{{ $spesa->spedizioni }}</td>
                </tr>
                <tr>
                    <th>Imbottigliamento:</th>
                    <td>{{ $spesa->imbottigliamento }}</td>
                </tr>
            </table>
            <a href="{{ route('admin.spese_breve_termine.edit', $spesa->id) }}" class="btn btn-warning">Modifica</a>
            <a href="{{ route('admin.spese_breve_termine.index') }}" class="btn btn-secondary">Indietro</a>
        </div>
    </div>
</div>
@endsection