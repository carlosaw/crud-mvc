<?php $render('header'); ?>

<h2>Editar Usuário</h2>

<form method="POST" action="<?=$base;?>/usuario/<?=$usuario['id'];?>/editar">
    <labeL>
        Nome:<br />
        <input type="text" name="name" value="<?=$usuario['nome'];?>" />
    </labeL><br /><br />
    <labeL>
        E-mail:<br />
        <input type="email" name="email" value="<?=$usuario['email'];?>" />
    </labeL><br /><br />
    <input type="submit" value="Salvar" />
</form>

<?php $render('footer'); ?>