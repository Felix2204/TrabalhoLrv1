<x-app-layout>
    <div class="max-w-2xl mx-auto py-12">
       <h2 class="text-2xl font-semibold text-gray-800 dark:text-gray-200 mb-6">Cadastrar</h2>

       
        <form action="{{ route('blocks.store') }}" method="POST" class="bg-white shadow-md rounded px-3 pt-3 pb-3">
            @csrf

            <div class="mb-4">
                <label for="block_name" class="block text-gray-700 text-sm font-bold mb-2">Nome do Bloco</label>
                <input type="text"name="block_name"id="block_name"placeholder="Digite o nome do bloco"class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"required
                >
            </div>
            <div class="mb-4">
                <label for="building_id" class="block text-gray-700 text-sm font-bold mb-2">Prédio</label>
                <select name="building_id"id="building_id"class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"required
                >
                    <option value="" disabled selected>Selecione um prédio</option>
                    @foreach($buildings as $building)
                        <option value="{{ $building->id }}">{{ $building->nome_predio }}</option>
                    @endforeach
                </select>
            </div>
            <div class="flex justify-center py-9">
                <button type="submit" id="button"
                    class=" text-indigo-600 font-semibold py-6 px-6 rounded-lg  focus:outline-none focus:ring-2 focus:ring-red-400 transition duration-300">
                    Criar 
                </button>
            </div>
    
</x-app-layout>
