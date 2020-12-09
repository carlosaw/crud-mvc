<?php $render('header'); ?>

<a class="new" href="<?= $base; ?>/novo">Novo Usuário</a>

<table border="1" width="100%">
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>E-MAIL</th>
        <th width="80">AÇÕES</th>
    </tr>
    <?php foreach ($usuarios as $usuario): ?>
        <tr>
            <td><?= $usuario['id']; ?></td>
            <td><?= $usuario['nome']; ?></td>
            <td><?= $usuario['email']; ?></td>
            <td style="text-align:center;">
                <a href="<?=$base;?>/usuario/<?=$usuario['id'];?>/editar">
                    <img width="20" src="<?=$base;?>/assets/images/edit.png" alt="" />
                </a>
                <a href="<?=$base;?>/usuario/<?=$usuario['id'] ?>/excluir"
                    onclick="return confirm('Tem certeza que deseja excluir este usuário?')">
                    <img width="20" src="<?=$base;?>/assets/images/del.jpg" alt="" />
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<?php $render('footer'); ?>