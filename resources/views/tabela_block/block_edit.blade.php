<x-app-layout>

    <div class="flex justify-start mb-6">
        <a type="button" href="{{ route('blocks.index') }}"
            class=" py-6 px-4 text-blue-500 hover:text-blue-700 font-medium transition duration-200">
            Voltar ao Inicio < </a>
    </div>


    <div class="max-w-2xl mx-auto py-12">
        <h2 class="flex justify-center text-2xl font-semibold text-gray-800 dark:text-gray-200 mb-6">Editar Bloco</h2>


        @if (session()->has('message'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
                {{ session()->get('message') }}
            </div>
        @endif

        <form action="{{ route('blocks.update', ['block' => $block->id]) }}" method="POST"
            class="bg-white dark:bg-gray-800 shadow-md rounded px-3 pt-3 pb-3">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="block_name" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">
                    Nome do Bloco
                </label>
                <input type="text" name="block_name" id="block_name" value="{{ $block->block_name }}"
                    placeholder="Digite o nome do bloco"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-300 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                    required>
            </div>

            <div class="flex justify-center py-9">
                <button type="submit" id="button"
                    class="bg-green-600  hover:bg-green-600  text-white font-semibold py-2 px-6 rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-black transition duration-300">
                    Editar
                </button>
            </div>
        </form>
    </div>
    <script src="https://cdn.tailwindcss.com"></script>
</x-app-layout>