@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-1 mb-5">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb pl-0 pr-0 bg-transparent font-weight-light">
                        <li class="breadcrumb-item"><a href="/home">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Trabalhe conosco</li>
                    </ol>
                </nav>
                <h4 class="mb-4">TRABALHE CONOSCO</h4>
                <div class="col-md-12 p-0">
                    <div class="row mb-3">
                        <div class="form-group col-md-12">
                            <p>
                                Se você deseja trabalhar conosco, você pode anexar o seu currículo ou preencher o formulário abaixo com suas informações
                            </p>
                        </div>
                    </div>
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label>Currículo</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                                    <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                    <div class="invalid-feedback">Example invalid custom file feedback</div>
                                </div>
                            </div>
                        </div>
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
                                <label>Data de nascimento</label>
                                <input type="text" id="data_nascimento" name="data_nascimento" class="form-control" placeholder="nascimento">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-2">
                                <label>Estado civil</label>
                                <select id="estado_civil" name="estado_civil" class="form-control">
                                    <option value="" selected="">selecione...</option>
                                    <option value="Casado(a)">Casado(a)</option>
                                    <option value="Divorciado(a)">Divorciado(a)</option>
                                    <option value="Outros(a)">Outros(a)</option>
                                    <option value="Separado(a)">Separado(a)</option>
                                    <option value="Solteiro(a)">Solteiro(a)</option>
                                    <option value="Viúvo(a)">Viúvo(a)</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label>Endereço</label>
                                <input type="text" id="email" name="email" class="form-control" placeholder="digite um e-mail">
                            </div>
                            <div class="form-group col-md-3">
                                <label>Cidade</label>
                                <input type="text" id="data_nascimento" name="data_nascimento" class="form-control" placeholder="digite a cidade">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-2">
                                <label>CEP</label>
                                <input type="text" id="nome" name="nome" class="form-control" placeholder="digite o CEP">
                            </div>
                            <div class="form-group col-md-2">
                                <label>Estado</label>
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
                            <div class="form-group col-md-2">
                                <label>País</label>
                                <input type="text" id="pais" name="pais" class="form-control" placeholder="digite o país">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-2">
                                <label>Fone</label>
                                <input type="text" id="fone" name="fone" class="form-control" placeholder="(54)0000-0000">
                            </div>
                            <div class="form-group col-md-2">
                                <label>Celular</label>
                                <input type="text" id="celular" name="celular" class="form-control" placeholder="(54)00000-0000">
                            </div>
                        </div>
                        <h5 class="mt-4">OBJETIVO NA EMPRESA</h5>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label>1ª Área de Interesse</label>
                                <select id="area_atuacao_1" name="area_atuacao_1" class="form-control">
                                    <option value="" selected="">selecione...</option>
                                    <option value="Adm./Financeiro">Adm./Financeiro</option>
                                    <option value="Arquitetos">Arquitetos</option>
                                    <option value="Comercial">Comercial</option>
                                    <option value="Comunicação">Comunicação</option>
                                    <option value="Contábil">Contábil</option>
                                    <option value="Controladoria">Controladoria</option>
                                    <option value="Decorador">Decorador</option>
                                    <option value="Desenv. Produto">Desenv. Produto</option>
                                    <option value="Designer de interiores">Designer de interiores</option>
                                    <option value="Distribuição/Logística">Distribuição/Logística</option>
                                    <option value="Engenheiro Civil">Engenheiro Civil</option>
                                    <option value="Exportação/Importação">Exportação/Importação</option>
                                    <option value="Industrial">Industrial</option>
                                    <option value="Manutenção">Manutenção</option>
                                    <option value="P.C.P.">P.C.P.</option>
                                    <option value="Qualidade">Qualidade</option>
                                    <option value="Recursos Humanos">Recursos Humanos</option>
                                    <option value="Representante Comercial">Representante Comercial</option>
                                    <option value="Suprimentos">Suprimentos</option>
                                    <option value="Tecnologia da Informação">Tecnologia da Informação</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label>2ª Área de Interesse</label>
                                <select id="area_atuacao_1" name="area_atuacao_1" class="form-control">
                                    <option value="" selected="">selecione...</option>
                                    <option value="Adm./Financeiro">Adm./Financeiro</option>
                                    <option value="Arquitetos">Arquitetos</option>
                                    <option value="Comercial">Comercial</option>
                                    <option value="Comunicação">Comunicação</option>
                                    <option value="Contábil">Contábil</option>
                                    <option value="Controladoria">Controladoria</option>
                                    <option value="Decorador">Decorador</option>
                                    <option value="Desenv. Produto">Desenv. Produto</option>
                                    <option value="Designer de interiores">Designer de interiores</option>
                                    <option value="Distribuição/Logística">Distribuição/Logística</option>
                                    <option value="Engenheiro Civil">Engenheiro Civil</option>
                                    <option value="Exportação/Importação">Exportação/Importação</option>
                                    <option value="Industrial">Industrial</option>
                                    <option value="Manutenção">Manutenção</option>
                                    <option value="P.C.P.">P.C.P.</option>
                                    <option value="Qualidade">Qualidade</option>
                                    <option value="Recursos Humanos">Recursos Humanos</option>
                                    <option value="Representante Comercial">Representante Comercial</option>
                                    <option value="Suprimentos">Suprimentos</option>
                                    <option value="Tecnologia da Informação">Tecnologia da Informação</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label>Disponibilidade para viagens?</label>
                                <select id="area_atuacao_1" name="area_atuacao_1" class="form-control">
                                    <option value="" selected="">selecione...</option>
                                    <option value="sim">Sim</option>
                                    <option value="não">Não</option>
                                </select>
                            </div>
                        </div>
                        <h5 class="mt-4">
                            CONHECIMENTOS EM INFORMÁTICA
                        </h5>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label>Linguagens de programação</label>
                                <select id="area_atuacao_1" name="area_atuacao_1" class="form-control">
                                    <option value="" selected="">selecione...</option>
                                    <option value="sim">Sim</option>
                                    <option value="não">Não</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label>Sistemas operacionais</label>
                                <select id="area_atuacao_1" name="area_atuacao_1" class="form-control">
                                    <option value="" selected="">selecione...</option>
                                    <option value="sim">Sim</option>
                                    <option value="não">Não</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label>Redes</label>
                                <select id="area_atuacao_1" name="area_atuacao_1" class="form-control">
                                    <option value="" selected="">selecione...</option>
                                    <option value="sim">Sim</option>
                                    <option value="não">Não</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label>Windows, Word e Excel</label>
                                <select id="area_atuacao_1" name="area_atuacao_1" class="form-control">
                                    <option value="" selected="">selecione...</option>
                                    <option value="sim">Sim</option>
                                    <option value="não">Não</option>
                                </select>
                            </div>
                        </div>
                        <h5 class="mt-4">
                            IDIOMAS
                        </h5>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label>Inglês</label>
                                <select id="area_atuacao_1" name="area_atuacao_1" class="form-control">
                                    <option value="" selected="">selecione...</option>
                                    <option value="sim">Básico</option>
                                    <option value="não">Intermediário</option>
                                    <option value="não">Fluente</option>
                                    <option value="não">Avançado</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label>Espanhol</label>
                                <select id="area_atuacao_1" name="area_atuacao_1" class="form-control">
                                    <option value="" selected="">selecione...</option>
                                    <option value="sim">Básico</option>
                                    <option value="não">Intermediário</option>
                                    <option value="não">Fluente</option>
                                    <option value="não">Avançado</option>
                                </select>
                            </div>
                        </div>
                        <h5 class="mt-4">
                            FORMAÇÃO ESCOLAR
                        </h5>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label>Descreva a formação</label>
                                <textarea id="telefone" rows="3" name="telefone" class="form-control" placeholder="digite uma mensagem"></textarea>
                            </div>
                        </div>
                        <h5 class="mt-4">
                            EXPERIÊNCIAS PROFISSIONAIS
                        </h5>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label>Última Empresa</label>
                                <input type="text" id="pais" name="pais" class="form-control" placeholder="última empresa">
                            </div>
                            <div class="form-group col-md-3">
                                <label>Cargo</label>
                                <input type="text" id="pais" name="pais" class="form-control" placeholder="cargo">
                            </div>
                            <div class="form-group col-md-2">
                                <label>Data de entrada</label>
                                <input type="text" id="pais" name="pais" class="form-control" placeholder="data de entrada">
                            </div>
                            <div class="form-group col-md-2">
                                <label>Data de saída</label>
                                <input type="text" id="pais" name="pais" class="form-control" placeholder="data de saída">
                            </div>
                            <div class="form-group col-md-12">
                                <label>Principais atividades</label>
                                <textarea id="telefone" rows="3" name="telefone" class="form-control" placeholder="descreva as principais atividades"></textarea>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label>Penúltima Empresa</label>
                                <input type="text" id="pais" name="pais" class="form-control" placeholder="penúltima empresa">
                            </div>
                            <div class="form-group col-md-3">
                                <label>Cargo</label>
                                <input type="text" id="pais" name="pais" class="form-control" placeholder="cargo">
                            </div>
                            <div class="form-group col-md-2">
                                <label>Data de entrada</label>
                                <input type="text" id="pais" name="pais" class="form-control" placeholder="data de entrada">
                            </div>
                            <div class="form-group col-md-2">
                                <label>Data de saída</label>
                                <input type="text" id="pais" name="pais" class="form-control" placeholder="dara de saída">
                            </div>
                            <div class="form-group col-md-12">
                                <label>Principais atividades</label>
                                <textarea id="telefone" rows="3" name="telefone" class="form-control" placeholder="descreva as principais atividades"></textarea>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12 text-right">
                                <button type="button" class="btn btn-dark">Enviar informações</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection