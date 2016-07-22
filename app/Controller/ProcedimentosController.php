<?php
class ProcedimentosController extends AppController {

  public $helpers = array('Html', 'Form');
  public $components = array('Flash');
    
  public function index() {
    $this->set('procedimentos', $this->Procedimento->find('all', array('order'=>array('Procedimento.nome' => 'asc'))));
  }
    
  public function view($codigo) {

    $procedimento = $this->Procedimento->findById($codigo);
    $this->set('procedimento', $procedimento);
  }

    
    public function add() {

        
    if (empty($this->request->data)) {
      // Data Vazia => campos para inserção

      // Carregar os estados para exibição
      $procedimentos = $this->Procedimento->find('list',
              array('fields' => array('id', 'nome')));

      
    } else {
      // Persistir os dados
      if ($this->Procedimento->save($this->request->data)) {
        $this->Flash->set('Procedimento inserido com Sucesso !');
        $this->redirect(array('action' => 'index'));
      }


    }

  }


        public function edit($codigo){
                
             if(empty ($this->request->data)){

                 $procedimentos = $this->Procedimento->find('list', array('fields' =>array('id', 'nome')));
            
                 $this->request->data = $this->Procedimento->findById($codigo);
            
        }else{
            
            //persistir dados
            if($this->Procedimento->save($this->request->data)){
                $this->Flash->set('Procedimento atualizada com sucesso');
                $this->redirect(array('action' => 'index'));
            }
        }
        
    }
    
    

    
    
    

        public function del($codigo){
        
        $this->Procedimento->delete($codigo);
        $this->Flash->set('Procedimento excluída com sucesso');
        $this->redirect(array('action' => 'index'));
    }



}
 ?>