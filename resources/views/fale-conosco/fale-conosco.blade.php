@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-1 mb-5">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb pl-0 pr-0 bg-transparent font-weight-light">
                        <li class="breadcrumb-item"><a href="/home">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Fale conosco</li>
                    </ol>
                </nav>
                <h4 class="mb-4">FALE CONOSCO</h4>
                <div class="col-md-12 p-0">
                    <div class="row mb-3">
                        <div class="form-group col-md-4">
                            <h6><i class="fas fa-industry"></i> FÁBRICA</h6>
                            <p>
                                Ludovico Benedetti, 180 Bairro: Salgado Distrito Industrial
                                Bento Gonçalves - RS CEP: 95700-000
                            </p>
                        </div>
                        <div class="form-group col-md-4">
                            <h6><i class="fas fa-phone"></i> TELEFONE</h6>
                            <p>
                                (54) 2621.6886
                            </p>
                        </div>
                        <div class="form-group col-md-4">
                            <h6><i class="fas fa-at"></i> E-MAIL</h6>
                            <p>
                                teclinemoveis@teclinemoveis.com.br
                            </p>
                        </div>
                    </div>
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label>Nome</label>
                                <input type="text" id="nome" name="nome" class="form-control" placeholder="digite seu nome">
                            </div>
                            <div class="form-group col-md-3">
                                <label>E-mail</label>
                                <input type="text" id="email" name="email" class="form-control" placeholder="digite um e-mail">
                            </div>
                            <div class="form-group col-md-2">
                                <label>Telefone</label>
                                <input type="text" id="telefone" name="telefone" class="form-control" placeholder="telefone">
                            </div>
                            <div class="form-group col-md-12">
                                <textarea id="telefone" rows="10" name="telefone" class="form-control" placeholder="digite uma mensagem"></textarea>
                            </div>
                            <div class="form-group col-md-12 text-right">
                                <button type="button" class="btn btn-dark">Enviar mensagem</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection