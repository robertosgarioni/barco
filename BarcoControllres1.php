<?php


namespace App\Http\Controllers;


class BarcoControllres extends Controller
{
    public function index() {
        $boats = Barco::all();

        return view('boats.index', compact('boats'));
    }

    /**
     * @return mixed
     */
    public function create()
    {
        return view('boats.create');
    }

    public function store(Request $request, $barco){


        $nome = $request->nome;
        $nome = $request->cidade;
        $nome = $request->tamanho;
        $nome = $request->preco;
        $nome = $request->id;
        $nome = $request->descricao;
        Barco::creat($request -> all());

        return http_redirect('/barco');
    }

    public function destroy(Request $request){
        Barco::destroy($request->id);
        $request->session()
            ->flash(
        'mensagem',
        "Seu Barco removida com sucesso"
        );

    return redirect('/barco');


    }





}