<span class="notice success">
    
<?php echo $this->Html->link("Lista de Exames ", array('controller' => 'exames', 'action' => 'view_exames'));  ?>

</span>

      </br></br>
       
<span class="notice success">
    
<?php echo $this->Html->link("Lista de Pacientes ", array('controller' => 'exames', 'action' => 'view_pacientes'));  ?>

</span>

</br></br>

<span class="notice success">
    
<?php echo $this->Html->link("Relatórios ", array('controller' => 'exames', 'action' => 'relatorio'));  ?>

</span>


</br></br>

<?php echo $this->Html->link("Voltar", array('controller' => '/', 'action' => 'index')); ?>
</br>