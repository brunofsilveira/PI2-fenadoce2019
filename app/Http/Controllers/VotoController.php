<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Voto;
use App\Candidata;

class VotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $linhas = DB::select('select v.nome as nome_usuario, v.email as email, c.nome as nome_candidata from votos v, candidatas c where v.candidata_id = c.id order by v.nome');

        return view('lista_votos', ['linhas' => $linhas]);
    }

    public function contagem()
    {
        $linhas = DB::select('select count(v.candidata_id) as qtd_votos, c.nome as nome from votos v, candidatas c where c.id = v.candidata_id group by c.nome order by qtd_votos desc');

        return view('lista_qtd_votos', ['linhas' => $linhas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nome' => 'required|min:10',
            'email' => 'required|unique:votos',
        ]);

        $dados = $request->all();

        $reg = Voto::create($dados);

        if ($reg) {
            return redirect()->route('candidatas.index')
                   ->with('status', 'Ok! Candidata Votada com Sucesso');
        } else {
            return redirect()->route('candidatas.index')
                   ->with('status', 'Erro... Não foi possível votar...');
        }
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
