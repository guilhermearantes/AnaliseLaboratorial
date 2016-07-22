</br>
<span class="notice success">

<?php echo $this->Html->link("Solicitar um Exame", array('controller' => 'exames', 'action' => 'index')); ?>
    
</span>

</br></br>

<span class="notice success">
                
<?php echo $this->Html->link("Exames solicitados ", array('class' => 'button', 'controller' => 'exames', 'action' => 'view'));?>

</span>

</br></br>
<?php  echo  $this->Html->link("Voltar", array('controller' => '/', 'action' => 'index')); ?>