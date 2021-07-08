<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fornecedor;
use App\Models\Endereco;
use App\Models\Contato_principal;
use App\Models\Contato_adicional;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Resources;


class FornecedorController extends Controller
{

    public function __construct(Request $request, Fornecedor $fornecedor)
    {
        $this->request = $request;
        $this->repository = $fornecedor;
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $fornecedores = Fornecedor::with(['contatoPrincipal','contatosAdicional', 'endereco'])->get();
         return view('lista_fornecedor', compact('fornecedores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createPessoaFisica()
    {
       $action = route('fornecedor.store');
        return view('form_fornecedor_fisica',compact('action'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
        public function create()
    {
        $action = route('fornecedor.store');
        return view('form_fornecedor_juridico');
    }


   public function store(Request $request)
    {
        DB::beginTransaction();
       $fornecedor =  Fornecedor::create($request->all());
       $fornecedor->endereco()->create($request->all());
       $fornecedor->contatoPrincipal()->create($request->all());
       $fornecedor->contatosAdicional()->create($request->all());
       DB::Commit();
       return redirect()->route('fornecedor.index');

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

    /**
     * filtrar
     */
    public function filtrar(Request $request )
    {
        $filters = $request->all();

        $fornecedores= $this->repository->filtrar($request->filter);

        return view('lista_fornecedor', [
            'fornecedores'=> $fornecedores,
            'filters'=> $filters,

        ]);
    }

}
