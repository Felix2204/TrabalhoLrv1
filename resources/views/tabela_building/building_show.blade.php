<x-app-layout>

    <div class="flex justify-start mb-6">
        <a type="button" href="{{ route('buildings.index') }}"
            class=" py-6 px-4 text-blue-500 hover:text-blue-700 font-medium transition duration-200">
            Voltar ao Inicio < </a>
    </div>


    <div class="bg-gray-50 dark:bg-gray-700 p-6 rounded-lg shadow-sm">
        <p class="text-lg text-gray-700 dark:text-gray-300 mb-6">Tem certeza que deseja excluir este Predio?</p>

        <form action="{{ route('buildings.destroy', ['building' => $building->id]) }}" method="post" class="space-y-4">
            @csrf
            <input type="hidden" name="_method" value="DELETE">

            <div class="flex justify-center">
                <button type="submit" id="button"
                    class="bg-red-600 hover:bg-red-700 text-white font-semibold py-2 px-6 rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-red-400 transition duration-300">
                    Deletar
                </button>
            </div>
        </form>
    </div>
    </div>
</x-app-layout>