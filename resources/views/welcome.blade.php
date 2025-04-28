@extends('layout.app')


@section('content')
    <div class="">
        <h1 class="text-gray-800 text-2xl font-bold text-center ">SISTEMA DE VOTAÇÃO</h1>
        <a href="/criar-enquete" class="text-purple-600 hover:text-purple-800 block text-center">Criar uma enquete</a>

       @livewire('Status', ['polls' => $polls])

    </div>
@endsection

