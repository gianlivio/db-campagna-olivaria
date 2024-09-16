@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="mb-3">Modifica Vendita</h1>
            <form action="{{ route('admin.vendite.update', $vendita->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group mb-3">
                    <label for="nome_cliente">Nome Cliente</label>
                    <input type="text" class="form-control" id="nome_cliente" name="nome_cliente" value="{{ $vendita->nome_cliente }}" required>
                </div>

                <div class="form-group mb-3">
                    <label for="numero">Numero</label>
                    <input type="text" class="form-control" id="numero" name="numero" value="{{ $vendita->numero }}">
                </div>

                <div class="form-group mb-3">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ $vendita->email }}">
                </div>

                <div class="form-group mb-3">
                    <label for="quantita_ordinata">Quantità Ordinata</label>
                    <input type="number" class="form-control" id="quantita_ordinata" name="quantita_ordinata" value="{{ $vendita->quantita_ordinata }}" required>
                </div>

                <div class="form-group mb-3">
                    <label for="costo_imbottigliamento">Costo Imbottigliamento</label>
                    <input type="number" step="0.01" class="form-control" id="costo_imbottigliamento" name="costo_imbottigliamento" value="{{ $vendita->costo_imbottigliamento }}" required>
                </div>

                <div class="form-group mb-3">
                    <label for="costo_spedizione">Costo Spedizione</label>
                    <input type="number" step="0.01" class="form-control" id="costo_spedizione" name="costo_spedizione" value="{{ $vendita->costo_spedizione }}">
                </div>

                <div class="form-group mb-3">
                    <label for="incasso">Incasso</label>
                    <input type="number" step="0.01" class="form-control" id="incasso" name="incasso" value="{{ $vendita->incasso }}" required>
                </div>

                <div class="form-group mb-3">
                    <label for="indirizzo_spedizione">Indirizzo di Spedizione</label>
                    <input type="text" class="form-control" id="indirizzo_spedizione" name="indirizzo_spedizione" value="{{ $vendita->indirizzo_spedizione }}" required>
                </div>

                <button type="submit" class="btn btn-warning">Aggiorna</button>
            </form>
        </div>
    </div>
</div>
@endsection