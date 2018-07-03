@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-1 mb-5">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb pl-0 pr-0 bg-transparent">
                        <li class="breadcrumb-item"><a href="/home">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Produtos</li>
                    </ol>
                </nav>
                <h4 class="mb-4">PRODUTOS</h4>
                <div class="col-md-12 p-0">
                    <div class="row galerias">
                        <div class="col-md-6 p-0 text-center">
                            <a href="/produtos/cadeiras/1">
                                <img src="/image/cadeiras.png" alt="Card image cap">
                                <div class="card-body text-left">
                                    CADEIRAS
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 p-0 text-center">
                            <a href="/produtos/cadeiras/1">
                                <img src="/image/banquetas.png" alt="Card image cap">
                                <div class="card-body text-left">
                                    BANQUETAS
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 p-0 text-center">
                            <a href="/produtos/cadeiras/1">
                                <img src="/image/mesas.png" alt="Card image cap">
                                <div class="card-body text-left">
                                    MESAS
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 p-0 text-center">
                            <a href="/produtos/cadeiras/1">
                                <img src="/image/poltronas.png" alt="Card image cap">
                                <div class="card-body text-left">
                                    POLTRONAS
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection