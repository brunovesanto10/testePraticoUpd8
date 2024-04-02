@extends('layouts.main')

@section('titlePage', 'Lista de Clientes')

@section('content')
    <h1>Cadastro de Clientes</h1>
    <hr />
    <form action="search" method="POST">
        @csrf
        <div class="row">
            <div class="col-sm-2 form-group">
                <label>CPF</label>
                <input type="text" name="cpf" class="form-control" placeholder="CPF do Cliente">
            </div>
            <div class="col-sm-4 form-group">
                <label>Nome</label>
                <input type="text" name="name" class="form-control" placeholder="Nome do Cliente">
            </div>
            <div class="col-sm-3 form-group">
                <label>Data de Nascimento</label>
                <input type="date" name="nascimento" class="form-control" placeholder="Data de Nascimento do Cliente">
            </div>
            <div class="col-sm-3 form-group">
                <label>Sexo</label><br>
                <input type="radio" name="sexo" value="M" class="form-control-radio" > Masculino
                <input type="radio" name="sexo" value="F" class="form-control-radio" > Feminino
                
            </div>
        </div>
        <div class="row">
            <div class="col-sm-5 form-group">
                <label>Endereço</label>
                <input type="text" name="endereco" class="form-control" placeholder="Endereço do Cliente">
            </div>
            <div class="col-sm-4 form-group">
                <label>Cidade</label>
                <input type="text" name="cidade" class="form-control" placeholder="Cidade do Cliente">
            </div>
            <div class="col-sm-1 form-group">
                <label>UF</label>
                <input type="text" name="uf" class="form-control" placeholder="UF do Cliente">
            </div>
            <div class="col-sm-1 form-group">
                <button type="submit" class="btn btn-primary mt-4">Consultar</button>
            </div>
            <div class="col-sm-1 form-group">
                <a href="create" class="btn btn-success mt-4">Cadastrar</a>
            </div>
        </div>
    </form>
    <hr />
    <table class="table w-100">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Cliente</th>
                <th scope="col">CPF</th>
                <th scope="col">Nascimento</th>
                <th scope="col">Estado</th>
                <th scope="col">Cidade</th>
                <th scope="col">Sexo</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clientes as $cliente)
                <tr>
                    <td style="text-align:left">{{ $cliente->name }}</td>
                    <td>{{ substr($cliente->cpf,0,3).".".substr($cliente->cpf,3,3).".".substr($cliente->cpf,6,3)."-".substr($cliente->cpf,9,2) }}</td>
                    <td>{{ substr($cliente->nascimento,8,2)."/".substr($cliente->nascimento,5,2)."/".substr($cliente->nascimento,0,4) }}</td>
                    <td>{{ $cliente->uf }}</td>
                    <td>{{ $cliente->cidade }}</td>
                    <td>{{ $cliente->sexo }}</td>
                    <td>
                        <a href="edit/{{ $cliente->id }}" class="btn btn-success"> Editar </a>
                        <form action="delete/{{ $cliente->id }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Deletar</button>
                        </form>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>

@endsection
