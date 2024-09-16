@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="mb-3">Aggiungi Spesa Lungo Termine</h1>
            <form action="{{ route('admin.spese_lungo_termine.store') }}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label for="descrizione">Descrizione</label>
                    <input type="text" class="form-control" id="descrizione" name="descrizione" required>
                </div>
                <div class="form-group mb-3">
                    <label for="importo">Importo</label>
                    <input type="number" step="0.01" class="form-control" id="importo" name="importo" required>
                </div>
                <button type="submit" class="btn btn-success">Salva</button>
            </form>
        </div>
    </div>
</div>
@endsection
