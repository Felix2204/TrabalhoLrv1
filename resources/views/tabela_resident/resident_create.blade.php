<x-app-layout>
    <div class="flex justify-start">
        <a type="button" href="{{ route('dashboard') }}"
            class=" py-4 px-4 text-blue-500 hover:text-blue-700 font-medium transition duration-200">
            Voltar ao Inicio < </a>
    </div>


    <div class="max-w-2xl mx-auto py-12">
        <h2 class="text-2xl font-semibold text-gray-800 dark:text-gray-200 mb-6">Cadastrar</h2>

        @if (session()->has('message'))
            <div class="bg-green-100 text-green-700 px-4 py-3 rounded mb-6">
                {{ session()->get('message') }}
            </div>
        @endif

        @if($errors->any())

            <div id="alert-2"
                class="flex items-center p-4 mt-4 mb-1 text-red-800 rounded-md bg-red-50 dark:bg-red-400 dark:text-red-900 w-1/0,5 mx-auto"
                role="alert">
                <svg class="flex-shrink-0 w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    viewBox="0 0 20 20">
                    <path
                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                </svg>
                <span class="sr-only">Erro</span>
                <div class="ms-2 text-sm font-medium">
                    @foreach($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
                <button type="button"
                    class="ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1 hover:bg-red-200 inline-flex items-center justify-center h-6 w-6 dark:bg-red-800 dark:text-red-400 dark:hover:bg-red-900"
                    aria-label="Fechar" onclick="document.getElementById('alert-2').style.display='none'">
                    <span class="sr-only">Fechar</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                </button>
            </div>
        @endif

        <form action="{{ route('residents.store') }}" method="post"
            class="bg-white dark:bg-gray-800 shadow-md rounded px-3 pt-3 pb-8 mb-3">
            @csrf

            <div class="mb-4">
                <label for="nome" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2"
                    for="nome_predio">Nome do Residente</label>
                <input type="text" name="nome" id="nome" placeholder="Nome do Residente"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-300 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="bloco" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2"
                    for="bloco">Bloco</label>
                <input type="text" name="bloco" id="bloco" placeholder="Bloco"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-300 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="predio" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2"
                    for="predio">Predio</label>
                <input type="text" name="predio" id="predio" placeholder="Predio"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-300 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="apartamento" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2"
                    for="apartamento">Apartamento</label>
                <input type="number" name="apartamento" id="bloco" placeholder="Apartamento"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-300 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="flex justify-center">
                <button type="submit" id="button"
                    class="bg-indigo-600  hover:bg-indigo-600  text-white font-semibold py-2 px-6 rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-black transition duration-300">
                    Criar
                </button>
            </div>
    </div>
    </form>
    </div>
    <script src="https://cdn.tailwindcss.com"></script>
</x-app-layout>