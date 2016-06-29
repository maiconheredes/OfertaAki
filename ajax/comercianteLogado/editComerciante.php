<?php
    @session_start();
    extract($_SESSION['comerciante']);
?>
<div id="load" class="col-sm-12 padding0px formCadastroComerciante">
    <div class="tituloCadastroComerciante text-center mb-50 mt-50">
        <span>
            -- Editar dados --
        </span>
    </div>
    <div class="cnpj_com col-sm-6">
        <label for="cnpj_com" class="text-center col-sm-6 mb-30">
            Informe o seu CNPJ
        </label>
        <input type="text" class="cnpj_com col-sm-6 mb-30" id="cnpj_com"
               name="cnpj_com" placeholder="CNPJ" maxlength="18"
               onfocus="$(this).mask('99.999.999/9999-99');"
               value="<?php echo$cnpj_com; ?>" disabled />
    </div>
    <div class="email_com col-sm-6">
        <label for="email_com" class="text-center col-sm-6 mb-30">
            Informe o seu EMAIL
        </label>
        <input type="text" class="email_com col-sm-6 mb-30" id="email_com"
               name="email_com" placeholder="EMAIL" maxlength="200"
               value="<?php echo$email_com; ?>" disabled />
    </div>
    <div class="senha_com col-sm-6">
        <label for="senha_com" class="text-center col-sm-6 mb-30">
            Informe o sua SENHA<br />(maximo 30 caracteres)
        </label>
        <input type="password" class="senha_com col-sm-6 mb-30" id="senha_com"
               name="senha_com" placeholder="SENHA" maxlength="30"
               value="<?php echo$senha_com; ?>"/>
    </div>
    <div class="senha_com2 col-sm-6">
        <label for="senha_com2" class="text-center col-sm-6 mb-30">
            Confirme a sua SENHA<br />(maximo 30 caracteres)
        </label>
        <input type="password" class="senha_com2 col-sm-6 mb-30" id="senha_com2"
               name="senha_com2" placeholder="CONFIRMAR SENHA" maxlength="30"
               value="<?php echo$senha_com; ?>"/>
    </div>
    <div class="logo_com col-sm-6">
        <label for="logo_com" class="text-center col-sm-6 mb-30">
            Insira a sua LOGO (opcional)
        </label>
        <input type="file" disabled class="logo_com col-sm-6 mb-30" id="logo_com"
               name="logo_com" maxlength="150" />
    </div>
    <div class="nomeFicticio_com col-sm-6">
        <label for="nomeFicticio_com" class="text-center col-sm-6 mb-30">
            Informe o Nome Fantasia<br />(opcional)
        </label>
        <input type="text" class="nomeFicticio_com col-sm-6 mb-30" id="nomeFicticio_com"
               name="nomeFicticio_com" placeholder="NOME DA EMPRESA" maxlength="100"
               value="<?php echo$nomeFicticio_com; ?>"/>
    </div>
    <div class="horarioInicio_com col-sm-6">
        <label for="horarioInicio_com" class="text-center col-sm-6 mb-30">
            Informe o horario que você abre o comercio<br />(opcional)
        </label>
        <input type="time" class="horarioInicio_com col-sm-6 mb-30" id="horarioInicio_com"
               name="horarioInicio_com"
               value="<?php echo$horarioInicio_com; ?>"/>
    </div>
    <div class="horarioFinal_com col-sm-6">
        <label for="horarioFinal_com" class="text-center col-sm-6 mb-30">
            Informe o horario que você fecha o comercio<br />(opcional)
        </label>
        <input type="time" class="horarioFinal_com col-sm-6 mb-30" id="horarioFinal_com"
               name="horarioFinal_com"
               value="<?php echo$horarioFinal_com; ?>" />
    </div>
    <div class="razaoSocial_com col-sm-6">
        <label for="razaoSocial_com" class="text-center col-sm-6 mb-30">
            Informe a Razão Social
        </label>
        <input type="text" class="razaoSocial_com col-sm-6 mb-30" id="razaoSocial_com"
               name="razaoSocial_com" placeholder="RAZÃO SOCIAL" maxlength="100"
               value="<?php echo$razaoSocial_com; ?>"/>
    </div>
    <div class="responsavel_com col-sm-6">
        <label for="responsavel_com" class="text-center col-sm-6 mb-30">
            Informe o Responsavel pelo Comercio
        </label>
        <input type="text" class="responsavel_com col-sm-6 mb-30" id="responsavel_com"
               name="responsavel_com" placeholder="RESPONSAVEL PELO COMERCIO" maxlength="150"
               value="<?php echo$responsavel_com; ?>"/>
    </div>
    <div class="cep_com col-sm-6">
        <label for="cep_com" class="text-center col-sm-6 mb-30">
            Informe o CEP da sua empresa
        </label>
        <input type="text" class="cep_com col-sm-6 mb-30" id="cep_com"
               name="cep_com" placeholder="CEP" maxlength="10"
               onfocus="$(this).mask('99.999-999');"
               onkeyup="buscaPorCep($(this));"
               value="<?php echo$cep_com; ?>"/>
    </div>
    <div class="id_cid_com col-sm-6">
        <label for="id_cid_com2" class="text-center col-sm-6 mb-30">
            Informe o sua Cidade
        </label>
        <div class="col-sm-6 padding0px">
            <input class="id_cid_com2 col-sm-12 mb-30" autocomplete="off" id="id_cid_com2" type="text"
                   name="id_cid_com2" onkeyup="javascript:getCidade2('#id_cid_com2');"
                   onblur="javascript:setReturnCidade();"
                   placeholder="Ex: Belo Horizonte"/>
            <input type="hidden" name="id_cid_com" class="id_cid_com" id="id_cid_com" />
            <div class="returnCidade padding0px col-sm-12" id="returnCidade"
                 style="position: absolute;top: 30px;">
            </div>
        </div>
    </div>
    <div class="bairro_com col-sm-6">
        <label for="bairro_com" class="text-center col-sm-6 mb-30">
            Informe o seu Bairro
        </label>
        <input type="text" class="bairro_com col-sm-6 mb-30" id="bairro_com"
               name="bairro_com" placeholder="BAIRRO" maxlength="100"
               value="<?php echo$bairro_com; ?>"/>
    </div>
    <div class="endereco_com col-sm-6">
        <label for="endereco_com" class="text-center col-sm-6 mb-30">
            Informe o seu Endereço
        </label>
        <input type="text" class="endereco_com col-sm-6 mb-30" id="endereco_com"
               name="endereco_com" placeholder="ENDEREÇO"
               value="<?php echo$endereco_com; ?>"/>
    </div>
    <div class="telefone_comerciante col-sm-12">
        <input type="hidden" name="countTelefone" id="countTelefone" class="countTelefone" />
        <input class="col-sm-12 mb-30" id="inserirTelefone" onclick="addTelefoneComerciante();"
               type="submit" value="Inserir Telefone">
    </div>
    <div class="buttonSubmit col-sm-12 mb-100">
        <input type="submit" onclick="validaEditCadastroComerciante();" value="Salvar Alterações" />
    </div>
</div>