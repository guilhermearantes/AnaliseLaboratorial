<h1>Inserir Exame</h1>

<?php

  echo $this->Form->create('Exame');
  echo $this->Form->input('data');
  echo $this->Form->select('paciente_id', $pacientes,
                array('empty' => 'Selecione:'));
  echo $this->Form->select('procedimento_id', $procedimentos,
                array('empty' => 'Selecione:'));
   echo $this->Form->end('Salvar');                  



 ?>
<?php echo $this->Html->link("Voltar", array('controller' => 'pacientes', 'action' => 'index')); ?>




