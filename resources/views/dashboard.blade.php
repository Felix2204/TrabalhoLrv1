<x-app-layout>
    @php
    $residents = \App\Models\Resident::all();
   
    @endphp
  @include ('tabela_resident.residents')



</x-app-layout>
