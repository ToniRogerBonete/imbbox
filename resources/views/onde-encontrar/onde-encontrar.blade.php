@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-1 mb-5">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb pl-0 pr-0 bg-transparent font-weight-light">
                        <li class="breadcrumb-item"><a href="/home">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Onde encontrar</li>
                    </ol>
                </nav>
                <h4 class="mb-4">ENCONTRE O PRODUTO MAIS PRÓXIMO DE VOCÊ</h4>
                <div class="col-md-12 p-0">
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <select id="estado" name="estado" class="form-control">
                                    <option value="">Estado</option>
                                    <option value="AC">Acre</option>
                                    <option value="AL">Alagoas</option>
                                    <option value="AP">Amapá</option>
                                    <option value="AM">Amazonas</option>
                                    <option value="BA">Bahia</option>
                                    <option value="CE">Ceará</option>
                                    <option value="DF">Distrito Federal</option>
                                    <option value="ES">Espírito Santo</option>
                                    <option value="GO">Goiás</option>
                                    <option value="MA">Maranhão</option>
                                    <option value="MT">Mato Grosso</option>
                                    <option value="MS">Mato Grosso do Sul</option>
                                    <option value="MG">Minas Gerais</option>
                                    <option value="PA">Pará</option>
                                    <option value="PB">Paraíba</option>
                                    <option value="PR">Paraná</option>
                                    <option value="PE">Pernambuco</option>
                                    <option value="PI">Piauí</option>
                                    <option value="RJ">Rio de Janeiro</option>
                                    <option value="RN">Rio Grande do Norte</option>
                                    <option value="RS">Rio Grande do Sul</option>
                                    <option value="RO">Rondônia</option>
                                    <option value="RR">Roraima</option>
                                    <option value="SP">São Paulo</option>
                                    <option value="SC">Santa Catarina</option>
                                    <option value="SE">Sergipe</option>
                                    <option value="TO">Tocantins</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="text" id="cidade" name="cidade" class="form-control" placeholder="Cidade">
                            </div>
                            <div class="form-group col-md-3">
                                <button type="button" class="btn btn-dark">Encontrar</button>
                            </div>
                        </div>
                    </form>
                </div>
                <h5 class="mt-4 mb-3">
                    RESULTADO
                </h5>
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th>Representante</th>
                            <th>Cidade / Estado</th>
                            <th>Endereço</th>
                            <th class="text-right">Telefone</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Loja Tall</td>
                            <td>São Luís/MA</td>
                            <td>Av. Dos Holandeses, Quadra 07 – Lote 05 – Loja 03</td>
                            <td class="text-right">(98) 3268-2608</td>
                        </tr>
                        <tr>
                            <td>Loja Tall</td>
                            <td>São Luís/MA</td>
                            <td>Av. Dos Holandeses, Quadra 07 – Lote 05 – Loja 03</td>
                            <td class="text-right">(98) 3268-2608</td>
                        </tr>
                        <tr>
                            <td>Loja Tall</td>
                            <td>São Luís/MA</td>
                            <td>Av. Dos Holandeses, Quadra 07 – Lote 05 – Loja 03</td>
                            <td class="text-right">(98) 3268-2608</td>
                        </tr>
                        <tr>
                            <td>Loja Tall</td>
                            <td>São Luís/MA</td>
                            <td>Av. Dos Holandeses, Quadra 07 – Lote 05 – Loja 03</td>
                            <td class="text-right">(98) 3268-2608</td>
                        </tr>
                        <tr>
                            <td>Loja Tall</td>
                            <td>São Luís/MA</td>
                            <td>Av. Dos Holandeses, Quadra 07 – Lote 05 – Loja 03</td>
                            <td class="text-right">(98) 3268-2608</td>
                        </tr>
                        <tr>
                            <td>Loja Tall</td>
                            <td>São Luís/MA</td>
                            <td>Av. Dos Holandeses, Quadra 07 – Lote 05 – Loja 03</td>
                            <td class="text-right">(98) 3268-2608</td>
                        </tr>
                        <tr>
                            <td>Loja Tall</td>
                            <td>São Luís/MA</td>
                            <td>Av. Dos Holandeses, Quadra 07 – Lote 05 – Loja 03</td>
                            <td class="text-right">(98) 3268-2608</td>
                        </tr>
                        <tr>
                            <td>Loja Tall</td>
                            <td>São Luís/MA</td>
                            <td>Av. Dos Holandeses, Quadra 07 – Lote 05 – Loja 03</td>
                            <td class="text-right">(98) 3268-2608</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection