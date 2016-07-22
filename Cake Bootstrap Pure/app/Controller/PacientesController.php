<?php
class PacientesController extends AppController {

    public $helpers = array('Html', 'Form');
    public $components = array('Flash');

    
    public function index() {

    $go = $this->Session->read("Paciente");
    if(isset($go)){

        $this->set('pacientes', $this->Paciente->Exame->find('all', array('order'=>array('Paciente.nome ASC'), 'conditions' => array ('Paciente.id' => $go['0']['Paciente']['id']))));
    }else{
        
        $this->redirect(array("action" => 'index_login'));
        
    }
    
}

    
    public function index1() {

    $go = $this->Session->read("Paciente");
    if(isset($go)){

        $this->set('pacientes', $this->Paciente->Exame->find('all', array('order'=>array('(Paciente.nome) ASC')), array('conditions' => array ('Paciente.id' => $go['0']['Paciente']['id']))));
    }else{
        
        $this->redirect(array("action" => 'index_login'));
        
    }
    
}
    

   public function view($codigo) {

    $paciente = $this->Paciente->findById($codigo);
    $this->set('paciente', $paciente);
  }   
 
    
    public function index_login(){

}
    
    
    public function login(){
        //validar usuario e verificar se esta setado
        
        if(!empty($this->data['Paciente']['login'])){
            //validar  
            $paciente = $this->Paciente->findAllByLoginAndSenha( $this->data['Paciente']['login'], $this->data['Paciente']['senha']);
                
            //se estiver correto:
            if(!empty($paciente)){
                
                $this->Flash->set('Acesso realizado com sucesso!');                
                $this->Session->write('Paciente', $paciente);                
                $this->redirect('index');
                exit();    
            }else{
             //caso contrário                
                $this->Flash->set('Login e/ou senha inválidos!!');
                $this->redirect(array('action' => 'index_login'));
                exit();                
            }    
        }
    }
    
    
       
    public function logout(){
        
        $this->Session->destroy();
        $this->Flash->set('Atividades encerradas com sucesso!');
        $this->redirect(array('action' => 'index_login'));
        exit();
    }
    

    
      public function add() {

    if (empty($this->request->data)) {
      // Data Vazia => campos para inserção

      // Carregar os estados para exibição
      $pacientes = $this->Paciente->find('list',
              array('fields' => array('id', 'nome')));

      // Setar na view a variável com os dados dos estados
      $this->set('pacientes', $pacientes);

    } else {
      // Persistir os dados
      if ($this->Paciente->save($this->request->data)) {
        $this->Flash->set('Paciente inserido com Sucesso !');
        $this->redirect(array('action' => 'index'));
      }
    }
  }
    
        public function edit($codigo){
        
        
             if(empty ($this->request->data)){
            //data vazia => CAMPOS PARA INSERÇÃO
            
            
            //carregar os estados para exibição
            $pacientes = $this->Paciente->find('list', array('fields' =>array('id', 'nome')));
            
            //setar na view a variavel com os dados dos estados
                        
            
            //recuperar os dados atuais
                 
                 $this->request->data = $this->Paciente->findById($codigo);
            
        }else{
            
            //persistir dados
            if($this->Paciente->save($this->request->data)){
                $this->Flash->set('Paciente atualizado com sucesso');
                $this->redirect(array('action' => 'index'));
            }
        }
        
    }
    
        public function del($codigo){
        
        $this->Paciente->delete($codigo);
        $this->Flash->set('Paciente excluído com sucesso');
        $this->redirect(array('action' => 'index'));
    }

    
    
}
 ?>