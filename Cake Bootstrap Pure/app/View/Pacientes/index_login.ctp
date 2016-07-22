<h1> Acesso ao Sistema </h1>

<?php

    echo $this->Form->create('Paciente', array('controller' => 'pacientes', 'url' => 'login'));


    echo $this->Form->input('login', array('label' => 'Nome do Paciente:'));

    echo '<label> Senha:</label>';

    echo $this->Form->password('senha');

    echo $this->Form->end('Acessar');

?>


        <?php  echo  $this->Html->link("Voltar", array('controller' => 'pages', 'action' => 'home')); ?>
