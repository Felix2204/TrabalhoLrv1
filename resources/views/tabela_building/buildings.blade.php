
 <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Predios') }}
        </h2>
    </x-slot>
    
    @if (session()->has('message'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-6 max-w-4xl mx-auto">
            {{ session('message') }}
        </div>
    @endif
    
    
        <div class="flex justify-end mt-4 py-9 px-4 sm:px-5 ">
    <a href="{{ route('buildings.create') }}" 
        class="bg-black hover:bg-black text-indigo-600 font-semibold py-2 px-6 rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-red-400 transition duration-300">
        Criar 
    </a>
</div>


    <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <h3 class="p-6 text-lg font-semibold text-center text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                Predio
            </h3>
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th class="px-6 py-4 text-left">Nome do Prédio</th>
                        <th class="px-6 py-4 text-left">Apartamentos</th>
                        <th class="px-6 py-4 text-left">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($buildings as $building)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-700">
                            <td class="px-6 py-4 text-center font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $building->nome_predio }}
                            </td>
                            <td class="px-6 py-4 text-center font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $building->apartamentos }}
                            </td>
                            <td class="px-6 py-4 text-center space-x-4">
                                <a href="{{ route('buildings.edit', ['building' => $building->id]) }}" 
                                   class="font-medium text-indigo-600 dark:text-indigo-500 hover:underline">
                                   Editar
                                </a>
                                <a href="{{ route('buildings.show', ['building' => $building->id]) }}" 
                                   class="font-medium text-red-600 dark:text-red-500 hover:underline">
                                   Deletar
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

</x-app-layout>