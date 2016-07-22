<h1>Editar Procedimento</h1>


<?php 

echo $this->Form->create('Procedimento');
echo $this->Form->input('nome');
echo $this->Form->input('preco');
echo $this->Form->end('Salvar');

?>

<?php echo $this->Html->link("Voltar", array('controller' => 'procedimentos', 'action' => 'index')); ?>
