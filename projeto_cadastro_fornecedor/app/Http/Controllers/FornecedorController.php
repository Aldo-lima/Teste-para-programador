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

       $fornecedor = Fornecedor::with(['endereco', 'contatoPrincipal','contatosAdicional'])->find($id);
       

       $endereco = Endereco::all();
       $contatoPrincipal = Contato_principal::all();
       $contatosAdicional = Contato_adicional::all();
       $action = route('fornecedor.update', $fornecedor->id);
       return view('formulario_update', ['action'=>$action, 'fornecedor'=>$fornecedor,'contatoPrincipal'=>$contatoPrincipal, 'contatosAdicional'=>$contatosAdicional, 'endereco'=>$endereco]);

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

        $fornecedor = Fornecedor::find($id);
        DB::beginTransaction();
        $fornecedor->update($request->all());
        $fornecedor->endereco->update($request->all());
        $fornecedor->contatoPrincipal->update($request->all());
        $fornecedor->contatosAdicional->update($request->all());
        DB::Commit();
        return redirect()->route('fornecedor.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        Fornecedor::destroy($id);
        return redirect()->route('fornecedor.index');
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
