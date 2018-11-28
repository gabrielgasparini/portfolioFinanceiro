<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class InvestimentoController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $investimentos=\App\Post::all()->where('usuario_id', Auth::user()->id);
        return view('investimentos.index',compact('investimentos'));
    }
    
    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        return view('investimentos.create');
    }
    
    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        if($request->hasfile('filename'))
        {
            $file = $request->file('filename');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/images/', $name);
        }
        $investimento= new \App\Post;
        $investimento->titulo=$request->get('titulo');
        $investimento->usuario_id=Auth::user()->id;
        $investimento->deposito_inicial=$request->get('deposito_inicial');
        $investimento->deposito_mensal=$request->get('deposito_mensal');
        $investimento->tempo=$request->get('tempo');
        $investimento->save();
        
        return redirect('investimentos')->with('success', 'Investimento cadastrado com sucesso!');
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
        $investimento = \App\Post::find($id);
        return view('investimentos.edit',compact('investimento', 'id'));
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
        $investimento = \App\Post::find($id);
        $investimento->titulo=$request->get('titulo');
        $investimento->deposito_inicial=$request->get('deposito_inicial');
        $investimento->deposito_mensal=$request->get('deposito_mensal');
        $investimento->tempo=$request->get('tempo');
        $investimento->save();
        return redirect('investimentos')->with('success', 'Investimento atualizado com sucesso!');
    }
    
    /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function destroy($id)
    {
        $investimento = \App\Post::find($id);
        $investimento->delete();
        return redirect('investimentos')->with('success','Investimento deletado com sucesso!');
    }
}
