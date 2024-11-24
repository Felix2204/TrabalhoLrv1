<x-app-layout>
    <div class="max-w-2xl mx-auto py-12">
     <h2 class="flex justify-center py-9 text-2xl font-semibold text-gray-800 dark:text-gray-200 mb-6">Editar Predios</h2>

        @if (session()->has('message'))
           <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
                {{ session()->get('message') }}
            </div>
        @endif

        <form action="{{ route('buildings.update', ['building' => $building->id]) }}" method="POST" class="bg-white dark:bg-gray-800 shadow-md rounded px-3 pt-3 pb-3" >
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="nome" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">
                    Nome do Predio
                </label>
                <input type="text" name="nome_predio" id="nome_predio" value="{{ $building->nome_predio}}" placeholder="Digite o nome do residente"class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-300 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"required
                >
            </div>

            <div class="mb-4">
                <label for="bloco" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">
                    Numero de Apartamentos
                </label>
                <input type="text" name="apartamentos" id="apartamentos" value="{{ $building->apartamentos }}" placeholder="Digite o nome do bloco"class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-300 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"required
                >
            </div>

            <div class="flex justify-center py-9">
                <button type="submit" id="button"
                    class=" text-indigo-600 font-semibold py-6 px-6 rounded-lg  focus:outline-none focus:ring-2 focus:ring-red-400 transition duration-300">
                    Editar
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
