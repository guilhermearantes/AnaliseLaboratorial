<span class="notice success">

<?php echo $this->Html->link("Solicitar um Exame", array('controller' => 'exames', 'action' => 'index')); ?>
    
</span>



<span class="notice success">
                
<?php echo $this->Html->link("Exames solicitados ", array('class' => 'button', 'controller' => 'exames', 'action' => 'view'));?>

</span>


<?php  echo  $this->Html->link("Voltar", array('controller' => '/', 'action' => 'index')); ?>