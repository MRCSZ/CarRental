@extends('layout.main')

@section('title', 'Użytkownik')

@section('sidebar')
    @parent
@endsection

@section('content')
    <div class="card">
        <h5 class="card-header">{{ $user['name'] }}</h5>
        <div class="card-body">
            <ul>
                <li>Id: {{ $user['id'] }}</li>
                <li>Imię: {{ $user['firstName'] }}</li>
                <li>Nazwisko: {{ $user['lastName'] }}</li>
                <li>Miasto: {{ $user['city'] }}</li>
                <li>Wiek: {{ $user['age'] }}</li>
                <li>Marka: {{ $user['brand'] }}</li>
            </ul>
            <a href="{{ route('get.users.list') }}" class="btn btn-light">Lista użytkowników</a>
        </div>
    </div>
@endsection
