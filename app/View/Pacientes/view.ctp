<h1>Dados do Paciente:</h1>

<p>Código: <?php echo $paciente['Paciente']['id'] ?> </p>
<p>Login: <?php echo $paciente['Paciente']['login'] ?> </p>
<p>Senha: <?php echo $paciente['Paciente']['senha'] ?> </p>

   
<?php echo $this->Html->link("Adicionar", array('controller' => 'pacientes', 'action' => 'add', $paciente['Paciente']['id']));?>

<?php echo $this->Html->link("Editar", array('controller' => 'pacientes', 'action' => 'edit', $paciente['Paciente']['id']));?>

<?php echo $this->Html->link("Deletar", array('controller' => 'pacientes', 'action' => 'del', $paciente['Paciente']['id'])); ?>


</br></br>


<?php echo $this->Html->link("Voltar", array('controller' => 'pages', 'action' => 'admin')); ?>
