<h3></br>Lista Total de Exames por Paciente:</h3>

<table>
    
    <tr>
        <th>Nome</th>
        <th>Total do Paciente</th>
        <th>Quantidade</th>


    </tr>
        <?php foreach($exames as $e): ?>
       <tr>
        <td>
        
            <?php echo $e['pacientes']['nome']; ?>
        </td>

        
        <td>
        
           <?php echo $e['0']['total_procedimento'] ?>
        </td>
  
        
        <td>
        
           <?php echo $e['0']['num_exames'] ?>
        </td>
        
        
   
    </tr>
    

    <?php endforeach; ?>
    
       
</table> 
        <?php  echo  $this->Html->link("Voltar", array('controller' => 'exames  ', 'action' => 'relatorio')); ?>
