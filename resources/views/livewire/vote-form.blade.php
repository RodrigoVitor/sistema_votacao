<div>
    <form>
        <select 
            name="" 
            id="options" 
            class="block  px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
            wire:model.live="selectedOption"
        >
            <option value="null">Escolha uma opção</option>
            @foreach(json_decode($poll->options) as $option)
                <option value="{{$option}}">{{$option}}</option>
            @endforeach
        </select>
        @if(!$isVoted)
            <button type="button"
                wire:click="store"
                {{ $poll->status !== "Em andamento" ? 'disabled': ''}}
                class="px-4 mt-5 w-32 py-2 bg-emerald-500 text-white rounded-md hover:bg-emerald-600 
                        transition cursor-pointer disabled:cursor-not-allowed disabled:bg-gray-400"
            >
                Votar
            </button>
        @else 
            <button type="button"
                    disabled
                    {{ $poll->status !== "Em andamento" ? 'disabled': ''}}
                    class="px-4 mt-5 w-32 py-2 bg-emerald-500 text-white rounded-md hover:bg-emerald-600 
                            transition cursor-pointer disabled:cursor-not-allowed disabled:bg-gray-400"
                >
                    Votar
                </button>
        @endif
        <p>{{$total}} votos</p>
        <p class="text-green-700">{{$message}}</p>
    </form>
</div>
