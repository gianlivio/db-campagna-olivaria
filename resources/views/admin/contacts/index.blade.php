@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Contatti Ricevuti</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Messaggio</th>
                <th>Data</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $contact)
                <tr>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->message }}</td>
                    <td>{{ $contact->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
