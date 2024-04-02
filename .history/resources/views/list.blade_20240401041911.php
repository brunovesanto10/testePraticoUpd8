@extends('layouts.main')

@section('titlePage', 'Lista de Clientes')

@section('content')

    <table class="table">
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
                    <td>{{ $cliente->name }}</td>
                    <td>{{ $cliente->cpf }}</td>
                    <td>{{ $cliente->nascimento }}</td>
                    <td>{{ $cliente->uf }}</td>
                    <td>{{ $cliente->cidade }}</td>
                    <td>{{ $cliente->sexo }}</td>
                    <th>
                        <a href="{{ route('cliente.edit', $cliente->id) }}" class="btn btn-success"> Editar </a>
                        <form action="{{ route('cliente.destroy', $cliente->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Deletar</button>
                        </form>
                    </th>
                </tr>
            @endforeach

        </tbody>
    </table>

@endsection
