
<?php
echo form_open('login/uma_coluna');
?>
<div class="container">
    <h3 class="panel-title">Acesso à Área de Administração</h3>
    <fieldset>

        <div class="form-group">

            <label for="password">Login (CPF) <span class="required">*</span></label>


            <input id="login" type="text" name="username" maxlength="11" class="form-control campo_cpf" placeholder="digite seu CPF" value="<?php echo set_value('username'); ?>"  />
            <p><?php echo form_error('username'); ?></p>

        </div>

        <div class="form-group">
            <label for="password">Senha <span class="required">*</span></label>
            <input   id="password" type="password" name="password" class="form-control campo_senha" placeholder="mesma senha do SUAP" value="<?php echo set_value('password'); ?>"  />
            <p><?php echo form_error('password'); ?></p>

        </div>
        <div>&nbsp;</div>
        <div class="botoes_edicao">
            <input  class="btn btn-lg btn-success " type="submit" value="Acessar">
        </div>
    </fieldset>
     <?php echo form_close(); ?>
    <p>&nbsp;</p>
        <p><a href="#">Redefinir senha?</a></p>

</div>