<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vocalista;

class VocalistaController extends Controller
{

    public function index(Request $request)
    {

        $vocalistas = Vocalista::query();

        if ($request->has('nome_vocalista')) {
            $vocalistas->where('nome_vocalista', $request->nome_vocalista);
        }

        if ($request->has('nome_louvor')) {
            $vocalistas->where('nome_louvor', $request->nome_louvor);
        }

        $vocalistas = $vocalistas->get();

        $filters = Vocalista::all()
            ->unique(function ($item) {
                return $item->nome_vocalista . $item->nome_louvor;
            });

        return view('vocalistas.index', compact('vocalistas', 'filters'));
    }


    public function create()
    {
        return view('vocalistas.create');
    }


    public function store(Request $request)
    {
        $regras = [
            'nome_vocalista' => 'required|string|min:4|max:30',
            'nome_louvor' => 'required|string|min:5|max:40',
            'nome_versao_louvor' => ['required', 'regex:/^((?:https?:\/\/)?(www\.)?youtube\.com\/(?:embed\/|v\/|watch\?v\=))([\w-]+)(?:\S+)?$/'],
            'tonalidade' => 'required'
        ];

        $feedback = [
            'required' => 'O campo :attribute deve ser preenchido',

            'nome_vocalista.min' => 'O nome precisa ser de no mínimo 4 caracteres',
            'nome_vocalista.max' => 'Máximo de 30 caracteres, por favor diminua a quantidade de caracteres',

            'nome_louvor.min' => 'Mínimo de 35 caracteres',
            'nome_louvor.max' => 'O campo nome louvor deve ter no máximo 40 caracteres',

            'nome_versao_louvor' => 'Precisa ser um link válido do youtube',

            'nome_versao_louvor.max' => 'O campo nome versão louvor deve ter no máximo 150 caracteres'
        ];

        $request->validate($regras, $feedback);

        Vocalista::create($request->all());
        return redirect()->route('vocalistas.index');
    }


    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {
        $vocalista  = Vocalista::findOrFail($id);

        return view('vocalistas.edit', compact('vocalista'));
    }


    public function update(Request $request, string $id)
    {
        $regras = [
            'nome_vocalista' => 'required|string|min:5|max:30',
            'nome_louvor' => 'required|string|min:5|max:40',
            'nome_versao_louvor' => 'required|string|max:150',
            'tonalidade' => 'required'
        ];

        $feedback = [
            'required' => 'O campo :attribute deve ser preenchido',
            'nome_vocalista.min' => 'O campo nome vocalista deve ter no mínimo 5 caracteres',
            'nome_vocalista.max' => 'O campo nome vocalista deve ter no máximo 30 caracteres',
            'nome_louvor.min' => 'O campo nome louvor deve ter no mínimo 35 caracteres',
            'nome_louvor.max' => 'O campo nome louvor deve ter no máximo 40 caracteres',
            'nome_versao_louvor.max' => 'O campo nome versão louvor deve ter no máximo 150 caracteres'
        ];

        $request->validate($regras, $feedback);

        $vocalista  = Vocalista::findOrFail($id);


        $vocalista->update($request->all());
        return redirect()->route('vocalistas.index');
    }


    public function destroy(string $id)
    {
        $vocalista = Vocalista::findOrFail($id);
        $vocalista->delete();
        return redirect()->route('vocalistas.index');
    }

    // TODO: Criar Requests e adicionar try catch e iniciar transações
}
