<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateResidentRequest;
use App\Models\Resident;
use Illuminate\Http\Request;

class ResidentController extends Controller
{
    public readonly Resident $resident;
    public function __construct(){
        $this->resident = new Resident();
    }


    public function index()
    {
      $resident = $this->resident->all();
      return view('tabela_resident.residents',['residents' =>$resident]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tabela_resident.resident_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUpdateResidentRequest $request)
{
    
    $request->validate([
        'nome' => 'required|string|max:255',
        'bloco' => 'required|string|max:255',
        'predio' => 'required|string|max:255',
        'apartamento' => 'required|integer',
    ]);

    Resident::create([
        'nome' => $request->nome,
        'bloco' => $request->bloco,
        'predio' => $request->predio,
        'apartamento' => $request->apartamento,
    ]);


    return redirect()->route('dashboard')->with('message', 'Residente cadastrado com sucesso!');
}

    /**
     * Display the specified resource.
     */
    public function show(resident $resident)
    {
        return view('tabela_resident.resident_show', ['resident' => $resident]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Resident $resident)
    {
        return view('tabela_resident.resident_edit',['resident' =>$resident]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreUpdateResidentRequest $request, string $id)
    {
        $updated = $this->resident->where('id', $id)->update($request->except(['_token','_method']));

        if($updated){
            return redirect()->route('dashboard')->with('message','Atualizado com sucesso');
    }
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->resident->where('id', $id)->delete();

        return redirect()->route('dashboard')->with('message', 'Excluido com Sucesso!');
    }
}
