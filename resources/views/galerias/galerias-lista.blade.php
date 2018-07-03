@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-1 mb-5">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb pl-0 pr-0 bg-transparent">
                        <li class="breadcrumb-item"><a href="/home">Home</a></li>
                        <li class="breadcrumb-item"><a href="/galerias">Galerias</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Galeria 1</li>
                    </ol>
                </nav>
                <h4 class="mb-4">CADEIRA 1</h4>
                <div class="col-md-12 p-0">
                    <div class="row galerias">
                        <div class="col-md-4 text-center mb-3">
                            <a href="/galerias/galeria-1/evento/1">
                                <img src="/image/galeria1.jpeg" class="img-fluid" alt="Card image cap">
                                <div class="card-body text-left pl-0 pr-0">
                                    EVENTO 1
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 text-center mb-3">
                            <a href="/galerias/galeria-1/evento/1">
                                <img src="/image/galeria2.jpeg" class="img-fluid" alt="Card image cap">
                                <div class="card-body text-left pl-0 pr-0">
                                    EVENTO 1
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 text-center mb-3">
                            <a href="/galerias/galeria-1/evento/1">
                                <img src="/image/galeria3.jpeg" class="img-fluid" alt="Card image cap">
                                <div class="card-body text-left pl-0 pr-0">
                                    EVENTO 1
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 text-center mb-3">
                            <a href="/galerias/galeria-1/evento/1">
                                <img src="/image/galeria4.jpeg" class="img-fluid" alt="Card image cap">
                                <div class="card-body text-left pl-0 pr-0">
                                    EVENTO 1
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection