<h1> MENU </h1>
   

   <span class="notice success">
    
<?php echo $this->Html->link("Área Geral - Visualizar Procedimentos ", array('controller' => 'procedimentos', 'action' => 'index'));  ?>

</span>
</br></br>
<span class="notice success">
    
<?php echo $this->Html->link("Área do Paciente  ", array('controller' => 'pacientes', 'action' => 'index'));  ?>

</span>

</br></br>
<span class="notice success">
    
<?php echo $this->Html->link("Área Administrativa ", array('controller' => 'pages', 'action' => 'admin'));  ?>
</span>




</br></br>
<span class="notice success">
    
<?php echo $this->Html->link("Sair do sistema ", array('controller' => 'pacientes', 'action' => 'logout'));  ?>

</span>
