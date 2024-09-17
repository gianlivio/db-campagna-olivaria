@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="mb-3">Dettagli Vendita</h1>
            <table class="table table-striped">
                <tr>
                    <th>ID:</th>
                    <td>{{ $vendita->id }}</td>
                </tr>
                <tr>
                    <th>Nome Cliente:</th>
                    <td>{{ $vendita->nome_cliente }}</td>
                </tr>
                <tr>
                    <th>Numero:</th>
                    <td>{{ $vendita->numero }}</td>
                </tr>
                <tr>
                    <th>Email:</th>
                    <td>{{ $vendita->email }}</td>
                </tr>
                <tr>
                    <th>Quantità Ordinata:</th>
                    <td>{{ $vendita->quantita_ordinata }}</td>
                </tr>
                <tr>
                    <th>Costo Imbottigliamento:</th>
                    <td>{{ $vendita->costo_imbottigliamento }}</td>
                </tr>
                <tr>
                    <th>Costo Spedizione:</th>
                    <td>{{ $vendita->costo_spedizione }}</td>
                </tr>
                <tr>
                    <th>Incasso:</th>
                    <td>{{ $vendita->incasso }}</td>
                </tr>
                <tr>
                    <th>Indirizzo di Spedizione:</th>
                    <td>{{ $vendita->indirizzo_spedizione }}</td>
                </tr>
            </table>
            <a href="{{ route('admin.vendite.edit', $vendita->id) }}" class="btn btn-warning">Modifica</a>
            <a href="{{ route('admin.vendite.index') }}" class="btn btn-secondary">Indietro</a>
        </div>
    </div>
</div>
@endsection