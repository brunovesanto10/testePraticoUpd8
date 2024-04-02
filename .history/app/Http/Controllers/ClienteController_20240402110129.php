<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Http\Requests\StoreClienteRequest;
use App\Http\Requests\UpdateClienteRequest;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('list');
        $clientes = Cliente::all();

        return view('list', ['clientes' => $clientes]);
    }

    public function search(StoreClienteRequest $request)
    {
        //return view('list');
        $data = $request->all();
        var_dump($data);

        $clientes = Cliente::where('name', '<>', '');

        if ($data['name']) {
            $clientes->orWhere('name', 'LIKE', '%'.$data['name'].'%');
            echo 1;
        }
        if ($data['cpf']) {
            $clientes->orWhere(['cpf', 'LIKE', "%$data[cpf]%"]);
        }
        if ($data['nascimento']) {
            $clientes->orWhere('nascimento', '=', $data['nascimento']);
        }
        if (isset($data['sexo'])) {
            $clientes->orWhere('sexo', '=', $data['sexo']);
        }
        if ($data['endereco']) {
            $clientes->orWhere('endereco', 'LIKE', "%$data[endereco]%");
        }
        if ($data['cidade']) {
            $clientes->orWhere('cidade', 'LIKE', "%$data[cidade]%");
        }
        if ($data['uf']) {
            $clientes->orWhere('uf', 'LIKE', "%$data[uf]%");
        }

        return view('list', ['clientes' => $clientes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClienteRequest $request)
    {
        $data = $request->all();

        //try {
        /*$cliente = Cliente::create([
          'name' => $data['name'],
          'cpf' => $data['cpf'],
          'sexo' => $data['sexo'],
          'nascimento' => $data['nascimento'],
          'endereco' => $data['endereco'],
          'cidade' => $data['cidade'],
          'uf' => $data['uf']

        ]);
        */
        $request->validate([
                'name' => 'required',
                'cpf' => 'required',
                'nascimento' => 'required',
                'sexo' => 'required',
                'endereco' => 'required',
                'cidade' => 'required',
                'uf' => 'required',
            ]);

        $cliente = new Cliente();

        $cliente->name = $request->name;
        $cliente->cpf = $request->cpf;
        $cliente->nascimento = $request->nascimento;
        $cliente->sexo = $request->sexo;
        $cliente->endereco = $request->endereco;
        $cliente->cidade = $request->cidade;
        $cliente->uf = $request->uf;

        $cliente->insert($data);

        return redirect('./');

        //} catch (\Throwable $th) {
        //    dd("Erro");
        //}

        //return redirect()->route('list');//->with('success','Cliente salvo com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente = Cliente::findOrFail($id);
        $masculino = '';
        $feminino = '';
        if ($cliente->sexo == 'M') {
            $masculino = 'checked';
        } else {
            $feminino = 'checked';
        }
        $cliente['masculino'] = $masculino;
        $cliente['feminino'] = $feminino;

        return view('edit', ['cliente' => $cliente]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateClienteRequest $request, $id)
    {
        $data = $request->all();
        $clientes = Cliente::find($id)->update([
            'name' => $data['name'],
            'cpf' => $data['cpf'],
            'nascimento' => $data['nascimento'],
            'sexo' => $data['sexo'],
            'endereco' => $data['endereco'],
            'cidade' => $data['cidade'],
            'uf' => $data['uf'],
        ]);

        return redirect('../'); //->with('success','Os dados foram atualizados com sucesso.');
        //return redirect()->route("list");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();

        return redirect('../');
    }
}
