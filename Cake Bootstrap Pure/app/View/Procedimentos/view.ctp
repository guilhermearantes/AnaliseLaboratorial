<h1>Dados do Procedimento:</h1>

<p>Código: <?php echo $procedimento['Procedimento']['id'] ?> </p>
<p>Nome: <?php echo $procedimento['Procedimento']['nome'] ?> </p>
<p>Preço: <?php echo $procedimento['Procedimento']['preco'] ?> </p>

   
<?php echo $this->Html->link("Adicionar", array('controller' => 'procedimentos', 'action' => 'add', $procedimento['Procedimento']['id']));?>

<?php echo $this->Html->link("Editar", array('controller' => 'procedimentos', 'action' => 'edit', $procedimento['Procedimento']['id']));?>

<?php echo $this->Html->link("Deletar", array('controller' => 'procedimentos', 'action' => 'del', $procedimento['Procedimento']['id'])); ?>


</br></br>


<?php echo $this->Html->link("Voltar", array('controller' => 'procedimentos', 'action' => 'index')); ?>
