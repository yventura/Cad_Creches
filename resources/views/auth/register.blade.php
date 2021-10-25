@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'register', 'title' => __('')])

@section('content')
    <div class="container" style="height: auto;">
        <div class="row">
            <div class="col">
                <form class="form" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                        @csrf
                            <div class="card ">
                                <div class="card-header card-header-success">
                                    <h4 class="card-title text-center">{{ __('Ficha de Cadastramento - Creche') }}</h4>
                                </div>

                                <div class="row">
                                    <div class="form-group text-right" style="padding-left: 900px ">
                                        <label style="color: black" class="m-3 text-right">{{ __('Etapa') }}</label>
                                        <select class="col col-5 text-center">
                                            <option>B1 - Berçario</option>
                                            <option>B2 - Infantil I</option>
                                            <option>M1 - Infantil II</option>
                                            <option>M2 - Infantil III</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <label style="color: black" class="col-sm-2 m-3">{{ __('Nascimento') }}</label>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <input class="form-control  text-center" name="valor_ca_01" id="input-valor_ca_01"required/>
                                        </div>
                                    </div>

                                    <div class="form-group col-sm-6">
                                        <label style="color: black; padding-left: 30px" class="m-3">{{ __('Sexo') }}</label>
                                        <select class="col-sm-3 text-center">
                                            <option>Masculino</option>
                                            <option>Feminino</option>
                                        </select>

                                        <label style="color: black; padding-left: 30px" class="m-3">{{ __('Horário da Vaga') }}</label>
                                        <select class="col-sm-3 text-center">
                                            <option>Integral</option>
                                            <option>Parcial</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <label style="color: black" class="col-sm-2 col-form-label m-3">{{ __('Endereço') }}</label>
                                    <div class="col-8">
                                        <div class="form-group">
                                            <input class="form-control" name="end" id="input-end" required/>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <label style="color: black" class="col-sm-2 m-3">{{ __('Número') }}</label>
                                    <div class="col-sm-1">
                                        <div class="form-group">
                                            <input class="form-control" name="valor_ca_01" id="input-valor_ca_01"required/>
                                        </div>
                                    </div>

                                    <label style="color: black" class="m-3">{{ __('Cidade') }}</label>
                                    <div class="col-2">
                                        <div class="form-group">
                                            <input class="form-control" name="valor_ca_01" id="input-valor_ca_01"required/>
                                        </div>
                                    </div>

                                    <label style="color: black" class="m-3">{{ __('UF') }}</label>
                                    <div class="col-sm-1">
                                        <div class="form-group">
                                            <input class="form-control" name="valor_ca_01" id="input-valor_ca_01"required/>
                                        </div>
                                    </div>

                                    <label style="color: black" class="m-3">{{ __('Complemento') }}</label>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <input class="form-control" name="valor_ca_01" id="input-valor_ca_01"required/>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <label style="color: black" class="col-sm-2 m-3">{{ __('Bairro') }}</label>
                                    <div class="col-2">
                                        <div class="form-group">
                                            <input class="form-control" name="valor_ca_01" id="input-valor_ca_01"required/>
                                        </div>
                                    </div>

                                    <label style="color: black" class="m-3">{{ __('CEP') }}</label>
                                    <div class="col-2">
                                        <div class="form-group">
                                            <input class="form-control" name="valor_ca_01" id="input-valor_ca_01"required/>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <label style="color: black" class="col-sm-2 col-form-label m-3">{{ __('Nome da Mãe') }}</label>
                                    <div class="col-8">
                                        <div class="form-group">
                                            <input class="form-control" name="end" id="input-end" required/>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <label style="color: black" class="col-sm-2 col-form-label m-3">{{ __('Nome do Pai') }}</label>
                                    <div class="col-8">
                                        <div class="form-group">
                                            <input class="form-control" name="end" id="input-end" required/>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-sm-8" style="margin-left: 20px">
                                        <table border="1" class="col col-sm-5">
                                            <thead>
                                            <tr>
                                                <th class="text-center">Telefone 1</th>
                                                <th><input class="col col-sm-12"></th>
                                            </tr>
                                            <tr>
                                                <th class="text-center">Telefone 2</th>
                                                <th><input class="col col-sm-12"></th>
                                            </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>

                                <div class="row">
                                    <label style="color: black" class="col-sm-2 m-3">{{ __('Observação') }}</label>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <textarea class="form-control" name="valor_ca_01" id="input-valor_ca_01" required></textarea>
                                        </div>
                                    </div>

                                    <label style="color: black" class="m-3">{{ __('N° NIS') }}</label>
                                    <div class="form-group">
                                        <input class="form-control" name="valor_ca_01" id="input-valor_ca_01"required/>
                                    </div>
                                </div>

                                <div class="row">
                                    <label style="color: black" class="col-sm-2 m-3">{{ __('Renda Familiar') }}</label>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <input class="form-control  text-center" name="valor_ca_01" id="input-valor_ca_01" required/>
                                        </div>
                                    </div>

                                    <div class="form-group col-sm-6">
                                        <label style="color: black; padding-left: 30px" class="m-3">{{ __('Trabalha') }}</label>
                                        <select class="col-sm-3 text-center">
                                            <option>Sim</option>
                                            <option>Não</option>
                                        </select>

                                        <label style="color: black; padding-left: 10px" class="m-3">{{ __('Bolsa Familia') }}</label>
                                        <select class="col-sm-3 text-center">
                                            <option>Sim</option>
                                            <option>Não</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-sm-8" style="margin-left: 20px">
                                        <caption>Profissão dos responsáveis</caption>
                                        <table border="1" class="col col-lg-11">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">Mãe</th>
                                                    <th><input class="col col-lg-12"></th>
                                                </tr>
                                                <tr>
                                                    <th class="text-center">Pai</th>
                                                    <th><input class="col col-md-12"></th>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>

                                    <div class="form-group col-sm-8" style="margin-left: 20px">
                                        <caption>Nome da empresa | Local de trabalho</caption>
                                        <table border="1" class="col col-lg-11">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">Mãe</th>
                                                    <th><input class="col col-lg-12"></th>
                                                </tr>
                                                <tr>
                                                    <th class="text-center">Pai</th>
                                                    <th><input class="col col-md-12"></th>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>

                                    <div class="form-group col-sm-8" style="margin-left: 20px">
                                        <caption>Telefone da empresa</caption>
                                        <table border="1" class="col col-lg-11">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">Mãe</th>
                                                    <th><input class="col col-lg-12"></th>
                                                </tr>
                                                <tr>
                                                    <th class="text-center">Pai</th>
                                                    <th><input class="col col-md-12"></th>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>

                                    <div class="form-group col-sm-8" style="margin-left: 20px">
                                        <caption>Observação</caption>
                                        <table border="1" class="col col-lg-11">
                                            <thead>
                                                <tr>
                                                    <th>
                                                        <textarea class="col col-md-12"></textarea>
                                                    </th>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col">
                                        <table border="1" class="col col-sm-5">
                                            <thead>
                                                <h2 class="text-center">DECLARAÇÃO DE TERMOS</h2>
                                            </thead>
                                        </table>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col">
                                        <table border="1" class="col col-sm-5">
                                            <thead>
                                            <h6 class="col-sm-12">
                                                - Declaro estar ciente das informações fornecidas e que qualquer informação inverídica será apurada judicialmente implicando em sanções previstas no Art. 297 (Falsificação Documental) combinado com o Art. 299 (Falsidade Ideológica) do Código Penal;
                                            </h6>
                                            <h6 class="col-sm-12">
                                                - Declaro que informarei mudanças de endereço/telefone, na Unidade ou na Secretaria de Educação para não perder a vaga;
                                            </h6>
                                            <h6 class="col-sm-12">
                                                - Estou ciente que só é permitido um único cadastro na Unidade mais próxima da minha residência. Outros cadastros serão cancelados automaticamente pelo sistema, prevalecendo sempre somente a primeira inscrição;
                                            </h6>
                                            <h6 class="col-sm-12">
                                                - Declaro estar ciente que serão realizadas 03 tentativas de contato telefônico (em dias e horários diferentes) para informação da vaga disponibilizada e se eu não atender, perderei a vaga, tendo que fazer novo cadastro;
                                            </h6>
                                            <h6 class="col-sm-12">
                                                - Ao aceitar a vaga só poderei solicitar transferência no último trimestre do ano, que entrará em análise para possível atendimento no ano seguinte;
                                            </h6>
                                            </thead>
                                        </table>
                                        <input class="col col-sm-5" style="padding-left: 30px" type="checkbox" required> Concordo com os termos citados a cima.
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-sm-8" style="margin-left: 20px">
                                        <table border="1" class="col col-sm-5">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">N° RG</th>
                                                    <th><input class="col col-sm-12"></th>
                                                </tr>
                                                <tr>
                                                    <th class="text-center">N° CPF</th>
                                                    <th><input class="col col-sm-12"></th>
                                                </tr>
                                                <tr>
                                                    <th class="text-center">UF</th>
                                                    <th><input class="col col-sm-4"></th>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>

                                <div class="text-center mt-3 mb-4">
                                    <button type="submit" class="btn btn-success ">{{ __('Cadastrar Ficha') }}</button>
                                </div>
                                <!-- Fim Dados -->
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
@endsection
