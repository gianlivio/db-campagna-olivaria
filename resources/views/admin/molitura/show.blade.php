@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="mb-3">Dettagli Molitura</h1>
            <table class="table table-striped">
                <tr>
                    <th>ID:</th>
                    <td>{{ $molitura->id }}</td>
                </tr>
                <tr>
                    <th>Data:</th>
                    <td>{{ $molitura->data }}</td>
                </tr>
                <tr>
                    <th>Frantoio:</th>
                    <td>{{ $molitura->frantoio }}</td>
                </tr>
                <tr>
                    <th>Terreno:</th>
                    <td>{{ $molitura->terreno }}</td>
                </tr>
                <tr>
                    <th>KG Olive:</th>
                    <td>{{ $molitura->kg_olive }}</td>
                </tr>
                <tr>
                    <th>Varietà:</th>
                    <td>{{ $molitura->varieta }}</td>
                </tr>
                <tr>
                    <th>Litri Olio:</th>
                    <td>{{ $molitura->litri_olio }}</td>
                </tr>
                <tr>
                    <th>Resa:</th>
                    <td>{{ $molitura->resa }}%</td>
                </tr>
            </table>
            <a href="{{ route('admin.molitura.edit', $molitura->id) }}" class="btn btn-warning">Modifica</a>
            <a href="{{ route('admin.molitura.index') }}" class="btn btn-secondary">Indietro</a>
        </div>
    </div>
</div>
@endsection