@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="mb-3">Modifica Spesa Lungo Termine</h1>
            <form action="{{ route('admin.spese_lungo_termine.update', $spesa->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group mb-3">
                    <label for="descrizione">Descrizione</label>
                    <input type="text" class="form-control" id="descrizione" name="descrizione" value="{{ $spesa->descrizione }}" required>
                </div>
                <div class="form-group mb-3">
                    <label for="importo">Importo</label>
                    <input type="number" step="0.01" class="form-control" id="importo" name="importo" value="{{ $spesa->importo }}" required>
                </div>
                <button type="submit" class="btn btn-warning">Aggiorna</button>
            </form>
        </div>
    </div>
</div>
@endsection
