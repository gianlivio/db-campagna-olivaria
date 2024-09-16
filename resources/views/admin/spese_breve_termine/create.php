@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="mb-3">Aggiungi Spesa Breve Termine</h1>
            <form action="{{ route('admin.spese_breve_termine.store') }}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label for="molitura">Molitura</label>
                    <input type="number" class="form-control" id="molitura" name="molitura" required>
                </div>
                <div class="form-group mb-3">
                    <label for="operai">Operai</label>
                    <input type="number" class="form-control" id="operai" name="operai" required>
                </div>
                <div class="form-group mb-3">
                    <label for="benza">Benza</label>
                    <input type="number" class="form-control" id="benza" name="benza" required>
                </div>
                <div class="form-group mb-3">
                    <label for="spedizioni">Spedizioni</label>
                    <input type="number" class="form-control" id="spedizioni" name="spedizioni" required>
                </div>
                <div class="form-group mb-3">
                    <label for="imbottigliamento">Imbottigliamento</label>
                    <input type="number" class="form-control" id="imbottigliamento" name="imbottigliamento" required>
                </div>
                <button type="submit" class="btn btn-success">Salva</button>
            </form>
        </div>
    </div>
</div>
@endsection