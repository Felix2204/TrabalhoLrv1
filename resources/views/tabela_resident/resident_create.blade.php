<x-app-layout>
    <div class="max-w-2xl mx-auto py-12">
        <h2 class="text-2xl font-semibold text-gray-800 dark:text-gray-200 mb-6">Cadastrar</h2>

        @if (session()->has('message'))
            <div class="bg-green-100 text-green-700 px-4 py-3 rounded mb-6">
                {{ session()->get('message') }}
            </div>
        @endif

        <form action="{{ route('residents.store') }}" method="post" class="bg-white dark:bg-gray-800 shadow-md rounded px-3 pt-3 pb-8 mb-3">
            @csrf

            <div class="mb-4">
                <label for="nome" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2" for="nome_predio">Nome do Residente</label>
                <input type="text" name="nome" id="nome" placeholder="Nome do Residente" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-300 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="mb-4">
                <label for="bloco" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2" for="bloco">Bloco</label>
                <input type="text" name="bloco" id="bloco" placeholder="Bloco" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-300 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="mb-4">
                <label for="predio" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2" for="predio">Predio</label>
                <input type="text" name="predio" id="predio" placeholder="Predio" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-300 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="mb-4">
                <label for="apartamento" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2" for="apartamento">Apartamento</label>
                <input type="text" name="apartamento" id="bloco" placeholder="Apartamento" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-300 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="flex justify-center">
                <button type="submit" id="button"
                    class=" text-indigo-600 font-semibold py-6 px-6 rounded-lg  focus:outline-none focus:ring-2 focus:ring-red-400 transition duration-300">
                    Criar 
                </button>
            </div>
            </div>
        </form>
    </div>
</x-app-layout>