@extends('welcome')

@section('content')

<br><br>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create">
  Agregar
</button>

<div class="table-responsive">
    <br>
    <table class="table">
        <thead class="bg-dark text-white">
           
            <tr>
                <th scope="col">ID</th>
                <th scope="col">NOMBRE</th>
                <th scope="col">DESCRIPCIÓN</th>
                <th>Acciones</th>
            </tr>
     
        </thead>
        <tbody>
        @foreach($categorias as $categoria)
            <tr class="">
                <td scope="row">{{($categoria->id)}}</td>
                <td>{{($categoria->nombre)}}</td>
                <td>{{($categoria->descricion)}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@include('categoria.create')

@endsection