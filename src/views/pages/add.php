<?php $render('header'); ?>

<h2>Adicionar Novo Usuário</h2>

<form method="POST" action="<?=$base;?>/novo">
    <labeL>
        Nome:<br />
        <input type="text" name="name" />
    </labeL><br /><br />
    <labeL>
        E-mail:<br />
        <input type="email" name="email" />
    </labeL><br /><br />
    <input type="submit" value="Adicionar" />
</form>

<?php $render('footer'); ?>