@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-4">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}

                        <!-- Bottone per accedere all'index di Molitura -->
                        <a href="{{ route('admin.molitura.index') }}" class="btn btn-primary mt-3">
                            Vai a Moliture
                        </a>

                        <!-- Bottone per accedere all'index di Spese Breve Termine -->
                        <a href="{{ route('admin.spese_breve_termine.index') }}" class="btn btn-secondary mt-3">
                            Vai a Spese Breve Termine
                        </a>

                        <a href="{{ route('admin.spese_lungo_termine.index') }}" class="btn btn-success mt-3">
                            Vai a Spese Lungo Termine
                        </a>

                        <a href="{{ route('admin.vendite.index') }}" class="btn btn-success mt-3">
                            Vai a Vendite
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection