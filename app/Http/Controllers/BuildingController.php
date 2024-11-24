<?php

namespace App\Http\Controllers;

use App\Models\Building;
use Illuminate\Http\Request;

class BuildingController extends Controller
{
    public readonly Building $building;

    public function __construct()
    {
        $this->building = new Building();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $buildings = $this->building->all();
        return view('tabela_building.buildings', ['buildings' => $buildings]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tabela_building.building_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $created = $this->building->create([
            'nome_predio' => $request->input('nome_predio'),
            'apartamentos' => $request->input('apartamentos')

        ]);

        if ($created) {
            return redirect()->route('buildings.index')->with('message', 'Criado com Sucesso!');
        }

        return redirect()->back()->with('message', 'Erro ao Criar!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Building $building)
    {
        return view('tabela_building.building_show', ['building' => $building]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Building $building)
    {
        return view('tabela_building.building_edit', ['building' => $building]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $updated = $this->building->where('id', $id)->update($request->except(['_token', '_method']));

        if ($updated) {
            return redirect()->route('buildings.index')->with('message', 'Atualizado com Sucesso!');
        }

        return redirect()->back()->with('message', 'Erro ao atualizar!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->building->where('id', $id)->delete();

        return redirect()->route('buildings.index')->with('message', 'Excluido com Sucesso!');
    }
}