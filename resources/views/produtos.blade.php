@extends('layout.app', ["current" => "produtos"])

@section('body')
    <div class="card border">
        <div class="card-body">
            <h5 class="card-title">Cadastro de Produtos</h5>
            <table class="table table_ordered table-hover">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Nome </th>
                        <th>Quantidade </th>
                        <th>Preçp </th>
                        <th>Departamento </th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
        <div class="card-footer">
            <button class="btn btn-sm btn-primary" role="button">Novo Produto</button>
        </div>
    </div>

@endsection