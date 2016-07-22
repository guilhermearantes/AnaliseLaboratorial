
  
 <h1> Solicitar exame:</h1>
 


<?php

    $usuario = $this->Session->read('Paciente');


echo $this->Form->create('Exame');

echo $this->Form->hidden('paciente_id', ['value' => $usuario['0']['Paciente']['id']]);
echo $this->Form->select('procedimento_id', $procedimentos, array('empty' => 'Selecione: '));
echo $this->Form->imput('data');

echo $this->Form->end('Salvar');

?>




        <?php  echo  $this->Html->link("Voltar", array('controller' => 'pacientes', 'action' => 'index')); ?>
