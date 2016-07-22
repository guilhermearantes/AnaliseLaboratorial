
  
 <h1> Solicitar exame:</h1>
 


<?php

    $usuario = $this->Session->read('Paciente');


echo $this->Form->create('Exame');

echo $this->Form->hidden('paciente_id', ['value' => $usuario['0']['Paciente']['id']]); 
echo '</br>';
echo $this->Form->select('procedimento_id', $procedimentos, array('empty' => 'Selecione: '));
echo '</br>';

echo '</br>';
echo 'Digite a data:';
echo $this->Form->imput('data');
echo '</br>';
echo '</br>';

echo $this->Form->end('Salvar');
echo '</br>';
echo '</br>';

?>




        <?php  echo  $this->Html->link("Voltar", array('controller' => 'pacientes', 'action' => 'index')); ?>
