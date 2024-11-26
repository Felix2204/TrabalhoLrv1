<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateBlockRequest;
use App\Models\Building;
use App\Models\Block;
use Illuminate\Http\Request;

class BlockController extends Controller
{
    public readonly Block $block;

    public function __construct()
    {
        $this->block = new Block();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blocks = $this->block->all();
        return view('tabela_block.blocks', ['blocks' => $blocks]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
{

    $buildings = Building::all();

    return view('tabela_block.block_create', ['buildings' => $buildings]);
}
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUpdateBlockRequest $request)
    {
        $validated = $request->validate([
            'block_name' => 'required|string|max:255',
            'building_id' => 'required|exists:buildings,id',
        ]);
    
        Block::create($validated);
    
        return redirect()->route('blocks.index')->with('success', 'Bloco criado com sucesso!');
    }
    

    
    /**
     * Display the specified resource.
     */
    public function show(Block $block)
    {
        return view('tabela_block.block_show', ['block' => $block]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Block $block)
    {
        return view('tabela_block.block_edit', ['block' => $block]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreUpdateBlockRequest $request, string $id)
    {
        $updated = $this->block->where('id', $id)->update($request->except(['_token', '_method']));

        if ($updated) {
            return redirect()->route('blocks.index')->with('message', 'Atualizado com Sucesso!');
        }

        return redirect()->back()->with('message', 'Erro ao atualizar!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->block->where('id', $id)->delete();

        return redirect()->route('blocks.index')->with('message', 'Excluido com Sucesso!');
    }
}