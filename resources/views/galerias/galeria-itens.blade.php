@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-1 mb-5">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb pl-0 pr-0 bg-transparent">
                        <li class="breadcrumb-item"><a href="/home">Home</a></li>
                        <li class="breadcrumb-item"><a href="/galerias">Galerias</a></li>
                        <li class="breadcrumb-item"><a href="/galerias/galeria-1/1">Galeria 1</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Evento 1</li>
                    </ol>
                </nav>
                <h4 class="mb-4">EVENTO 1</h4>
                <div class="col-md-12 p-0">
                    <div class="row galerias">
                        <div class="col-md-4 text-center mb-4">
                            <a href="/image/galeria1.jpeg" data-toggle="lightbox" data-gallery="multiimages">
                                <img src="/image/galeria1.jpeg" class="img-fluid" alt="Card image cap">
                            </a>
                        </div>
                        <div class="col-md-4 text-center mb-4">
                            <a href="/image/galeria2.jpeg" data-toggle="lightbox" data-gallery="multiimages">
                                <img src="/image/galeria2.jpeg" class="img-fluid" alt="Card image cap">
                            </a>
                        </div>
                        <div class="col-md-4 text-center mb-4">
                            <a href="/image/galeria3.jpeg" data-toggle="lightbox" data-gallery="multiimages">
                                <img src="/image/galeria3.jpeg" class="img-fluid" alt="Card image cap">
                            </a>
                        </div>
                        <div class="col-md-4 text-center mb-4">
                            <a href="/image/galeria4.jpeg" data-toggle="lightbox" data-gallery="multiimages">
                                <img src="/image/galeria4.jpeg" class="img-fluid" alt="Card image cap">
                            </a>
                        </div>
                        <div class="col-md-4 text-center mb-4">
                            <a href="/image/galeria1.jpeg" data-toggle="lightbox" data-gallery="multiimages">
                                <img src="/image/galeria1.jpeg" class="img-fluid" alt="Card image cap">
                            </a>
                        </div>
                        <div class="col-md-4 text-center mb-4">
                            <a href="/image/galeria2.jpeg" data-toggle="lightbox" data-gallery="multiimages">
                                <img src="/image/galeria2.jpeg" class="img-fluid" alt="Card image cap">
                            </a>
                        </div>
                        <div class="col-md-4 text-center mb-4">
                            <a href="/image/galeria3.jpeg" data-toggle="lightbox" data-gallery="multiimages">
                                <img src="/image/galeria3.jpeg" class="img-fluid" alt="Card image cap">
                            </a>
                        </div>
                        <div class="col-md-4 text-center mb-4">
                            <a href="/image/galeria4.jpeg" data-toggle="lightbox" data-gallery="multiimages">
                                <img src="/image/galeria4.jpeg" class="img-fluid" alt="Card image cap">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection