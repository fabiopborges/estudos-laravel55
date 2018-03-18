@extends('adminlte::page')

@section('title', 'Nova Recarga')

@section('content_header')
    <h1>Efetuar Recarga</h1>

    <ol class="breadcrumb">
        <li><a href="">Dashboard</a></li>
        <li><a href="">Depositar</a></li>
    </ol>

@stop

@section('content')
    
    <div class="box">
        <div class="box-body">
            <form method="POST" action="{{ route('deposit.store') }}">
                {!!  csrf_field() !!}
                <div class="form-group" >
                    <input type="text" name="valor" placeholder="Insira aqui o valor do deposito" class="form-control"/>
                </div>
               <div class="form-group">
                    <button type="submit" class="btn btn-success"><span class="fa fa-cart-plus"> Depositar</button>
               <div>
           </form>
        </div>

    </div>

@stop