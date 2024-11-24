<?php

namespace App\Http\Controllers;


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
    public function store(Request $request)
    {
        
       $created = $this->resident->create([
        'nome' => $request -> input('nome'),
        'bloco' => $request -> input('bloco'),
        'predio' => $request -> input('predio'),
        'apartamento' => $request -> input('apartamento'),
       ]);

       if($created){
        if ($created) {
            return redirect()->route('dashboard')->with('message', 'Criado com Sucesso!');
        }


       }

       return redirect() -> back() -> with('message', 'error');

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
    public function update(Request $request, string $id)
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
