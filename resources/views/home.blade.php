@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('ADMINISTAR') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Esta registrado') }}


                    <style>
                        .card-body{
                            color: #fff;
                            background-color: #252525;
                        }
    .coon{
        display: flex;
        justify-content: center;
    }
</style>
<div class="con">
<nav class="navbar navbar-expand navbar-dark bg-dark">
        <ul class="nav navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" href="{{'/'}}" aria-current="page">VENTAS<span class="visually-hidden">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('categorias')}}">Categorias</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('productos')}}">Productos</a>
            </li>
        </ul>
    </nav>


  <main class="container">


  <div class="row">
    <div class="col-md-2"></div>

    <div class="col-md-8">
        <br><br>
        @yield('content')
    </div>

    <div class="col-md-2"></div>

  </div>

  </main>
</div>
 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
