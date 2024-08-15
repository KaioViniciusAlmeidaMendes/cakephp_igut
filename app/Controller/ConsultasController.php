<?php
class ConsultasController extends AppController
{
    public $helpers = array('Html', 'Form', 'Flash');
    public $components = array('Flash');

    public function index()
    {
        $this->layout = 'ajax';

        $consultas = $this->Consulta->find('all', array(
            'joins' => array(
                array(
                    'table' => 'pacientes',
                    'alias' => 'Paciente',
                    'type' => 'INNER',
                    'conditions' => array(
                        'Consulta.paciente_id = Paciente.id'
                    )
                ),
                array(
                    'table' => 'medicos',
                    'alias' => 'Medico',
                    'type' => 'INNER',
                    'conditions' => array(
                        'Consulta.medico_id = Medico.id'
                    )
                ),
                array(
                    'table' => 'convenios',
                    'alias' => 'Convenio',
                    'type' => 'INNER',
                    'conditions' => array(
                        'Consulta.convenio_id = Convenio.id'
                    )
                ),
                array(
                    'table' => 'atendimentos',
                    'alias' => 'Atendimento',
                    'type' => 'INNER',
                    'conditions' => array(
                        'Consulta.atendimento_id = Atendimento.id'
                    )
                )
            ),
            'fields' => array(
                'Consulta.*',
                'Paciente.nome AS PacienteNome',
                'Medico.nome AS MedicoNome',
                'Convenio.nome AS ConvenioNome',
                'Atendimento.nome AS AtendimentoNome'
            )
        ));
        foreach ($consultas as &$consulta) {
            $consulta['Consulta']['data_consulta'] = date('d/m/Y H:i', strtotime($consulta['Consulta']['data_consulta']));
        }

        // echo "<pre>";
        // print_r($consultas);
        // exit;

        $this->set('consultas', $consultas);
    }
    public function edit($id = null)
    {
        $this->layout = 'ajax';
        $medicos = $this->Consulta->query("
        SELECT id, nome 
        FROM medicos
        ");
            // Processa os dados para passar à view
            $medicoList = [];
            foreach ($medicos as $medico) {
                $medicoList[$medico['medicos']['id']] = $medico['medicos']['nome'];
            }
            // Passa a lista de médicos para a view
            $this->set(compact('medicoList'));
    
            $pacientes = $this->Consulta->query("
            SELECT id, nome
            From pacientes
            ");
            $pacienteList = [];
            foreach($pacientes as $paciente){
                $pacienteList[$paciente['pacientes']['id']] = $paciente['pacientes']['nome'];
            }
            $this->set(compact('pacienteList'));
    
            $convenios = $this->Consulta->query("
            SELECT id, nome
            From convenios
            ");
            $convenioList = [];
            foreach($convenios as $convenio){
                $convenioList[$convenio['convenios']['id']] = $convenio['convenios']['nome'];
            }
            $this->set(compact('convenioList'));
    
            $atendimentos =  $this->Consulta->query("
            SELECT id, nome
            FROM atendimentos
            ");
            $atendimentoList = [];
            foreach($atendimentos as $atendimento){
                $atendimentoList[$atendimento['atendimentos']['id']] = $atendimento['atendimentos']['nome'];
            }
            $this->set(compact('atendimentoList'));
        if (!$id) {
            throw new NotFoundException(__('invalid post'));
        }
        $consulta = $this->Consulta->findById($id);
        if (!$consulta) {
            throw new NotFoundException(__('Invalid Post'));
        }
        $this->set('consulta', $consulta);
    }
    public function add()
    {
        $this->layout = 'ajax';
        // Busca manual dos médicos
        $medicos = $this->Consulta->query("
    SELECT id, nome 
    FROM medicos
    ");
        // Processa os dados para passar à view
        $medicoList = [];
        foreach ($medicos as $medico) {
            $medicoList[$medico['medicos']['id']] = $medico['medicos']['nome'];
        }
        // Passa a lista de médicos para a view
        $this->set(compact('medicoList'));

        $pacientes = $this->Consulta->query("
        SELECT id, nome
        From pacientes
        ");
        $pacienteList = [];
        foreach($pacientes as $paciente){
            $pacienteList[$paciente['pacientes']['id']] = $paciente['pacientes']['nome'];
        }
        $this->set(compact('pacienteList'));

        $convenios = $this->Consulta->query("
        SELECT id, nome
        From convenios
        ");
        $convenioList = [];
        foreach($convenios as $convenio){
            $convenioList[$convenio['convenios']['id']] = $convenio['convenios']['nome'];
        }
        $this->set(compact('convenioList'));

        $atendimentos =  $this->Consulta->query("
        SELECT id, nome
        FROM atendimentos
        ");
        $atendimentoList = [];
        foreach($atendimentos as $atendimento){
            $atendimentoList[$atendimento['atendimentos']['id']] = $atendimento['atendimentos']['nome'];
        }
        $this->set(compact('atendimentoList'));

        if ($this->request->is('post')) {
            $this->Consulta->create();
            if ($this->Consulta->save($this->request->data)) {
                $this->Flash->success(__('Your post has been saved.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Flash->error(__('Unable to add your post.'));
        }
    }

    public function save($id = null)
    {
        $this->layout = 'ajax';
        
        if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }
        
        $consulta = $this->Consulta->findById($id);
        if (!$consulta) {
            throw new NotFoundException(__('Invalid post'));
        }
        
        // Verifica se a requisição é 'PUT' (indica que o usuário está desmarcando a consulta)
        if ($this->request->is('put')) {
            $this->Consulta->id = $id;
    
            // Alterar o status para 'desmarcado'
            if ($this->Consulta->saveField('status', 'desmarcado')) {
                $this->Flash->success(__('A consulta foi desmarcada com sucesso.'));
            } else {
                $this->Flash->error(__('Não foi possível desmarcar a consulta.'));
            }
            return $this->redirect(array('action' => 'index'));
        }
    
        // Se for um 'post' ou 'put' comum (edição da consulta)
        if ($this->request->is(array('post', 'put'))) {
            $this->Consulta->id = $id;
            
            if ($this->Consulta->save($this->request->data)) {
                $this->Flash->success(__('A consulta foi atualizada com sucesso.'));
            } else {
                $this->Flash->error(__('Não foi possível atualizar a consulta.'));
            }
            return $this->redirect(array('action' => 'index'));
        }
    
        if (!$this->request->data) {
            $this->request->data = $consulta;
        }
    }
    public function delete($id)
    {
        $this->layout = 'ajax';
        if ($this->request->is('get')) {
            throw new MethodNotAllowedException();
        }

        if ($this->Consulta->delete($id)) {
            $this->Flash->success(
                __('The post with id: %s has been deleted.', h($id))
            );
        } else {
            $this->Flash->error(
                __('The post with id: %s could not be deleted.', h($id))
            );
        }
        return $this->redirect(array('action' => 'index'));
    }
    // echo "<pre>";
        // print_r($consultas);
        // exit;
}

