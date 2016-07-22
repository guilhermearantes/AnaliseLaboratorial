<h3>Relação de Procedimentos: </h3>

 
 <table>
  <tr>
    <th>Código</th>
    <th>Nome</th>
    <th>Preço</th>
  </tr>

  <?php foreach ($procedimentos as $p): ?>
    <tr>
      <td>
        <?php echo $p['Procedimento']['id']; ?>
      </td>
      <td>
        <?php echo $this->Html->link($p['Procedimento']['nome'],
                array('controller' => 'procedimentos',
                      'action' => 'view', $p['Procedimento']['id'])); ?>
      </td>
      <td>
        <?php echo $p['Procedimento']['preco']; ?>
      </td>
    </tr>
  <?php endforeach; ?>
</table>



<?php echo $this->Html->link("Voltar", array('controller' => '/', 'action' => 'index')); ?>
</br>