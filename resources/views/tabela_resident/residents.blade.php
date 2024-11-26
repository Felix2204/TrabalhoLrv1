<div class="py-12 px-4 sm:px-6 ">
    <x-nav-link :href="route('residents.index')" :active="request()->routeIs('residents.index')">
        {{ __('Residentes') }}
    </x-nav-link>

    <div class="flex justify-end mt-4">
        <a href="{{ route('residents.create') }}"
            class="bg-indigo-600  hover:bg-indigo-600  text-white font-semibold py-2 px-6 rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-black transition duration-300">
            Criar
        </a>
    </div>


    <div class="space-y-6 mt-6">
        @foreach($residents as $resident)
            <div class="p-6 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                <div class="flex justify-between items-center">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        {{ $resident->nome }}
                    </h3>
                    <div class="flex space-x-3">
                        <a href="{{ route('residents.edit', ['resident' => $resident->id]) }}"
                            class="inline-flex items-center px-3 py-2 text-indigo-600 dark:text-indigo-500 rounded-lg hover:text-blue-800 dark:text-blue-500 dark:bg-blue-900 dark:hover:bg-blue-800 font-medium transition duration-200 ease-in-out">
                            Editar
                        </a>
                        <a href="{{ route('residents.destroy', ['resident' => $resident->id]) }}"
                            class="inline-flex items-center px-3 py-2 text-red-600 dark:text-red-500 rounded-lg hover:text-red-800 dark:text-red-500 dark:bg-red-900 dark:hover:bg-red-800 font-medium transition duration-200 ease-in-out">
                            Deletar
                        </a>
                    </div>
                </div>

                <div class="mt-2 text-sm text-gray-500 dark:text-gray-400">
                    <p><strong>Bloco:</strong> {{ $resident->bloco }}</p>
                    <p><strong>Prédio:</strong> {{ $resident->predio }}</p>
                    <p><strong>Apartamento:</strong> {{ $resident->apartamento }}</p>
                </div>
            </div>
        @endforeach
    </div>
    <script src="https://cdn.tailwindcss.com"></script>

</div>