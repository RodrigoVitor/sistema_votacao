@extends('layout.app')

@section('content')
    <h1 class="text-gray-800 text-2xl font-bold text-center ">SISTEMA DE VOTAÇÃO</h1>
    <a href="/" class="text-purple-600 hover:text-purple-800 block text-center">Voltar</a>   
    <div class="flex flex-col gap-4 bg-white border-gray-200 p-2">
        <div class="text-gray-800">
            <p class="font-bold md:text-2xl">{{$poll->title}}</p>
            <p class="text-sm mt-2">inicio: {{date('d/m/Y', strtotime($poll->start_date))}}</p>
            <p class="text-sm mt-2">Fim: {{date('d/m/Y', strtotime($poll->end_date))}}</p>
            <p class="text-sm mt-2">Status: {{$poll->status}}</p>
            @livewire('vote-form', ['poll' => $poll, 'total' => $total])
        </div>
    </div>
@endsection