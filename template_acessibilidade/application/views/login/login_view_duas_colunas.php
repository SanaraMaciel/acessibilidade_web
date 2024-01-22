<?php
echo form_open('login/duas_colunas');
?>

<div  class="container">
    <div class="span6 alinhamento_esquerda">
        <h3 class="panel-title">Autenticação</h3>
        <!--<form accept-charset="UTF-8" role="form" method="post">-->
        <fieldset>
            <div class="form-group">

                <label for="login">Login (CPF) <span class="required">*</span></label>


                <input id="login" type="text" name="login" maxlength="11" class="form-control campo_cpf" value="<?php echo set_value('login'); ?>"  />
                <p><?php echo form_error('login'); ?></p>

            </div>

            <div class="form-group">
                <label for="senha">Senha <span class="required">*</span></label>
                <input   id="senha" type="password" name="senha" class="form-control campo_senha" value="<?php echo set_value('senha'); ?>"  />
                <p><?php echo form_error('senha'); ?></p>
                <p ><?php echo $erro; ?></p>
            </div>

            <div class="botoes_edicao">
                <input  class="btn btn-lg btn-success " type="submit" value="Acessar">
            </div>
        </fieldset>

        <?php echo form_close(); ?>

        <p>&nbsp;</p>
        <p><a href="#">Redefinir senha?</a></p>



    </div>

    <div   class="span6">
        <h3 class="panel-title">Cadastre-se</h3>
        <p>Caso seja seu primeiro acesso no sistema, clique no botão abaixo para realizar seu cadastro.</p>
        <div class="botoes_edicao">
            <a class="btn btn-lg btn-success " href="#">Adicionar usuário</a>
        </div>

    </div>
</div>