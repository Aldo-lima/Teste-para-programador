<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\fornecedor;
use App\Models\endereco;
use App\Models\contato_principal;
use App\Models\contatos_adicional;
use Illuminate\Support\Facades\DB;

class pfonecadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fornecedores = Fornecedor::with(['contatoPrincipal','contatosAdicional', 'endereco'])->get();
        return view('fornecedor', compact('fornecedores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $action = route('pfornecedor.store');
        return view('form_fornecedor',compact('action'));
    }

  /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createPessosJuridica()
    {
        $action = route('pfornecedor.store');
        return view('form_fornecedor_juridico',compact('action'));
    }





    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::beginTransaction();
        $fornecedor =  Fornecedor::create($request->all());
        $fornecedor->endereco()->create($request->all());
        $fornecedor->contatoPrincipal()->create($request->all());
        $fornecedor->contatosAdicional()->create($request->all());
        DB::Commit();
        return redirect()->route('pfornecedor.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
