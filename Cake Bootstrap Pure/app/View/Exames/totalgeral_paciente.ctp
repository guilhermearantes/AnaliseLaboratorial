<h3></br>Lista Total de Exames por Paciente:</h3>
 <?php $aux = 0; ?>
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
        
           <?php echo $e['0']['num_exames'];
            
            $aux = $aux + $e['0']['num_exames'];
            ?>
           
        </td>

        
    </tr>

    <tr>
        
    </tr>
    <?php endforeach; ?>
    
    <tr>
        <td>Total:</td>
        
        <td>           <?php echo $total_procedimento ?>
</td>
        
        <td>           <?php echo $aux ?>
</td>
        
    </tr>

</table> 
       
                    
          



</br></br>

        <?php  echo  $this->Html->link("Voltar", array('controller' => 'exames  ', 'action' => 'relatorio')); ?>
