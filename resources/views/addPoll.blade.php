@extends('layout.app')

@section('content')
    <h1 class="text-gray-800 text-2xl font-bold text-center ">CRIE SUA ENQUETE PERSONALIZADA</h1>
    <a href="/" class="text-purple-600 hover:text-purple-800 block text-center">Voltar</a>

    @livewire("poll-form")
@endsection