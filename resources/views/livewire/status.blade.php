<div>
    <ul class="flex gap-4 justify-center mt-5 ">
        <li>
            <p class="cursor-pointer {{ $status === 'all' ? 'text-emerald-800 font-semibold' : 'text-emerald-500' }}" wire:click="onChangeStatus('all')">
                Todas
            </p>
        </li>
        <li>
            <p class="cursor-pointer {{ $status === 'Não iniciado' ? 'text-emerald-800 font-semibold' : 'text-emerald-500' }}" wire:click="onChangeStatus('Não iniciado')">
                Não iniciada
            </p>
        </li>
        <li>
            <p class="cursor-pointer {{ $status === 'Em andamento' ? 'text-emerald-800 font-semibold' : 'text-emerald-500' }}" wire:click="onChangeStatus('Em andamento')">
                Iniciada
            </p>
        </li>
        <li>
            <p class="cursor-pointer {{ $status === 'Finalizado' ? 'text-emerald-800 font-semibold' : 'text-emerald-500' }}" wire:click="onChangeStatus('Finalizado')">
                Finalizadas
            </p>
        </li>
    </ul>
    @foreach($polls as $poll)
    @if($status == $poll->status || $status == "all")
        <div class="mt-5 flex flex-col gap-5">
                <div class="flex flex-col gap-4 bg-white border-gray-200 p-2">
                    <div class="text-gray-800">
                        <p>{{$poll->title}}</p>
                        <p class="text-sm">inicio: {{ date('d/m/Y', strtotime($poll->start_date)) }}</p>
                        <p class="text-sm">Fim: {{ date('d/m/Y', strtotime($poll->end_date)) }}</p>
                        <p class="text-sm">Status: <strong>{{$poll->status}}</strong></p>
                    </div>
                    <div>
                        <a href={{'/votar/'.$poll->id}} class="text-purple-600 hover:text-purple-800">Votar agora</a>
                        <form action="{{ route('delete-poll', $poll->id)}}" method="POST">
                            @csrf
                            <button class="mt-3 bg-red-500 cursor-pointer text-white p-2 rounded-sm">Deletar Enquete</button>
                        </form>
                    </div>
                </div>
            </div>
            @endif
    @endforeach
</div>
