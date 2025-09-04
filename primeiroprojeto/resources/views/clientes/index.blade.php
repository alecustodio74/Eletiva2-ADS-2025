@extends('layout')
@section('conteudo')

<h1>Registro de clientes</h1>

<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Clientes</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body> 
 <div class="container py-3"> 

          <h2>Clientes</h2>
          @if(session('sucesso'))
            <p class="text-success">{{ session('sucesso') }}</p>
            @endif
            @if(session('erro'))
            <p class="text-danger">{{ session('erro') }}</p>
            @endif
          <a href="/clientes/create" class="btn btn-success mb-3">Novo Registro</a>
          <table class="table table-hover table-striped">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Ações</th>
              </tr>
            </thead>
            <tbody>
              @foreach($clientes as $c)
                <tr>
                  <td>{{ $c->id }}</td>
                  <td>{{ $c->nome}}</td>
                  <td>{{ $c->email }}</td>
                  <td class="d-flex gap-2">
                    <a href="#" class="btn btn-sm btn-warning">Editar</a>
                    <a href="#" class="btn btn-sm btn-info">Consultar</a>
                  </td>
                </tr>
                @endforeach
              
            </tbody>
          </table>
        
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>

@endsection