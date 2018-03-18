@extends('adminlte::page')

@section('title', 'Sistema de Controle de Saldo')

@section('content_header')
<h1>Saldo</h1>

<ol class="breadcrumb">
    <li><a href="">Dashboard</a></li>
    <li><a href="">Saldo</a></li>
</ol>
@stop

@section('content')
<div class="box">
    <div class="box-header">
        <a href="{{ route('balance.deposit') }}" class="btn btn-success"><span class="fa fa-cart-plus"> Depositar</span></a>
        <a href="" class="btn btn-danger"><span class="fa fa-cart-arrow-down"> Sacar</span></a>
        <a href="" class="btn btn-warning"><span class="fa fa-exchange"> Transferir</span></a>
    </div>
    <div class="box-body">
        <div class="small-box bg-aqua-gradient">
            <div class="inner">
                <h3>R$ {{ number_format($amount, 2, ',', '.') }}</h3>
                <p>O saldo poderá ser alterado no decorrer do dia de acordo com suas transações diárias</p>
            </div>
            <div class="icon">
                <i class="ion ion-cash"></i>
            </div>
            <a href="#" class="small-box-footer">Histórico&nbsp;&nbsp;<i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>        
</div>
@stop