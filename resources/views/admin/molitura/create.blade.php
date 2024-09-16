@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="mb-3">Aggiungi Molitura</h1>
            <form action="{{ route('admin.molitura.store') }}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label for="data">Data <span class="text-danger">*</span></label>
                    <input type="date" class="form-control" id="data" name="data" required>
                </div>
                <div class="form-group mb-3">
                    <label for="frantoio">Frantoio <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="frantoio" name="frantoio" required>
                </div>
                <div class="form-group mb-3">
                    <label for="terreno">Terreno <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="terreno" name="terreno" required>
                </div>
                <div class="form-group mb-3">
                    <label for="kg_olive">KG Olive <span class="text-danger">*</span></label>
                    <input type="number" class="form-control" id="kg_olive" name="kg_olive" required>
                </div>
                <div class="form-group mb-3">
                    <label for="varieta">Varietà <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="varieta" name="varieta" required>
                </div>
                <div class="form-group mb-3">
                    <label for="litri_olio">Litri Olio <span class="text-danger">*</span></label>
                    <input type="number" class="form-control" id="litri_olio" name="litri_olio" required>
                </div>
                <div class="form-group mb-3">
                    <label for="resa">Resa (%) <span class="text-danger">*</span></label>
                    <input type="number" step="0.01" class="form-control" id="resa" name="resa" required>
                </div>
                <button type="submit" class="btn btn-success">Salva</button>
            </form>
        </div>
    </div>
</div>
@endsection