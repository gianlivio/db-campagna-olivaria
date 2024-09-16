@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="mb-3">Lista Molitura</h1>
            <a href="{{ route('admin.molitura.create') }}" class="btn btn-primary mb-3">Aggiungi Molitura</a>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Data</th>
                        <th>Frantoio</th>
                        <th>Terreno</th>
                        <th>KG Olive</th>
                        <th>Varietà</th>
                        <th>Litri Olio</th>
                        <th>Resa</th>
                        <th>Azioni</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($molitura as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->data }}</td>
                            <td>{{ $item->frantoio }}</td>
                            <td>{{ $item->terreno }}</td>
                            <td>{{ $item->kg_olive }}</td>
                            <td>{{ $item->varieta }}</td>
                            <td>{{ $item->litri_olio }}</td>
                            <td>{{ $item->resa }}</td>
                            <td>
                                <a href="{{ route('admin.molitura.show', $item->id) }}" class="btn btn-info btn-sm">Visualizza</a>
                                <a href="{{ route('admin.molitura.edit', $item->id) }}" class="btn btn-warning btn-sm">Modifica</a>
                                <form action="{{ route('admin.molitura.destroy', $item->id) }}" method="POST" style="display:inline-block;">
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