@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-1 mb-5">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb pl-0 pr-0 bg-transparent">
                        <li class="breadcrumb-item"><a href="/home">Home</a></li>
                        <li class="breadcrumb-item"><a href="/produtos">Produtos</a></li>
                        <li class="breadcrumb-item"><a href="/produtos/cadeiras/1">Cadeiras</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Cadeira de descanso</li>
                    </ol>
                </nav>
                <h4 class="mb-4">CADEIRAS DE DESCANSO</h4>
                <div class="col-md-12 p-0">
                    <div id="carouselExampleIndicators" class="carousel slide carousel-produto" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="/image/cadeira_ver.png" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="/image/cadeira_ver.png" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="/image/cadeira_ver.png" alt="First slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <h6 class="mt-4">DESCRIÇÃO</h6>
                    <p>
                        Praticidade e Estilo. Elas fazem parte do dia a dia de todas as pessoas. é uma questão de praticidade e estilo. Essas peças personificam os espaços, valorizam ambientes de jantar e cozinhas. Para maiores informações entrar em contato com a fábrica.
                    </p>
                    <h6 class="mt-4">DIMENSÕES</h6>
                    <p>
                        61 x 62 x 160 cm<br />
                        24 1⁄64 x 24 13⁄32 x 62 63⁄64 pol.
                    </p>
                    <h6 class="mt-4">MATERIAIS</h6>
                    <p>
                        Estrutura em madeira maciça.
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection