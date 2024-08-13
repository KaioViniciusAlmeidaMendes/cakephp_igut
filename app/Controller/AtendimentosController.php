<?php 
class AtendimentosController extends AppController{
    public $helpers = array('Html', 'Form', 'Flash');
    public $components = array('Flash');
        public function index() {
            $this->layout = 'ajax';
            $this->set('atendimentos', $this->Atendimento->find('all'));
        }
    public function edit($id = null){
            $this->layout = 'ajax';
            if(!$id){
                throw new NotFoundException(__('invalid post'));
            }
            $atendimento = $this->Atendimento->findById($id);
            if(!$atendimento){
                throw new NotFoundException(__('Invalid Post'));
            }
            $this->set('atendimento', $atendimento);
        }
    public function add(){
        $this->layout = 'ajax';
        if($this->request->is('post')){
            $this->Atendimento->create();
            if($this->Atendimento->save($this->request->data)){
                $this->Flash->success(__('Your post has been saved.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Flash->error(__('Unable to add your post.'));
        }
    }

    public function save($id = null){
        $this->layout = 'ajax';
        if(!$id){
            throw new NotFoundException(__('Invalid post'));
        }
        $atendimento = $this->Atendimento->findById($id);
        if(!$atendimento){
            throw new NotFoundException(__('Invalid post'));
        }
        if($this->request->is(array('post', 'put'))){
            $this->Atendimento->id = $id;
            if($this->Atendimento->save($this->request->data)){
                $this->Flash->success(__('Your post has been updated.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Flash->error(__('Unable to update your post.'));
        }
        if(!$this->request->data){
            $this->request->data = $atendimento;
        }
    }
    public function delete($id){
        $this->layout = 'ajax';
        if($this->request->is('get')){
            throw new MethodNotAllowedException();
        }

        if($this->Atendimento->delete($id)){
            $this->Flash->success(
                __('The post with id: %s has been deleted.', h($id))
            ); 
        }else{
            $this->Flash->error(
                __('The post with id: %s could not be deleted.', h($id))
            );
        }
        return $this->redirect(array('action' => 'index'));
    }
    }