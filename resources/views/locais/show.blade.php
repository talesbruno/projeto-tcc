@extends('layouts.header')


@section('titulo', $produto->nome)

@section('conteudo')

<div class="container-fluid">
    <div id="ponto-turistico-info">
        <div class="container">
            <div class="col-12">
                <h1 class="titulo-ponto-turistico">{{ $produto->nome}}</h1>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <p>{{ $produto->descricao }}</p>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="/img/imgprodutos/{{ $produto->imagem }}" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title">Informaçoes do produto</h5>
                            <p class="card-text">preço: {{ $produto->preco }}</p>
                            <p class="card-text">quantidade: {{ $produto->quantidade }}</p>
                            <p class="card-text">Postado por: {{ $produto->user->nome }}</p>
                            <form action="{{ route('site.addcarrinho')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{ $produto->id}}">
                                <input type="hidden" name="nome" value="{{ $produto->nome }}">
                                <input type="hidden" name="price" value="{{ $produto->preco }}">
                                <input type="number" name="qnt" value="1">
                                <input type="hidden" name="img" value="{{ $produto->imagem }}">
                                <button class="btn">Comprar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection