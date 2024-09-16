@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="mb-3">Aggiungi Vendita</h1>
            <form action="{{ route('admin.vendite.store') }}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label for="nome_cliente">Nome Cliente</label>
                    <input type="text" class="form-control" id="nome_cliente" name="nome_cliente" required>
                </div>
                <div class="form-group mb-3">
                    <label for="numero">Numero</label>
                    <input type="text" class="form-control" id="numero" name="numero">
                </div>
                <div class="form-group mb-3">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="form-group mb-3">
                    <label for="quantita_ordinata">Quantità Ordinata</label>
                    <input type="number" class="form-control" id="quantita_ordinata" name="quantita_ordinata" required>
                </div>
                <div class="form-group mb-3">
                    <label for="costo_imbottigliamento">Costo Imbottigliamento</label>
                    <input type="number" step="0.01" class="form-control" id="costo_imbottigliamento" name="costo_imbottigliamento" required>
                </div>
                <div class="form-group mb-3">
                    <label for="costo_spedizione">Costo Spedizione</label>
                    <input type="number" step="0.01" class="form-control" id="costo_spedizione" name="costo_spedizione">
                </div>
                <div class="form-group mb-3">
                    <label for="incasso">Incasso</label>
                    <input type="number" step="0.01" class="form-control" id="incasso" name="incasso" required>
                </div>
                <div class="form-group mb-3">
                    <label for="indirizzo_spedizione">Indirizzo di Spedizione</label>
                    <input type="text" class="form-control" id="indirizzo_spedizione" name="indirizzo_spedizione" required>
                </div>
                <button type="submit" class="btn btn-success">Salva</button>
            </form>
        </div>
    </div>
</div>
@endsection