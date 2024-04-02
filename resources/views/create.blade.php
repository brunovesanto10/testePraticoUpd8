@extends('layouts.main')

@section('titlePage', 'Cadastrar Cliente')

@section('content')
    <h3>Cadastrar Cliente</h3>
    <hr />
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <form action="store" method="POST">
            @csrf
            <div class="row mt-2">
                <div class="col-sm-2 form-group">
                    <label>CPF</label>
                    <input type="text" name="cpf" class="form-control" placeholder="CPF do Cliente" required>
                </div>
                <div class="col-sm-4 form-group">
                    <label>Nome</label>
                    <input type="text" name="name" class="form-control" placeholder="Nome do Cliente" required>
                </div>
                <div class="col-sm-3 form-group">
                    <label>Data de Nascimento</label>
                    <input type="date" name="nascimento" class="form-control" placeholder="Data de Nascimento do Cliente" required>
                </div>
                <div class="col-sm-3 form-group">
                    <label>Sexo</label><br>
                    <input type="radio" name="sexo" value="M" class="form-control-radio" required > Masculino
                    <input type="radio" name="sexo" value="F" class="form-control-radio" required > Feminino
                    
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-sm-5 form-group">
                    <label>Endereço</label>
                    <input type="text" name="endereco" class="form-control" placeholder="Endereço do Cliente" required>
                </div>
                <div class="col-sm-5 form-group">
                    <label>Cidade</label>
                    <input type="text" name="cidade" class="form-control" placeholder="Cidade do Cliente" required>
                </div>
                <div class="col-sm-2 form-group">
                    <label>UF</label>
                    <input type="text" name="uf" class="form-control" placeholder="UF do Cliente" required>
                </div>
            </div>
            <hr />
            <div class="row">
                <div class="col-sm-12 form-group">
                    <button type="submit" class="btn btn-primary mt-4">Salvar</button>
                    <button type="reset" class="btn btn-succcess mt-4">Limpar</button>
                    <a href="./" class="btn btn-info mt-4">Voltar</a>
                </div>
            </div>
        </form>
    </div>
@endsection