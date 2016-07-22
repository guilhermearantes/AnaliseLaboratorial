<?php

class ExamesController extends AppController {

  public $helpers = array('Html', 'Form');
  public $components = array('Flash');

  public function index() {
      
      if(empty($this->request->data)){
          
          $procedimentos = $this->Exame->Procedimento->find('list', array('fields' => array('id', 'nome')));
          $this->set('procedimentos', $procedimentos);
                    
      }else{
          
          
          if($this->Exame->save($this->request->data)){
              $this->Flash->set('Exame inserido com sucesso');
              $this->redirect(array('action' => 'index'));  
          }
      }   
  }

  
    public function relatorio(){
        
        
        $this->set('exames', $this->Exame->query('SELECT pacientes.id, pacientes.nome, procedimentos.id, procedimentos.nome, SUM(procedimentos.preco) total_procedimento, COUNT(exames.id) as num_exames FROM pacientes, procedimentos, exames WHERE exames.paciente_id = pacientes.id AND exames.procedimento_id = procedimentos.id GROUP BY pacientes.id, pacientes.nome, procedimentos.id, procedimentos.nome'));
        
        
    }
    
    public function total_geral(){

        $this->set('exames', $this->Exame->find('all'));
        $busca = $this->Exame->query("SELECT SUM(procedimentos.preco) total_procedimento 
        FROM pacientes, procedimentos, exames 
        WHERE exames.paciente_id = pacientes.id 
        AND exames.procedimento_id = procedimentos.id
        ;");

        $this->set('total_procedimento', $busca['0']['0']['total_procedimento']);
    }

    
    
        public function totalgeral_paciente(){
        
            
                 
        $bus = $this->set('exames', $this->Exame->query('SELECT pacientes.id, pacientes.nome, procedimentos.id, procedimentos.nome, SUM(procedimentos.preco) total_procedimento, COUNT(exames.id) as num_exames FROM pacientes, procedimentos, exames WHERE exames.paciente_id = pacientes.id AND exames.procedimento_id = procedimentos.id GROUP BY pacientes.id, pacientes.nome, procedimentos.id, procedimentos.nome'));
            

        $busca = $this->Exame->query("SELECT SUM(procedimentos.preco) total_procedimento 
        FROM pacientes, procedimentos, exames 
        WHERE exames.paciente_id = pacientes.id 
        AND exames.procedimento_id = procedimentos.id
        ;");

        $this->set('total_procedimento', $busca['0']['0']['total_procedimento']);    
            
        $this->set('num_exames', $bus['0']['0']['num_exames']);    

    }
    
    public function view_exames(){


        $this->set('exames', $this->Exame->find('all', array('order'=>array( 'Exame.data'=>'desc', 'Procedimento.nome'))));
                   
        }
    
       public function view_pacientes(){


        $this->set('exames', $this->Exame->find('all', array('order'=>array( 'Paciente.nome'=>'asc'))));
                     
        } 
    
    public function view(){
           
            $usuario = $this->Session->read('Paciente');   
            $this->set('exames', $this->Exame->find('all', array('order'=>array('data'=>'desc', 'Procedimento.nome'=>'asc'), 'conditions'=>array('paciente_id =' => $usuario['0']['Paciente']['id']))));
        }
    
    
    
    
    
    public function add() {

    if (empty($this->request->data)) {

      $pacientes = $this->Exame->Paciente->find('list', array('fields' => array('id', 'nome')));
      $procedimentos = $this->Exame->Procedimento->find('list', array('fields' => array('id', 'nome')));
      $this->set('pacientes', $pacientes);
      $this->set('procedimentos', $procedimentos);

    } else {

          if ($this->Exame->save($this->request->data)) {
            $this->Flash->set('Consulta inserida com Sucesso !');
            $this->redirect(array('action' => '/'));
          }
    }
}
    
        
    public function edit($codigo){
        
        if(empty ($this->request->data)){
            $exames = $this->Exame->find('list', array('fields' =>array('id')));
            $this->request->data = $this->Exame->findById($codigo);
        }else{
            if($this->Exame->save($this->request->data)){
                $this->Flash->set('Exame atualizado com sucesso');
                $this->redirect(array('action' => 'index'));
            }
        }
        
    }

    
        public function del($codigo){
        
        $this->Exame->delete($codigo);
        $this->Flash->set('Exame excluído com sucesso');
        $this->redirect(array('action' => 'index'));
    }
        
}
?>