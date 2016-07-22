<h1>Editar Cidade</h1>


<?php 

echo $this->Form->create('Paciente');


echo $this->Form->input('nome');


echo $this->Form->input('login');

echo $this->Form->input('senha');

echo $this->Form->end('Salvar');
?>



<?php echo $this->Html->link("Voltar", array('controller' => 'pacientes', 'action' => 'index')); ?>
