@extends('layouts.main')

@section('titlePage', 'Cadastro de Cliente')

@section('content')
    
    <h3>Cadastro de Cliente</h3>
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            
        <form action="../edit/{{ $cliente->id }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-sm-2 form-group">
                    <label>CPF</label>
                    <input type="text" name="cpf" class="form-control" placeholder="CPF do Cliente" value="{{ $cliente->cpf }}" required>
                </div>
                <div class="col-sm-4 form-group">
                    <label>Nome</label>
                    <input type="text" name="name" class="form-control" placeholder="Nome do Cliente" required value="{{ $cliente->name }}">
                </div>
                <div class="col-sm-3 form-group">
                    <label>Data de Nascimento</label>
                    <input type="date" name="nascimento" class="form-control" placeholder="Data de Nascimento do Cliente" value="{{ $cliente->nascimento }}" required>
                </div>
                <div class="col-sm-3 form-group">
                    <label>Sexo</label><br>
                    <input type="radio" name="sexo" value="M" {{ $cliente->masculino }} class="form-control-radio" required > Masculino
                    <input type="radio" name="sexo" value="F" {{ $cliente->feminino }} class="form-control-radio" required > Feminino
                    
                </div>
            </div>
            <div class="row">
                <div class="col-sm-5 form-group">
                    <label>Endereço</label>
                    <input type="text" name="endereco" class="form-control" placeholder="Endereço do Cliente" value="{{ $cliente->endereco }}" required>
                </div>
                <div class="col-sm-5 form-group">
                    <label>Cidade</label>
                    <input type="text" name="cidade" class="form-control" placeholder="Cidade do Cliente"  value="{{ $cliente->cidade }}" required>
                </div>
                <div class="col-sm-2 form-group">
                    <label>UF</label>
                    <input type="text" name="uf" class="form-control" placeholder="UF do Cliente" value="{{ $cliente->uf }}" required>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 form-group">
                    <button type="submit" class="btn btn-primary mt-4">Salvar</button>
                </div>
                <div class="col-sm-4 form-group">
                    <a href="../" class="btn btn-info mt-4">Voltar</a>
                </div>
            </div>
        </form>
    </div>
@endsection