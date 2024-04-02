@extends('layouts.main')

@section('titlePage', 'Novo Cliente')

@section('content')
    <h3>Novo Cliente</h3>
    <form action="" method="POST">
        @csrf
        <div class="form-group">
            <label>Nome</label>
            <input type="text" name="name" class="form-control shadow-none" placeholder="Nome do Cliente">
        </div>
        <div class="form-group">
            <label>CPF</label>
            <input type="text" name="cpf" class="form-control shadow-none" placeholder="CPF do Cliente">
        </div>
        <div class="form-group">
            <label>Data de Nascimento</label>
            <input type="date" name="nascimento" class="form-control shadow-none" placeholder="Data de Nascimento do Cliente">
        </div>
        <div class="form-group">
            <label>Sexo</label>
            <input type="radio" name="sexo" value="M" class="form-control" > Masculino
            <input type="radio" name="sexo" value="F" class="form-control" > Feminino
            
        </div>
        <div class="form-group">
            <label>Data de Nascimento</label>
            <input type="date" name="nascimento" class="form-control shadow-none" placeholder="Data de Nascimento do Cliente">
        </div>
        <div class="form-group">
            <label>Data de Nascimento</label>
            <input type="date" name="nascimento" class="form-control shadow-none" placeholder="Data de Nascimento do Cliente">
        </div>
        <button type="submit" class="btn btn-primary mt-2">Adicionar Modelo</button>
    </form>
@endsection