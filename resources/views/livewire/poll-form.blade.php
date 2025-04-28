<div>
    <form class="mt-5" wire:submit.prevent="store">
        @csrf
        <div class="max-w-xl mx-auto p-6 bg-white shadow-md rounded-lg space-y-6">
            <div>
                <label for="title" class="block text-sm font-medium text-gray-800 mb-1">Digite o título da enquete:</label>
                <input 
                    type="text" 
                    id="title"
                    wire:model.live="title" 
                    placeholder="Ex: Escolha o melhor filme" 
                    name="title" 
                    class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                    @required(true)
                />
            </div>
        
            <div>
                <label for="start_date" class="block text-sm font-medium text-gray-800 mb-1">Data de início:</label>
                <input 
                    wire:model.live="start_date"
                    name="start_date"
                    type="date" id="start_date"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                    @required(true)
                />
            </div>
        
            <div>
                <label for="end_date" class="block text-sm font-medium text-gray-800 mb-1">Data de fim:</label>
                <input
                    wire:model.live="end_date"
                    name="end_date" 
                    type="date" 
                    id="end_date"
                    min="{{ $start_date ?? $end_date > $start_date }}" 
                    class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                    @required(true)
                />
            </div>
        
            <div>
                <label for="option" class="block text-sm font-medium text-gray-800 mb-1">Adicione opções </label>
                <div class="flex flex-col md:flex-row gap-2">
                    <input 
                        type="text" id="option" 
                        wire:model.live.debounce.200ms="option"
                        class="flex-1 px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                    >
                    <button 
                        type="button"
                        wire:click="addOptions"
                        class="px-4 py-2 bg-emerald-500 text-white rounded-md hover:bg-emerald-600 transition cursor-pointer"
                    >
                        Adicionar
                    </button>
                </div>
            </div>
        
            <div class="flex flex-col gap-3 bg-gray-50 p-4 rounded-md border border-gray-200 space-y-2">
                 
                @foreach ($options as $index => $option)
                    <div class="flex justify-between items-center">
                        <p class="text-gray-800">{{$option}}</p>
                        <small 
                            wire:click="deleteOption({{$index}})"
                            class="text-red-500 cursor-pointer hover:underline"
                        >
                            ✖
                        </small>
                    </div>
                @endforeach
            </div>

            <div>
                <button 
                        type="submit"
                        class="px-4 py-2 bg-emerald-500 text-white rounded-md hover:bg-emerald-600 transition cursor-pointer"
                    >
                        Criar Enquete
                    </button>
            </div>
            <p class="text-red-600 text-center">{{$message}}</p>
            
        </div>
    </form>
</div>
