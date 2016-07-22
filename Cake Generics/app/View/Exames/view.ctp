
<h3></br>Lista de Exames Solicitados:</h3>

  
        <table>
            <tr>
                <th>Paciente:</th>
                <th>Procedimento:</th>
                <th>Data:</th>
            </tr>

            <?php foreach ($exames as $n): ?>
                <tr>
              <td>  
              <?php echo $this->Html->link($n['Paciente']['nome'],  
              array('controller' => 'pacientes',
              'action' => 'view', $n['Paciente']['id'])); ?>
              </td>
                                     
                  <td>  
              <?php echo $this->Html->link($n['Procedimento']['nome'],
              array('controller' => 'procedimentos',
              'action' => 'view', $n['Procedimento']['id'])); ?>
              </td>
                                  
                        
                <td>
                <?php echo $n['Exame']['data']; ?>
                </td>

      
                <?php endforeach; ?>
        
        </table>


        <?php  echo  $this->Html->link("Voltar", array('controller' => 'pacientes', 'action' => 'index')); ?>
