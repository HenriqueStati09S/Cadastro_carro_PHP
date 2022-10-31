<?php

namespace App\Http\Controllers;

use App\Models\Carro;
use Illuminate\Http\Request;

class CarroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $carros = Carro::latest()->paginate();
    
        return view('carros.index',compact('carros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('carros.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'marca' => 'required',
            'usado' => 'required',
            'km' => 'required',
            'imagem' => 'required',
        ]);
    
        Carro::create($request->all());
     
        return redirect()->route('carros.index')
                        ->with('sucesso','Carros adicionado com sucesso.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Carro  $carro
     * @return \Illuminate\Http\Response
     */
    public function show(Carro $carro)
    {
        return view('carros.show',compact('carro'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Carro  $carro
     * @return \Illuminate\Http\Response
     */
    public function edit(Carro $carro)
    {
        return view('carros.edit',compact('carro'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Carro  $carro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Carro $carro)
    {
        $request->validate([
            'nome' => 'required',
            'marca' => 'required',
            'usado' => 'required',
            'km' => 'required',
            'imagem' => 'required',
        ]);
    
        $carro->update($request->all());
    
        return redirect()->route('carros.index')
                        ->with('sucesso','O cadastro foi atualizado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Carro  $carro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Carro $carro)
    {
        $carro->delete();
    
        return redirect()->route('carros.index')
                        ->with('sucesso','O cadastro foi excluído com sucesso.');
    }
}
