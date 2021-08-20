<div class="card-body">  
                    <div class="form-group col-md-12">
                        <div class="col-md-12">
                            {!! Form::checkbox('dados-pessoais', null, true, array('id' => 'dp')) !!}  <label>Dados pessoais</label>
                        </div>
                        <div class="desabilitado" id="dados-pessoais">
                            <div class="row">
                                <div class="form-group col-md-8">
                                    <label>Nome completo*</label>
                                    {!! Form::text('nome', null, array('placeholder' => 'Digite seu nome completo','class' => 'form-control')) !!}
                                    <!-- <input type="hidden" name="cadEdital" value="1"> -->
                                </div>
                                <div class="form-group col-md-4">
                                    <label>CPF*</label>
                                    {!! Form::text('cpf', null, array('class' => 'form-control', 'placeholder' => 'Digite o seu CPF', 'data-imputmask' => '"mask":"999999999-99"', 'data-mask' => '', 'maxlength' => '24')) !!}
                                </div>
                                <div class="form-group col-md-4">
                                    <label>RG*</label>
                                    {!! Form::text('rg', null, array('class' => 'form-control', 'placeholder' => 'Digite o seu RG')) !!}
                                </div> 
                                <div class="form-group col-md-4">
                                    <label>Orgão expedidor*</label>
                                    {!! Form::select('orgao_expedidor', ['SSP','SES','POM','POF','MMA','MEX','MAE','ITEP','IPF','EXERC','DIC','CNT'], null, array('class' => 'form-control', 'placeholder' => 'Escolha um orgão')) !!}
                                </div>
                                <div class="form-group col-md-4">
                                    <label>N° do PIS ou NIT*</label>
                                    {!! Form::text('n_pis_nit', null, array('class' => 'form-control', 'placeholder' => 'Digite o seu numero do PIS ou NIT')) !!}
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Telefone celular*</label>
                                    {!! Form::text('telefone_celular', null, array('class' => 'form-control', 'placeholder' => 'Digite o seu celular', 'data-imputmask' => '"mask":"(99)99999-9999"', 'data-mask' => '', 'maxlength' => '14')) !!}
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Telefone fixo</label>
                                    {!! Form::text('telefone_fixo', null, array('class' => 'form-control', 'placeholder' => 'Digite o seu telefone fixo', 'data-imputmask' => '"mask":"(99)9999-9999"', 'data-mask' => '', 'maxlength' => '13')) !!}
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Email*</label>
                                    {!! Form::text('email', null, array('class' => 'form-control', 'placeholder' => 'Digite o seu email')) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <div class="col-md-12">
                            {!! Form::checkbox('endereco', null, true, array('id' => 'end')) !!}  <label>Endereco</label>
                        </div>
                        <div class="desabilitado" id="endereco">
                            <div class="row">
                                <div class="form-group col-md-8">
                                    <label>Logradouro*</label>
                                    {!! Form::text('logradouro', null, array('placeholder' => 'Digite seu logradouro','class' => 'form-control')) !!}
                                    <!-- <input type="hidden" name="cadEdital" value="1"> -->
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Numero*</label>
                                    {!! Form::text('numero', null, array('placeholder' => 'Digite o numero','class' => 'form-control')) !!}
                                    <!-- <input type="hidden" name="cadEdital" value="1"> -->
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Estado*</label>
                                    {!! Form::select('estado', [], null, array('class' => 'form-control', 'placeholder' => 'Escolha o seu estado')) !!}
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Cidade*</label>
                                    {!! Form::select('cidade', [], null, array('class' => 'form-control', 'placeholder' => 'Escolha a sua cidade')) !!}
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Bairro*</label>
                                    {!! Form::text('bairro', null, array('class' => 'form-control', 'placeholder' => 'Digite o seu bairro')) !!}
                                </div>
                                <div class="form-group col-md-4">
                                    <label>CEP*</label>
                                    {!! Form::text('cep', null, array('class' => 'form-control', 'placeholder' => 'Digite o CEP')) !!}
                                </div> 
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <div class="col-md-12">
                            {!! Form::checkbox('dados-bancarios', null, true, array('id' => 'db')) !!}  <label>Dados Bancarios</label>
                        </div>
                        <div class="desabilitado" id="dados-bancarios">
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label>Banco*</label>
                                    {!! Form::text('banco', null, array('class' => 'form-control', 'placeholder' => 'Digite o nome do seu banco')) !!}
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Agencia*</label>
                                    {!! Form::text('agencia', null, array('class' => 'form-control', 'placeholder' => 'Digite a sua agencia')) !!}
                                </div> 
                                <div class="form-group col-md-4">
                                    <label>Conta corrente e Digito*</label>
                                    {!! Form::text('conta_corrente', null, array('class' => 'form-control', 'placeholder' => '0000000-0')) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <div class="col-md-12">
                            {!! Form::checkbox('outros', null, true, array('id' => 'out')) !!}  <label>Outros</label>
                        </div>
                        <div class="desabilitado" id="outros">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label>Numero de matricula*</label>
                                    {!! Form::text('matricula', null, array('class' => 'form-control', 'placeholder' => 'Digite o seu numero de matricula')) !!}
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Função*</label>
                                    <!-- // onde tem ['Teste','Teste_2'] tem que colocar $funcoes; -->
                                    {!! Form::select('fk_funcao', [], null, array('class' => 'form-control', 'placeholder' => 'Escolha uma função')) !!}
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Curso*</label>
                                    {!! Form::text('curso', null, array('class' => 'form-control', 'placeholder' => 'Digite o curso')) !!}
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Semestre/Ano de Provável conclusão*</label>
                                    {!! Form::text('curso', null, array('class' => 'form-control', 'placeholder' => 'Digite o curso')) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                

