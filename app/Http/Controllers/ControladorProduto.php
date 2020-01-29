<?php

namespace App\Http\Controllers;

use App\Produto;

use Illuminate\Http\Request;

class ControladorProduto extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexView()
    {
        return view('produtos');
    }

    public function index()
    {
        $prods = Produto::all();
        return $prods->toJson();
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('novoproduto');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $prod= new Produto();
        $prod->nome = $request->input('nome');
        $prod->nome = $request->input('preco');
        $prod->nome = $request->input('estoque');
        $prod->nome = $request->input('categoria_id');
        $prod->save();
        return json_encode($prod);
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
        $pro = Produto::find($id);
        if (isset($pro)) {
            return view('/editarproduto', compact('pro'));
        }
        return redirect('/produtos');
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
        $pro = Produto::find($id);
        if (isset($pro)) {
            $pro->nome = $request->input('nomeProduto');
            $pro->save();
        }
        return redirect('/produtos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pro = Produto::find($id);
        if (isset($pro)) {
            $pro->delete();
        }
        return redirect('/produtos');
    }
}
