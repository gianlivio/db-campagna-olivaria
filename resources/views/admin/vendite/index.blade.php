@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="mb-3">Lista Vendite</h1>
            <a href="{{ route('admin.vendite.create') }}" class="btn btn-primary mb-3">Aggiungi Vendita</a>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome Cliente</th>
                        <th>Numero</th>
                        <th>Email</th>
                        <th>Quantità Ordinata</th>
                        <th>Incasso</th>
                        <th>Azioni</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($vendite as $vendita)
                        <tr>
                            <td>{{ $vendita->id }}</td>
                            <td>{{ $vendita->nome_cliente }}</td>
                            <td>{{ $vendita->numero }}</td>
                            <td>{{ $vendita->email }}</td>
                            <td>{{ $vendita->quantita_ordinata }}</td>
                            <td>{{ $vendita->incasso }}</td>
                            <td>
                                <a href="{{ route('admin.vendite.show', $vendita->id) }}" class="btn btn-info btn-sm">Visualizza</a>
                                <a href="{{ route('admin.vendite.edit', $vendita->id) }}" class="btn btn-warning btn-sm">Modifica</a>
                                <form action="{{ route('admin.vendite.destroy', $vendita->id) }}" method="POST" style="display:inline-block;">
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