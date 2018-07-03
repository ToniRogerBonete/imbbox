@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-1 mb-5">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb pl-0 pr-0 bg-transparent font-weight-light">
                        <li class="breadcrumb-item"><a href="/home">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Catálogo</li>
                    </ol>
                </nav>
                <h4 class="mb-4">CATÁLOGO</h4>
                <h5 class="mt-4 mb-3">
                    Clique para baixar nossos catálogos
                </h5>
                <table class="table table-hover table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>Catálogo</th>
                        <th class="text-center" style="width: 5%;">Baixar</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Catálogo de banquetas</td>
                        <td class="text-center">
                            <a href="#">
                                <i class="fas fa-file-pdf fa-2x text-dark"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Catálogo de mesas</td>
                        <td class="text-center">
                            <a href="#">
                                <i class="fas fa-file-pdf fa-2x text-dark"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Catálogo de poltronas</td>
                        <td class="text-center">
                            <a href="#">
                                <i class="fas fa-file-pdf fa-2x text-dark"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Catálogo de cadeiras</td>
                        <td class="text-center">
                            <a href="#">
                                <i class="fas fa-file-pdf fa-2x text-dark"></i>
                            </a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection